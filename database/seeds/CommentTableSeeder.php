<?php

use Illuminate\Database\Seeder;

use App\Comment as Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('comments') -> delete();
    
        Comment::create([
            'author' => 'Chris Sevilleja',
            'text' => 'Look I am a test comment.'
        
        ]);
    
        Comment::create([
            'author' => 'Nick Cerminara',
            'text' => 'This is going to be super crazy.'
        ]);
    
        Comment::create([
            'author' => 'Holly Lloyd',
            'text' => 'I am a master of Laravel and Angular.'
        ]);

    }
  
}
