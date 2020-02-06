<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = \App\Mahasiswa::all();
        foreach($mhs as $mhsw){
            \App\Status::create( [
                'nim_pengguna'=>$mhsw->nim,
                'nomor_pc'=>'0',
                'status'=>'0'
                ]);
        }
    }
}
