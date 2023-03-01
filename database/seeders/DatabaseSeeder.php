<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Channel;
use id;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = User::all();
        
        foreach ($users as $user) {
            Channel::factory(2)->create([
                'user_id' => $user->id,
                
            ]);

            // factory(Channel::class, 10)->create([
            //     'user_id' => $user->id,
            // ]);
        }
        
    }
}
