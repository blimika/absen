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
    }
}
