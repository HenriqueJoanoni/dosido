<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
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
            [
                "image" => "https://images.unsplash.com/photo-1511379938547-c1f69419868d?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bXVzaWN8ZW58MHx8MHx8fDA%3D",
                "title" => "The Return of Vinyl: Why Records Are Making a Comeback",
                "description" => "A deep dive into why vinyl records are resurging in popularity among music lovers.",
                "date" => "2025-03-04",
                "categories" => 1, // Use category ID directly
            ],
            [
                "image" => "https://plus.unsplash.com/premium_photo-1683140707316-42df87760f3f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bXVzaWN8ZW58MHx8MHx8fDA%3D",
                "title" => "Concert Review: The Electrifying Performance of The Weekend",
                "description" => "A breakdown of The Weekend's latest tour stop and the highlights of the night.",
                "date" => "2025-02-15",
                "categories" => 2,
            ],
            [
                "image" => "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bXVzaWN8ZW58MHx8MHx8fDA%3D",
                "title" => "Coachella 2025: Lineup, Dates, and What to Expect",
                "description" => "Everything you need to know about the upcoming Coachella festival, including artist lineup and event details.",
                "date" => "2025-01-10",
                "categories" => 3,
            ],
            [
                "image" => "https://images.unsplash.com/photo-1507838153414-b4b713384a76?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bXVzaWN8ZW58MHx8MHx8fDA%3D",
                "title" => "The Life and Legacy of Freddie Mercury",
                "description" => "An in-depth biography of Queen's legendary frontman and his impact on music history.",
                "date" => "2024-12-20",
                "categories" => 4,
            ],
            [
                "image" => "https://images.unsplash.com/photo-1471478331149-c72f17e33c73?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG11c2ljfGVufDB8fDB8fHww",
                "title" => "Taylor Swift's Latest Album: A Track-by-Track Review",
                "description" => "Analyzing the themes, sound, and impact of Taylor Swift's newest release.",
                "date" => "2024-11-05",
                "categories" => 2,
            ]
        ];

        foreach ($articles as $articleData) {
            $categoryId = $articleData['categories'];
            unset($articleData['categories']);

            $article = Article::create($articleData);

            $article->categories()->attach($categoryId);
        }
    }
}
