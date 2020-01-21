<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //delete users table records
        DB::table('t_kodeabsen')->delete();
        //insert some dummy records
        DB::table('t_kodeabsen')->insert(array(
        array('kode_id'=>'0', 'kode_nama'=>'Masuk', 'created_at'=>NOW(),'updated_at'=>NOW()),
        array('kode_id'=>'1', 'kode_nama'=>'Pulang', 'created_at'=>NOW(),'updated_at'=>NOW()),
        array('kode_id'=>'2', 'kode_nama'=>'Keluar', 'created_at'=>NOW(),'updated_at'=>NOW()),
        array('kode_id'=>'3', 'kode_nama'=>'Kembali', 'created_at'=>NOW(),'updated_at'=>NOW()),
        array('kode_id'=>'4', 'kode_nama'=>'Masuk Lembur', 'created_at'=>NOW(),'updated_at'=>NOW()),
        array('kode_id'=>'5', 'kode_nama'=>'Pulang Lembur', 'created_at'=>NOW(),'updated_at'=>NOW()),
         ));
        
        //Pangkat Golongan
        DB::table('t_gol')->delete();
        //insert some dummy records
        DB::table('t_gol')->insert(array(
        array('kode'=>'11', 'gol'=>'I/a', 'pangkat'=> 'JURU MUDA'),
        array('kode'=>'12', 'gol'=>'I/b', 'pangkat'=>'JURU MUDA TINGKAT I'),
        array('kode'=>'13', 'gol'=>'I/c', 'pangkat'=>'JURU'),
        array('kode'=>'14', 'gol'=>'I/d', 'pangkat'=>'JURU TINGKAT I'),
        array('kode'=>'21', 'gol'=>'II/a','pangkat'=> 'PENGATUR MUDA'),
        array('kode'=>'22', 'gol'=>'II/b', 'pangkat'=>'PENGATUR MUDA TINGKAT I'),
        array('kode'=>'23', 'gol'=>'II/c', 'pangkat'=>'PENGATUR'),
        array('kode'=>'24', 'gol'=>'II/d', 'pangkat'=>'PENGATUR TINGKAT I'),
        array('kode'=>'31', 'gol'=>'III/a', 'pangkat'=>'PENATA MUDA'),
        array('kode'=>'32', 'gol'=>'III/b', 'pangkat'=>'PENATA MUDA TINGKAT I'),
        array('kode'=> '33', 'gol'=>'III/c','pangkat'=> 'PENATA'),
        array('kode'=> '34', 'gol'=>'III/d','pangkat'=> 'PENATA TINGKAT I'),
        array('kode'=>'41', 'gol'=>'IV/a', 'pangkat'=>'PEMBINA'),
        array('kode'=> '42', 'gol'=>'IV/b', 'pangkat'=>'PEMBINA TINGKAT I'),
        array('kode'=> '43', 'gol'=>'IV/c', 'pangkat'=>'PEMBINA UTAMA MUDA'),
        array('kode'=>'44', 'gol'=>'IV/d', 'pangkat'=>'PEMBINA UTAMA MADYA'),
        array('kode'=>'45', 'gol'=>'IV/e', 'pangkat'=>'PEMBINA UTAMA'),
         ));
    }
}
