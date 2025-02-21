<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Constantine',
            'email' => 'CONSTANTlNE@githubtest.com',
            'password' => bcrypt('khG$%669@fgTklop896'),
            'adminpass' => 'khG$%669@fgTklop896',
            'provider'=>'github',
            'provider_id'=>'113200507',
            'superAdmin'=>1
        ]);
    }
}
