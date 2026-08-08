<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Change these credentials as desired before running the seeder.
        $email = env('ADMIN_SEED_EMAIL', 'admin@surya.test');
        $password = env('ADMIN_SEED_PASSWORD', 'ChangeMe!2026');

        // Avoid creating duplicate admin users with same email
        $user = User::firstWhere('email', $email);

        if ($user) {
            $user->update([
                'name' => 'Administrator',
                'password' => Hash::make($password),
                'is_admin' => true,
            ]);
            return;
        }

        User::create([
            'name' => 'Administrator',
            'email' => $email,
            'password' => Hash::make($password),
            'is_admin' => true,
        ]);
    }
}
