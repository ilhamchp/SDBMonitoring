<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Status;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = Mahasiswa::all();
        foreach($mhs as $mhsw){
            Status::create( [
                'nim_pengguna'=>$mhsw->nim,
                'nomor_pc'=>'0',
                'status_pengguna'=>'0'
                ]);
        }
    }
}
