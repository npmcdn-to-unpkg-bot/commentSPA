<?php

use Illuminate\Database\Seeder;

//use Eloquent as Eloquent;

use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Model::unguard();
    
        $this->call('CommentTableSeeder');
        $this->command -> info('Comment table seeded.');

        Model::reguard();
    }
}
