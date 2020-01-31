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
        $user = new \App\User;
        $user->nama_user = 'Reza';
        $user->username = 'Reza';
        $user->password = bcrypt('123');
        $user->jk_user = 'L';
        $user->alamat_user = 'Cianjur';
        $user->no_user = '082218334321';
        $user->status_user = 'Admin';
        $user->keterangan_user = 'Admin';
        $user->save();
    }
}
