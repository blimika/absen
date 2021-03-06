<?php
namespace App\Helpers;

class CommunityBPS 
{
	private $cookie; // cookies 
	private $ch; // curl
	private $username; // username community
	private $password; // password community
	private $nip; // nip bps
	private $isLogin = false;
	
	// CONSTRUCTOR
	function __construct($username, $password){
		$this->cookie = "cookie.txt";
		$this->ch = curl_init();
		$this->username = $username;
		$this->password = $password;
		
		$this->login();
	}
	
	// DESTRUCTOR
	function __destruct() {
        if($this->ch) curl_close($this->ch);
    }
	
	/**** 
		GET ASN PROFILE METHOD 
		if exists, it will return an array, else will return false
	****/
	public function getprofil($nip){ // $nip = nip bps (example 340057260)
		$postdata = ""; 
		$url="https://community.bps.go.id/portal/index.php?id=2,6,".$nip; 
		$ch = $this->connectcurl($this->ch, $url, $postdata);
		$result = curl_exec ($ch); 
		
		$urlfoto = 'https://community.bps.go.id'.$this->get_string_between($result, '<center><img width=120px src="..', '" ></center>');
		$nama = trim(($this->get_string_between($result, 'Nama Lengkap</td><td width="2px" align="left">:</td><td align="left">', '</td></tr>')));
		$nipbps = $nip;
		$nippanjang = $this->get_string_between($result, $nipbps.' - ', '</td></tr>');
		$email = $this->get_string_between($result, 'Email</td><td width="2px" align="left">:</td><td align="left">', '</td></tr>');
		$username = str_replace("@bps.go.id","",$email);
		$satuankerja = trim($this->get_string_between($result, 'Satuan Kerja</td><td width="2px" align="left" valign="top">:</td><td align="left">', '</td></tr>'));
		$alamatkantor = trim($this->get_string_between($result, 'Alamat Kantor</td><td width="2px" align="left">:</td><td align="left">', '</td></tr>'));
		if ($satuankerja !="") {
			$sat = \explode(" ",$satuankerja);
			if ($sat[0]=='BPS' or $sat[0]=='Bagian' or $sat[0]=='Bidang') {
				$jabatan = 'Kepala';
			}
			else {
				$jabatan = '[Kepala/Staf]';
			}
		}
		return $nama !='' ? array(
			'nama'=>$nama,
			'nipbps'=>$nipbps,
			'nippanjang'=>$nippanjang,
			'email'=>$email,
			'username'=>$username,
			'jabatan'=>$jabatan,
			'satuankerja'=>$satuankerja,
			'alamatkantor'=>$alamatkantor,
			'urlfoto'=>$urlfoto
		) : false;
		
	}
	
	/**** 
		GET ALL ASN PROFILE IN BPS KABKOT 
		if exists, it will return arrays of profile, else will return false
	****/
	public function get_list_pegawai_kabkot($kodekab){  // $kodekab = BPS Kabkot code (example 7206)
		$postdata = ""; 
		$url="https://community.bps.go.id/portal/index.php?id=2,2,0&kab=".$kodekab; 
		$ch = $this->connectcurl($this->ch, $url, $postdata);
		$result = curl_exec ($ch); 
		
		$webpagestart = stripos($result, '<!DOCTYPE');
		$webpage = substr($result,$webpagestart);
		$doc = new \DOMDocument; 
		$doc->loadHTML($webpage, LIBXML_NOWARNING | LIBXML_NOERROR); 
		
		$content_node=$doc->getElementById("tengah");
		$listurlpegawai = array(); // to get ASN nip 
		$div_a_class_nodes=$this->getElementsByClass($content_node, 'div', 'left_box');
		foreach($div_a_class_nodes as $nodess){
			$items = $nodess->getElementsByTagName('a'); 
			foreach($items as $value) 
			{ 
				$attrs = $value->attributes; 
				$listurlpegawai[]=substr($attrs->getNamedItem('href')->nodeValue, -9);
			}

		}
		
		// convert all ASN nip to arrays of profile
		$listpegawai = array();
		foreach($listurlpegawai as $nip){
			$listpegawai[] = $this->getprofil($nip);
		}
		
		return count($listpegawai)>0 ? $listpegawai : false;
	}
	
	
	/**** 
		GET ALL ASN PROFILE IN BPS KABKOT 
		if exists, it will return arrays of profile, else will return false
	****/
	public function get_list_pegawai_provinsi($kodeprov){  // $kodekab = BPS Kabkot code (example 7206)
		$postdata = "org=".$kodeprov; 
		$url="https://community.bps.go.id/portal/index.php?id=2,0,0"; 
		$ch = $this->connectcurl($this->ch, $url, $postdata);
		$result = curl_exec ($ch); 
		
		$webpagestart = stripos($result, '<!DOCTYPE');
		$webpage = substr($result,$webpagestart);
		$doc = new \DOMDocument; 
		$doc->loadHTML($webpage, LIBXML_NOWARNING | LIBXML_NOERROR); 
		
		$content_node=$doc->getElementById("tengah");
		$listurlpegawai = array(); // to get ASN nip 
		$div_a_class_nodes=$this->getElementsByClass($content_node, 'div', 'left_box');
		foreach($div_a_class_nodes as $nodess){
			$items = $nodess->getElementsByTagName('a'); 
			
			foreach($items as $key => $value) 
			{ 
				$attrs = $value->attributes; 
				$listurlpegawai[]=$attrs->getNamedItem('href')->nodeValue;
			}

		}
		
		// convert all ASN nip to arrays of profile
		$listpegawai = array();
		$i = 0;
		foreach($listurlpegawai as $nip){
			$getnip = substr($nip,-9);
			
			if($i==0) {
				if(substr($getnip, -7)=='0000000'){
					$listpegawai[] = false;
					$listpegawai[] = $this->get_sublist_pegawai_provinsi($nip);
				}
				else {
					$listpegawai[] = $this->getprofil($getnip);
				}
			}else{
				if(substr($getnip, -7)=='0000000'){
					$listpegawai[] = $this->get_sublist_pegawai_provinsi($nip);
				}
			}
			
			$i++;
		}
		
		return count($listpegawai)>0 ? $listpegawai : false;
		//return $listurlpegawai;
	}
	
	/**** 
		GET ASN BY QUERY
		it will return array with index listpegawai and pesanerror
	****/
	public function pencarian($query, $wilayah="All"){  // $wilayah = BPS Code
		$postdata = "wil=".$wilayah."&namapg=".trim($query); 
		$url="https://community.bps.go.id/portal/index.php?id=2,5,0"; 
		$ch = $this->connectcurl($this->ch, $url, $postdata);
		$result = curl_exec ($ch); 
		
		$webpagestart = stripos($result, '<!DOCTYPE');
		$webpage = substr($result,$webpagestart);
		$doc = new \DOMDocument; 
		$doc->loadHTML($webpage, LIBXML_NOWARNING | LIBXML_NOERROR); 
		
		$listurlpegawai = array(); // to get ASN nip 
		$div_a_class_nodes=$this->getElementsByClass($doc, 'div', 'left_box');
		
		foreach($div_a_class_nodes as $nodess){
			$items = $nodess->getElementsByTagName('a'); 
			foreach($items as $value) 
			{ 
				$attrs = $value->attributes; 
				$listurlpegawai[]=substr($attrs->getNamedItem('href')->nodeValue, -9);
			}

		}
		
		// convert all ASN nip to arrays of profile
		$listpegawai = array();
		foreach($listurlpegawai as $nip){
			if($nip=='y.back(1)') break;
			$listpegawai[] = $this->getprofil($nip);
		}
		
		$pesanerror = null;
		if(count($listpegawai)==0){
			$pesanerror = trim($this->get_string_between($result, '<div class=pesan_error>', '<br>')); 
		}
		
		$hasil = array(
			'listpegawai'=>$listpegawai,
			'pesanerror'=>$pesanerror
		);
		
		return $hasil;
	}
	
	
	
	
	
	
	
	/*****
		****************************************
			DONT DO ANYTHING WITH CODES BELOW
		****************************************
	******/
	
	// INITIATE LOGIN COMMUNITY BPS TO USE OTHERS METHOD
	private function login() {
		$redirectto = 'https://community.bps.go.id';
		$appname = 'Front Page';
		$appid = '0';
		$remoteip = '0.0.0.0';
		$requesturl = "";
		$postdata = "uname=".$this->username."&pass=".$this->password."&redirectto=".$redirectto."&appname=".$appname."&appid=".$appid."&remoteip=".$remoteip."&requesturl=".$requesturl; 
		$url="https://community.bps.go.id/libs/clogin.php"; 
		
		$ch = $this->connectcurl($this->ch, $url, $postdata);
		$result = curl_exec ($ch); 

		// get cookies after login
		preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
		$cookies = array();
		foreach($matches[1] as $item) {
			parse_str($item, $cookie);
			$cookies = array_merge($cookies, $cookie);
		}

		if(isset($cookies['CommunityBPS'])){
			
			$kukis = $cookies['CommunityBPS'];
			$len_char=strlen($kukis)-32;
			$sessionid=substr($kukis,0,$len_char);
			$nip=substr($kukis,0,9);
			$hashkey=substr($kukis,-32);
			
			$this->nip = $nip;
			$this->ch = $ch;

		}else{
			throw new Exception("Plugin Community BPS stopped because The Credentials is wrong");
		}
	}
	
	// CONFIG CURL
	private function connectcurl($ch, $url, $postdata){
	
		$cookie="cookie.txt"; 
		curl_setopt ($ch, CURLOPT_URL, $url); 
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
		curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
		curl_setopt ($ch, CURLOPT_REFERER, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);

		curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
		curl_setopt ($ch, CURLOPT_POST, 1); 

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		
		return $ch;
	}
	
	// GET SUBSTRING BETWEEN TWO STRING
	private function get_string_between($string, $start, $end){
		$string = ' ' . $string;
		$ini = strpos($string, $start);
		if ($ini == 0) return '';
		$ini += strlen($start);
		$len = strpos($string, $end, $ini) - $ini;
		return substr($string, $ini, $len);
	}
	
	// GET ELEMENTS OF HTML DOM BY CLASS NAME
	private function getElementsByClass(&$parentNode, $tagName, $className) {
		$nodes=array();

		$childNodeList = $parentNode->getElementsByTagName($tagName);
		for ($i = 0; $i < $childNodeList->length; $i++) {
			$temp = $childNodeList->item($i);
			if (stripos($temp->getAttribute('class'), $className) !== false) {
				$nodes[]=$temp;
			}
		}

		return $nodes;
	}
	
	// GET ALL ASN PROFILE MORE DEEPER
	private function get_sublist_pegawai_provinsi($suburl){ 
		$postdata = ""; 
		$url="https://community.bps.go.id/portal/".$suburl; 
		$ch = $this->connectcurl($this->ch, $url, $postdata);
		$result = curl_exec ($ch); 
		
		$webpagestart = stripos($result, '<!DOCTYPE');
		$webpage = substr($result,$webpagestart);
		$doc = new \DOMDocument; 
		$doc->loadHTML($webpage, LIBXML_NOWARNING | LIBXML_NOERROR); 
		
		$content_node=$doc->getElementById("tengah");
		$listurlpegawai = array(); // to get ASN nip 
		$div_a_class_nodes=$this->getElementsByClass($content_node, 'div', 'left_box');
		foreach($div_a_class_nodes as $nodess){
			$items = $nodess->getElementsByTagName('a'); 
			foreach($items as $value) 
			{ 
				$attrs = $value->attributes; 
				$listurlpegawai[]=substr($attrs->getNamedItem('href')->nodeValue, -9);
			}
		}
		
		// convert all ASN nip to arrays of profile
		$listpegawai = array();
		foreach($listurlpegawai as $nip){
			$listpegawai[] = $this->getprofil($nip);
		}
		
		return count($listpegawai)>0 ? $listpegawai : false;
	}
	
}

class AmbilLogAbsen
{
	private $ch; // curl
	private $ip_alat; // ip alat absen
	private $sdate; //start date
	private $edate; //end date
	private $tgl_hari_ini;
	private $number;
	
	// CONSTRUCTOR
	function __construct(){
		$this->ch = curl_init();
		$this->ip_alat = '10.52.6.235';
		$this->tgl_hari_ini = date("Y-m-d");
		for($i=1;$i<=200;$i++)
		{
			$this->number.=($i.",");
		}
		$this->number=substr($this->number,0,strlen($this->number)-1);
		//$this->number = $number;
	}
	
	// DESTRUCTOR
	function __destruct() {
        if($this->ch) curl_close($this->ch);
    }
	
	//get absen hari ini 
	public function hari_ini()
	{
		$tanggal_awal=$this->tgl_hari_ini;
		$tanggal_akhir=$this->tgl_hari_ini;
		$url_absen = "http://".$this->ip_alat."/form/Download?uid=".$this->number."&sdate=".$tanggal_awal."&edate=".$tanggal_akhir;
		
		$ch = $this->connectcurl($this->ch, $url_absen);
		$hasil = curl_exec ($ch); //hasil link
		
		$data = array('data' => 'Data tidak tersedia', 'jumlah_data'=>0, 'status' => false);
		$record = explode("\n",$hasil);
		$banyak_data=count($record);
		//cek record
		$peg_id='';
		$kode='';
		$tgl='';
		$arrData = array();
		if ($banyak_data > 0) {
			//record ada isiannya proses
			foreach($record as $r) {
				//pecah data record		
				$r = str_replace("\t","|",$r);
				$isi = explode("|",$r);
				//array_push($data, $isi);
				if ($isi[0] !="")  {
					$tgl = explode(" ", $isi[2]);
					//$peg_id=$isi[0];
					//$tgl_absen=$tgl[0];
					//$jam_absen=$tgl[1];
					//$kode=$isi[4];
					//$peg_nama=$isi[1];
					//$kode_absen=intval($kode);
					 $arrData[] = array(
						 'absen_id' => $isi[0],
						 'absen_nama' => $isi[1],
						 'absen_tgl' => $tgl[0],
						 'absen_waktu' => $tgl[1],
						 'absen_kode'=> intval($isi[4])
					 );
					}
				}
			$data = array(
				'data'=> $arrData,
				'jumlah_data' => ($banyak_data-1),
				'status'=> true
			);
		}
		//return Response()->json($data);
		return $data;
	}
	public function getdata($sdate,$edate)
	{
		//$tanggal_awal=$this->tgl_hari_ini;
		//$tanggal_akhir=$this->tgl_hari_ini;
		$url_absen = "http://".$this->ip_alat."/form/Download?uid=".$this->number."&sdate=".$sdate."&edate=".$edate;
		
		$ch = $this->connectcurl($this->ch, $url_absen);
		$hasil = curl_exec ($ch); //hasil link
		
		$data = array('data' => 'Data tidak tersedia', 'jumlah_data'=>0, 'status' => false);
		$record = explode("\n",$hasil);
		$banyak_data=count($record);
		//cek record
		$peg_id='';
		$kode='';
		$tgl='';
		$arrData = array();
		if ($banyak_data > 0) {
			//record ada isiannya proses
			foreach($record as $r) {
				//pecah data record		
				$r = str_replace("\t","|",$r);
				$isi = explode("|",$r);
				//array_push($data, $isi);
				if ($isi[0] !="")  {
					$tgl = explode(" ", $isi[2]);
					//$peg_id=$isi[0];
					//$tgl_absen=$tgl[0];
					//$jam_absen=$tgl[1];
					//$kode=$isi[4];
					//$peg_nama=$isi[1];
					//$kode_absen=intval($kode);
					 $arrData[] = array(
						 'absen_id' => $isi[0],
						 'absen_nama' => $isi[1],
						 'absen_tgl' => $tgl[0],
						 'absen_waktu' => $tgl[1],
						 'absen_kode'=> intval($isi[4])
					 );
					}
				}
			$data = array(
				'data'=> $arrData,
				'jumlah_data' => ($banyak_data-1),
				'status'=> true
			);
		}
		//return Response()->json($data);
		return $data;
	}
	// CONFIG CURL
	private function connectcurl($ch, $url){
	
		curl_setopt ($ch, CURLOPT_URL, $url); 
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
		curl_setopt ($ch, CURLOPT_TIMEOUT, 120); 
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		return $ch;
	}
}
//tambah class tanggal

class Tanggal {
    public static function Panjang($tgl) {
        $bln_panjang = array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        $tahun=date("Y",strtotime($tgl));
	    $tgl_=date("j",strtotime($tgl));
	    $bln_indo=date("n",strtotime($tgl));
        $tanggal= $tgl_ .' '.$bln_panjang[$bln_indo].' '.$tahun;
        return $tanggal;
    }

    public static function Pendek($tgl) {
        $bln_panjang = array(1=>"Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");
        $tahun=date("Y",strtotime($tgl));
	    $tgl_=date("j",strtotime($tgl));
	    $bln_indo=date("n",strtotime($tgl));
        $tanggal= $tgl_ .' '.$bln_panjang[$bln_indo].' '.$tahun;
        return $tanggal;
    }

    public static function HariPanjang($tgl) {
        $nama_hari_indo = array (0=> "Minggu", 1=> "Senin", 2=> "Selasa", 3=> "Rabu", 4=> "Kamis", 5=> "Jumat", 6=> "Sabtu");
        $bln_panjang = array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        $tahun=date("Y",strtotime($tgl));
	    $hari=date("w",strtotime($tgl));
	    $tgl_=date("j",strtotime($tgl));
	    $bln_indo=date("n",strtotime($tgl));
        $tanggal= $nama_hari_indo[$hari].', '. $tgl_ .' '.$bln_panjang[$bln_indo].' '.$tahun;
	    return $tanggal;
    }
    public static function HariPendek($tgl) {
        $nama_hari_indo = array (0=> "Min", 1=> "Sen", 2=> "Sel", 3=> "Rab", 4=> "Kam", 5=> "Jum", 6=> "Sab");
        $bln_panjang = array(1=>"Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");
        $tahun=date("Y",strtotime($tgl));
	    $hari=date("w",strtotime($tgl));
	    $tgl_=date("j",strtotime($tgl));
	    $bln_indo=date("n",strtotime($tgl));
        $tanggal= $nama_hari_indo[$hari].', '. $tgl_ .' '.$bln_panjang[$bln_indo].' '.$tahun;
	    return $tanggal;
    }
}
class CekAbsen
{
	/*
	TL1 : 1 detik > jam masuk <= 30 menit
	TL2 : 30 mnt > jam masuk <= 60 mnt
	TL3 : 60 menit > jam masuk <= 90 menit
	TL4 : > 90 menit
	*/
	public static function Datang($jam_absen, $jam_jadwal)
	{
		$waktu = \Carbon\Carbon::parse($jam_jadwal)->diffInMinutes(\Carbon\Carbon::parse($jam_absen),false);
		if ($waktu > 0 and $waktu <= 30)
		{
			//tl1
			$tl=1;
			$warna = 'badge-danger';
		}
		elseif ($waktu>30 and $waktu<=60) {
			$tl=2;
			$warna = 'badge-danger';
		}
		elseif ($waktu>60 and $waktu<=90)
		{
			$tl=3;
			$warna = 'badge-danger';
		}
		elseif ($waktu>90)
		{
			$tl=4;
			$warna = 'badge-danger';
		}
		else {
			$tl=0;
			$warna='badge-success';
		}
		$arr = array(
			'tl'=> $tl,
			'waktu'=> $waktu,
			'warna'=> $warna,
		);
		return $arr;
	}
	public static function Pulang($jam_absen, $jam_jadwal)
	{
		$waktu = \Carbon\Carbon::parse($jam_jadwal)->diffInMinutes(\Carbon\Carbon::parse($jam_absen),false);
		if ($waktu < 0 and $waktu >= -30)
		{
			//psw1
			$psw=1;
			$warna = 'badge-danger';
		}
		elseif ($waktu <-30 and $waktu >=-60) {
			$psw=2;
			$warna = 'badge-danger';
		}
		elseif ($waktu <-60 and $waktu>=-90)
		{
			$psw=3;
			$warna = 'badge-danger';
		}
		elseif ($waktu < -90)
		{
			$psw=4;
			$warna = 'badge-danger';
		}
		else {
			$psw=0;
			$warna='badge-success';
		}
		$arr = array(
			'psw'=> $psw,
			'waktu'=> $waktu,
			'warna'=> $warna,
		);
		return $arr;
	}
}
Class Generate {
    public static function Kode($length) {
        $kata='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code_gen = '';
        for ($i = 0; $i < $length; $i++) {
            $pos = rand(0, strlen($kata)-1);
            $code_gen .= $kata{$pos};
            }
        return $code_gen;
	}
}