<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $articles = [
        'title' => 'The Evolution of Hip-Hop: From the Streets to Global Domination',
        'content' => '<h1>Hip-hop has grown from a niche cultural movement in the Bronx during the 1970s to a dominant global force in music, fashion, and entertainment. Artists like Grandmaster Flash, Tupac Shakur, and Jay-Z have shaped the genre, pushing it beyond music to become a lifestyle. Today, hip-hop influences social movements, political activism, and mainstream pop culture. With streaming platforms allowing global reach, the genre continues to evolve with new sounds, subgenres, and boundary-pushing artists.</p>',
        'thumbnailURL' => 'https://example.com/hiphop-thumbnail.jpg',
        'mediaType' => 'video',
        'mediaURL' => 'https://example.com/hiphop-video.mp4',
        'leadStory' => false
       ];

       Article::insert($articles);
    }
}
