<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use App\Models\Profile;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) { 
            $task = new Task();
            $task->title = $faker->sentence();
            $task->description = $faker->paragraph();
            $task->project_id = rand(1, 10);
            $task->user_id = rand(1, 2);
            $task->status = 0;
            $task->start_date = '2019-08-02';
            $task->due_date = '2019-08-02';
            $task->end_date = '2019-08-02';
            $task->save();
        }

        for ($i=0; $i < 10; $i++) { 
            $project = new Project();
            $project->name = $faker->sentence();
            $project->description = $faker->paragraph();
            $project->user_id = rand(1, 2);
            $project->save();
        }

        for ($i=0; $i < 10; $i++) { 
            $profile = new Profile();
            $profile->user_id = rand(1, 10);
            $profile->photo_url = $faker->image('public/images',640,480, null, false);
            $profile->address = $faker->sentence();
            $profile->phone = '+95'.rand(1111111,9999999);
            $profile->git = 'https://'.Str::random(10).'.com';
            $profile->skype = 'https://'.Str::random(10).'.com';
            $profile->created_at = '2019-08-02';
            $profile->updated_at = '2019-08-02';
            $profile->save();
        }

        $user = new User();
        $user->name = "Bob";
        $user->email = "bob@gmail.com";
        $user->password = bcrypt("123123");
        $user->save();

        $user = new User();
        $user->name = "Alice";
        $user->email = "alice@gmail.com";
        $user->password = bcrypt("123123");
        $user->save();
        
        // $this->call(UsersTableSeeder::class);
    }
}
