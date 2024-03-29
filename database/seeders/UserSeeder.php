<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "id" => Uuid::uuid4()->getHex(),
            "nama" => "Super Admin",
            "email" => "super_admin@gmail.com",
            "password" =>bcrypt("super_admin"),
            "role" => "admin",
            "status" => 1
        ]);

        User::create([
            "id" => Uuid::uuid4()->getHex(),
            "nama" => "Petugas",
            "email" => "petugas@gmail.com",
            "password" => bcrypt("petugas01"),
            "role" => "petugas",
            "status" => 1
        ]);

        User::create([
            "id" => Uuid::uuid4()->getHex(),
            "nama" => "Kepala Kantor",
            "email" => "kepala_kantor@gmail.com",
            "password" => bcrypt("kepala01"),
            "role" => "kepala",
            "status" => 1
        ]);

        User::create([
            "id" => Uuid::uuid4()->getHex(),
            "nama" => "Warga",
            "email" => "warga@gmail.com",
            "password" => bcrypt("warga01"),
            "role" => "warga",
            "status" => 1
        ]);
    }
}
