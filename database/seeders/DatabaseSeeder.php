<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\StatesSeeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $user = new User();
         $user->name = 'Edwin Henriquez';
         $user->email = 'ed@gmail.com';
         $user->password = bcrypt('123');
         $user->email_verified_at = now();
         $user->remember_token = Str::random(10);
         $user->save();

        \App\Models\User::factory(10)->create();

        $this->call(StatesSeeder::class);

        \App\Models\Post::factory(120)->create();

    }
}
