<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin'),
                'is_admin'=>true,
                'banned'=>false,
            ],
            [
                'name'=>'User',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('user'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
            [
                'name' => 'Bannedict',
                'email' => 'bannedict@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>true,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('12345'),
                'is_admin'=>false,
                'banned'=>false,
            ],
        ]);
    }
}
