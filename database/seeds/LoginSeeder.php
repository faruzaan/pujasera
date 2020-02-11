<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Pegawai;
        $user->id_pegawai = 'P001';
        $user->id_jabatan = 'JB001';
        $user->nama_pegawai = 'Farhan';
        $user->alamat_pegawai = 'Cianjur';
        $user->nomer_tlp = '082218334321';
        $user->username = 'Admin';
        $user->password = bcrypt('123');
        $user->status_pegawai = 'Aktif';
        $user->save();
    }
}
