<?php

use Illuminate\Database\Seeder;

use function GuzzleHttp\Promise\each;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Technology::class, 5)->create();
        // factory(App\Project::class, 5)->create();


        \App\User::create([
            'name' => 'Jomoto',
            'email' => 'j@admin.com',
            'password' => bcrypt('12345678')
        ])->each(function($user){

            $user->technologies()->attach($this->array(rand(1,5)));

        });

        factory(App\User::class, 3)->create()->each(function($user){


            $projects_rand = rand(1, 5);
            for($i=1; $i < $projects_rand; $i++){

                $user->projects()->save(factory(App\Project::class)->make())
                ->each(function($project){

                    $projects = [];
                    $projects [] = $project->id;
                    if(in_array($project->id, $projects)){
                        return;
                    }
                    $project->technologies()->attach($this->array(rand(1,5)));
                }

                
                
            );
            
            
            }

            $user->technologies()->attach($this->array(rand(1,5)));


        });


    }

    public function array($max){

        $values = [];

        for($i=1; $i <= $max; $i++){
            $values[] = $i;
        }

        return $values;

    }
}
