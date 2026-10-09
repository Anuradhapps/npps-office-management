<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@npps.local'],
            [
                'name' => 'NPPS Administrator',
                'password' => Hash::make(
                    (string) env('NPPS_ADMIN_PASSWORD', '')
                ),
            ]
        );
    }
}