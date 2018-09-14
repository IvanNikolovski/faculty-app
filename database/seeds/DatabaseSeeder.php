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
        // $this->call(UsersTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(SemesterTableSeeder::class);
        $this->call(CourseTableSeeder::class);

    }
}
