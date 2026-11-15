<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['full_name'=>'Maria Santos','email'=>'maria.santos@example.com','phone'=>'09171234567'],
            ['full_name'=>'Juan Dela Cruz','email'=>'juan.delacruz@example.com','phone'=>'09181234567'],
            ['full_name'=>'Angela Reyes','email'=>'angela.reyes@example.com','phone'=>'09191234567'],
            ['full_name'=>'Paolo Garcia','email'=>'paolo.garcia@example.com','phone'=>'09201234567'],
            ['full_name'=>'Nina Flores','email'=>'nina.flores@example.com','phone'=>'09211234567'],
        ]);
        DB::table('users')->insert([
            ['username'=>'admin','full_name'=>'System Administrator'],
            ['username'=>'cashier1','full_name'=>'Carlo Mendoza'],
            ['username'=>'cashier2','full_name'=>'Lea Navarro'],
            ['username'=>'manager','full_name'=>'Ramon Bautista'],
            ['username'=>'staff1','full_name'=>'Sofia Castillo'],
        ]);
    }
}
