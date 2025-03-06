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
                "description" => "
In an era dominated by digital streaming and instant access to millions of songs at the tap of a screen, one might assume that physical music formats are a thing of the past. However, vinyl records have been making a remarkable comeback over the past decade, experiencing a resurgence in popularity among music lovers of all generations.  &nbsp;

This article explores the factors driving the vinyl revival, from the nostalgia and warmth of analog sound to the tangible experience of collecting records. We delve into how younger audiences, despite growing up in a digital age, have embraced the format, drawn by its authenticity and the resurgence of record stores as cultural hubs. The role of artists and labels in re-releasing albums on vinyl, as well as the impact of special editions and exclusive pressings, also plays a crucial part in the format’s revival.  &nbsp;

![Vinyl Records](https://images.unsplash.com/photo-1471478331149-c72f17e33c73?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG11c2ljfGVufDB8fDB8fHww)   &nbsp;

Beyond nostalgia, the superior audio quality of vinyl, its artistic album covers, and the immersive listening experience contribute to its growing appeal. We also examine the role of Record Store Day, a global event that has boosted sales and rekindled appreciation for vinyl culture. Additionally, we discuss the sustainability aspect—how vinyl, when produced responsibly, can be a more eco-conscious alternative to the energy-intensive nature of streaming.  &nbsp;

Through interviews with collectors, audiophiles, and industry experts, this article provides a deep dive into why vinyl records have not only survived but are thriving in an era where convenience reigns supreme. Whether you’re a longtime vinyl enthusiast or a newcomer intrigued by the format, this exploration of the record renaissance sheds light on why spinning records has become more than just a trend—it’s a movement.",
                "date" => "2025-03-04",
                "categories" => 1,
                "premium" => false,
            ],
            [
                "image" => "https://plus.unsplash.com/premium_photo-1683140707316-42df87760f3f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bXVzaWN8ZW58MHx8MHx8fDA%3D",
                "title" => "Concert Review: The Electrifying Performance of The Weekend",
                "description" => "A breakdown of The Weekend's latest tour stop and the highlights of the night.",
                "date" => "2025-02-15",
                "categories" => 2,
                "premium" => true,
            ],
            [
                "image" => "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bXVzaWN8ZW58MHx8MHx8fDA%3D",
                "title" => "Coachella 2025: Lineup, Dates, and What to Expect",
                "description" => "Everything you need to know about the upcoming Coachella festival, including artist lineup and event details.",
                "date" => "2025-01-10",
                "categories" => 3,
                "premium" => false,
            ],
            [
                "image" => "https://images.unsplash.com/photo-1507838153414-b4b713384a76?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bXVzaWN8ZW58MHx8MHx8fDA%3D",
                "title" => "The Life and Legacy of Freddie Mercury",
                "description" => "An in-depth biography of Queen's legendary frontman and his impact on music history.",
                "date" => "2024-12-20",
                "categories" => 4,
                "premium" => true,
            ],
            [
                "image" => "https://images.unsplash.com/photo-1471478331149-c72f17e33c73?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG11c2ljfGVufDB8fDB8fHww",
                "title" => "Taylor Swift's Latest Album: A Track-by-Track Review",
                "description" => "Analyzing the themes, sound, and impact of Taylor Swift's newest release.",
                "date" => "2024-11-05",
                "categories" => 2,
                "premium" => false,
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
