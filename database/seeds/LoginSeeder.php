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
        $user->nama_user = 'Farhan';
        $user->username_user = 'Faruzaan';
        $user->password_user = bcrypt('Admin');
        $user->jk_user = 'L';
        $user->alamat_user = 'Cianjur';
        $user->no_user = '082218334321';
        $user->status_user = 'Super Admin';
        $user->keterangan_user = 'Super Admin';
        $user->save();
    }
}
