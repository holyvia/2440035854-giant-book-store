<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::factory()->create([
            'title'=>'AI 2041: Ten Visions for Our Future',
            'image'=>'/storage/bookImages/tenVisions.jpg'
        ]);
        Book::factory()->create([
            'title'=>'The Hunger Games',
            'image'=>'/storage/bookImages/hungerGames.jpg'
        ]);
        Book::factory()->create([
            'title'=>'Divergent',
            'image'=>'/storage/bookImages/divergent.jpg'
        ]);
        Book::factory()->create([
            'title'=>'Thinking, Fast and Slow',
            'image'=>'/storage/bookImages/thinkingFastAndSlow.jpg'
        ]);
        Book::factory()->create([
            'title'=>'SPY×FAMILY 10',
            'image'=>'/storage/bookImages/tenVisions.jpg'
        ]);
        Book::factory()->create([
            'title'=>'Caves',
            'image'=>'/storage/bookImages/caves.jpg'
        ]);
    }
}
