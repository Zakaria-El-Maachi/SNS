<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\craftsman::factory(15)->create();
        \App\Models\request::factory(10)->create();
        \App\Models\review::factory(7)->create();
        \App\Models\service::factory(5)->create();
        \App\Models\CraftsmanService::factory(30)->create();

        DB::table('users')->insert([
            'name' => 'Zakaria',
            'email' => 'Zakaria.ELMAACHI@um6p.ma',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'User',
        ]);

        DB::table('users')->insert([
            'name' => 'Abdellatif',
            'email' => 'merciless263@gmail.com',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'Craftsman',
            'craftsman_id' => 1,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
