<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        \App\User::create([
            'name' => 'Jomoto',
            'email' => 'j@admin.com',
            'password' => bcrypt('12345678')
        ]);

        factory(App\User::class, 3)->create();
        factory(App\Project::class, 20)->create();
    }
}
