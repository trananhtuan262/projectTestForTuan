<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'Sex' => Str::random(10),
            
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'Sex' => Str::random(10),
            
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'Sex' => Str::random(10),
            
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'Sex' => Str::random(10),
            
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'Sex' => Str::random(10),
           
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'Sex' => Str::random(10),
            
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'Sex' => Str::random(10),
        
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'Sex' => Str::random(10),
            'password' => Hash::make('password'),
        ]);
    }
}
