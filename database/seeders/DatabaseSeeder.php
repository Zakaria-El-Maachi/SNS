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
        \App\Models\craftsman::factory(6)->create();
        \App\Models\request::factory(15)->create();
        \App\Models\review::factory(10)->create();
        \App\Models\service::factory(5)->create();
        \App\Models\CraftsmanService::factory(13)->create();

        DB::table('users')->insert([
            'name' => 'Zakaria',
            'email' => 'Zakaria.ELMAACHI@um6p.ma',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'User',
        ]);

        DB::table('users')->insert([
            'name' => 'Rachid',
            'email' => 'haha@gmail.com',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'Craftsman',
            'craftsman_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Ahmed',
            'email' => 'hehe@gmail.com',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'Craftsman',
            'craftsman_id' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'Anas',
            'email' => 'hihi@gmail.com',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'Craftsman',
            'craftsman_id' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'Ilyas',
            'email' => 'hoho@gmail.com',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'Craftsman',
            'craftsman_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'Soulaimane',
            'email' => 'huhu@gmail.com',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'Craftsman',
            'craftsman_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'Mouad',
            'email' => 'hyhy@gmail.com',
            'password' => Hash::make('qwertyui'),
            'account_type' => 'Craftsman',
            'craftsman_id' => 6,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
