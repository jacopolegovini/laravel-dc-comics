<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kingdomHeartsGames = [
            [
                'title' => 'Kingdom Hearts',
                'releaseYearJP' => 2002,
                'releaseYearWW' => 2002,
                'console' => 'PlayStation 2',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/9/9f/Kingdom_Hearts_II.png',
            ],
            [
                'title' => 'Kingdom Hearts: Chain of Memories',
                'releaseYearJP' => 2004,
                'releaseYearWW' => 2004,
                'console' => 'Game Boy Advance',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/a/a3/Chain_of_Memories_boxart.jpg',
            ],
            [
                'title' => 'Kingdom Hearts II',
                'releaseYearJP' => 2005,
                'releaseYearWW' => 2006,
                'console' => 'PlayStation 2',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/9/9f/Kingdom_Hearts_II.png',
            ],
            [
                'title' => 'Kingdom Hearts: 358/2 Days',
                'releaseYearJP' => 2009,
                'releaseYearWW' => 2009,
                'console' => 'Nintendo DS',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/0/0b/358_2_Days_boxart.png',
            ],
            [
                'title' => 'Kingdom Hearts: Birth by Sleep',
                'releaseYearJP' => 2010,
                'releaseYearWW' => 2010,
                'console' => 'PlayStation Portable',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/1/1c/Kingdom_Hearts_Birth_by_Sleep_boxart.png',
            ],
            [
                'title' => 'Kingdom Hearts: Dream Drop Distance',
                'releaseYearJP' => 2012,
                'releaseYearWW' => 2012,
                'console' => 'Nintendo 3DS',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/d/d2/Kingdom_Hearts_Dream_Drop_Distance_boxart.jpg',
            ],
            [
                'title' => 'Kingdom Hearts III',
                'releaseYearJP' => 2019,
                'releaseYearWW' => 2019,
                'console' => 'PlayStation 4, Xbox One',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/5/5b/Kingdom_Hearts_III_cover.jpg',
            ],
            [
                'title' => 'Kingdom Hearts HD 1.5 Remix',
                'releaseYearJP' => 2013,
                'releaseYearWW' => 2013,
                'console' => 'PlayStation 3',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/a/a3/Kingdom_Hearts_HD_1.5_Remix.jpg',
            ],
            [
                'title' => 'Kingdom Hearts HD 2.5 Remix',
                'releaseYearJP' => 2014,
                'releaseYearWW' => 2014,
                'console' => 'PlayStation 3',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/3/3b/Kingdom_Hearts_HD_2.5_Remix.png',
            ],
            [
                'title' => 'Kingdom Hearts: Melody of Memory',
                'releaseYearJP' => 2020,
                'releaseYearWW' => 2020,
                'console' => 'Nintendo Switch, PlayStation 4, Xbox One',
                'coverImage' => 'https://upload.wikimedia.org/wikipedia/en/e/e1/Kingdom_Hearts_Melody_of_Memory_cover.png',
            ],
        ];

        foreach ($kingdomHeartsGames as $kingdomHeartsGame) {
            Videogame::create($kingdomHeartsGame);
        }
    }
}
