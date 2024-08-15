<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'name' => 'Fadiyah',
            'email' => 'fadiyah@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        Member::create([
            'name' => 'Fadiyah',
            'nisn' => 12345,
            'email' => 'fadiyah@gmail.com',
            'phone' => 8888,
        ]);
        Member::create([
            'name' => 'Irbati',
            'nisn' => 12345,
            'email' => 'fadiyah@gmail.com',
            'phone' => 8898,
        ]);
    }
}
