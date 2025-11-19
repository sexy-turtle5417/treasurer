<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            "email" => "jaypee.zulieta@gmail.com",
            "password" => "password",
            "is_admin" => true
        ]);

        Account::factory()
            ->for($user)
            ->count(10)
            ->create();
    }
}
