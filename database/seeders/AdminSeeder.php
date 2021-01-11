<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $secret_string = Str::random(30);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gravayo.com',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active' => 1,
            'user_secret_code' => $secret_string
        ]);

        $user->about_model()->create([
            'user_id' => User::select('id')->where('user_secret_code', $secret_string),
        ]);

        $user->notifications()->create([
            'user_id' => User::where('user_secret_code', $secret_string)->value('id'),
            'hide_profile' => 1
        ]);

        $user->assignRole('Owner');
    }
}
