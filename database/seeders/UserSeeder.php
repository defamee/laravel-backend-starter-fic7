<?php

namespace Database\Seeders;
//use App\Models\User;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name'=>'Super Admin',
            'email'=>'superadmin@gmail.com',
            'email_verified_at'=>now(),
            'role'=>'superadmin',
            'phone'=>'082330623370',
            'bio'=>'flutter Dev',
            'password'=>Hash::make('123456'),
        ]);
        User::create([
            'name'=>'fauzan',
            'email'=>'fauzan@gmail.com',
            'email_verified_at'=>now(),
            'role'=>'admin',
            'phone'=>'082330623371',
            'bio'=>'flutter and Laravel Dev',
            'password'=>Hash::make('123456'),
        ]);

    }
}
