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

         //Pangkat Golongan
        DB::table('hari_libur')->delete();
        //insert some dummy records
        DB::table('hari_libur')->insert(array(
            array('tgl_libur'=>'2020-01-01', 'tgl_ket'=>'Tahun Baru 2020 Masehi', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-01-25', 'tgl_ket'=>'Tahun Baru Imlek 2571 Kongzili', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-03-22', 'tgl_ket'=>'Isra Mikraj Nabi Muhammad SAW', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-03-25', 'tgl_ket'=>'Hari Suci Nyepi Tahun Baru Saka 1942', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-04-10', 'tgl_ket'=>'Wafat Isa Al Masih', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-05-01', 'tgl_ket'=>'Hari Buruh Internasional', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-05-07', 'tgl_ket'=>'Hari Raya Waisak 2564', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-05-21', 'tgl_ket'=>'Kenaikan Isa Al Masih', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-05-22', 'tgl_ket'=>'Cuti bersama untuk Hari Raya Idul Fitri', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-05-24', 'tgl_ket'=>'Hari Raya Idul Fitri 1441 Hijriyah', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-05-25', 'tgl_ket'=>'Hari Raya Idul Fitri 1441 Hijriyah', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-05-26', 'tgl_ket'=>'Cuti bersama untuk Hari Raya Idul Fitri', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-05-27', 'tgl_ket'=>'Cuti bersama untuk Hari Raya Idul Fitri', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-06-01', 'tgl_ket'=>'Hari Lahir Pancasila', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-07-31', 'tgl_ket'=>'Hari Raya Idul Adha 1441 Hijriyah', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-08-17', 'tgl_ket'=>'Hari Kemerdekaan RI', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-08-20', 'tgl_ket'=>'Tahun Baru Islam 1442 Hijriyah', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-10-29', 'tgl_ket'=>'Maulid Nabi Muhammad SAW', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-12-24', 'tgl_ket'=>'Cuti Bersama untuk Hari Raya Natal', 'created_at'=>NOW(),'updated_at'=>NOW()),
            array('tgl_libur'=>'2020-12-25', 'tgl_ket'=>'Hari Raya Natal', 'created_at'=>NOW(),'updated_at'=>NOW()),
        ));
    }
}
