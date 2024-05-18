<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'mahbubhussaincse@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = 'Mahbub Hussain';
            $user->email = 'mahbubhussaincse@gmail.com';
            $user->email_verified_at = now();
            $user->password = static::$password ??= Hash::make('password');
            $user->remember_token = Str::random(10);
            $user->save();
        }
    }
}
