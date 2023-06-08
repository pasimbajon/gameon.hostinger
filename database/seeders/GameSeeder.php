<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game = [
            [
                'game_title' => 'Asssassins Creed Origins',
                'game_desc' => 'ASSASSIN’S CREED® ORIGINS IS A NEW BEGINNING *The Discovery Tour by Assassin’s Creed®: Ancient Egypt is available now as a free update!* Ancient Egypt, a land of majesty and intrigue, is disappearing in a ruthless fight for power.',
                'price' => '2200.00',
                'img_cover' => '/images/GAMES/ASSASSINS CREED ORIGINS/ACO_Cover.jpg',
                'genre_id' => 1
            ],
            [
                'game_title' => 'Age of Wonders 4',
                'game_desc' => 'Rule a fantasy realm of your own design! Explore new magical realms in Age of Wonders’ signature blend of 4X strategy and turn-based tactical combat. Control a faction that grows and changes as you expand your empire with each turn!',
                'price' => '1859.00',
                'img_cover' => '/images/GAMES/AGE OF WONDERS 4/AOW4_Cover.jpg',
                'genre_id' => 11
            ],
            [
                'game_title' => 'Apex Legends',
                'game_desc' => 'Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.',
                'price' => 'Free',
                'img_cover' => '/images/GAMES/APEX LEGENDS/APEX_COVER.jpg',
                'genre_id' => 8
            ],
            [
                'game_title' => 'Call Of Duty Modern Warfare II',
                'game_desc' => 'Call of Duty®: Modern Warfare® II drops players into an unprecedented global conflict that features the return of the iconic Operators of Task Force 141.',
                'price' => 'Free',
                'img_cover' => '/images/GAMES/CALL OF DUTY MODERN WARFARE II/CODMWII_Cover.jpg',
                'genre_id' => 8
            ],
            [
                'game_title' => 'Counter Strike Global Offensive',
                'game_desc' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).',
                'price' => 'Free',
                'img_cover' => '/images/GAMES/COUNTER-STRIKE GLOBAL OFFENSIVE/CSGO_Cover.png',
                'genre_id' => 8
            ],
            [
                'game_title' => 'Destiny 2',
                'game_desc' => 'Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere, absolutely free.',
                'price' => 'Free',
                'img_cover' => '/images/GAMES/DESTINY 2/DESTINY2_Cover.jpg',
                'genre_id' => 8
            ],
            [
                'game_title' => 'Dota 2',
                'game_desc' => "Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it's their 10th hour of play or 1,000th, there's always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.",
                'price' => 'Free',
                'img_cover' => '/images/GAMES/DOTA 2/DOTA2_Cover.jpg',
                'genre_id' => 11
            ],
            [
                'game_title' => 'EA Sports Fifa 23',
                'game_desc' => 'FIFA 23 brings The World’s Game to the pitch, with HyperMotion2 Technology, men’s and women’s FIFA World Cup™coming during the season, women’s club teams, cross-play features*, and more.',
                'price' => '2999.00',
                'img_cover' => '/images/GAMES/EA SPORTS FIFA 23/FIFA_Cover.jpg',
                'genre_id' => 10
            ],
            [
                'game_title' => 'Grand Theft Auto V',
                'game_desc' => 'Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.',
                'price' => '1320.00',
                'img_cover' => '/images/GAMES/GRAND THEFT AUTO V/GTAV_Cover.jpg',
                'genre_id' => 1
            ],
            [
                'game_title' => 'Hogwarts Legacy',
                'game_desc' => 'Hogwarts Legacy is an immersive, open-world action RPG. Now you can take control of the action and be at the center of your own adventure in the wizarding world.',
                'price' => '2500.00',
                'img_cover' => '/images/GAMES/HOGWARTS LEGACY/HL_Cover.jpg',
                'genre_id' => 7
            ],
            [
                'game_title' => 'Marvels Guardians Of The Galaxy',
                'game_desc' => 'Fire up a wild ride across the cosmos with a fresh take on Marvel’s Guardians of the Galaxy. In this action-adventure game, you are Star-Lord leading the unpredictable Guardians from one explosion of chaos to the next. You got this. Probably.',
                'price' => '2990.00',
                'img_cover' => '/images/GAMES/MARVELS GUARDIANS OF THE GALAXY/GOTG_Cover.jpg',
                'genre_id' => 1
            ],
            [
                'game_title' => 'Monster Hunter Rise',
                'game_desc' => 'Rise to the challenge and join the hunt! In Monster Hunter Rise, the latest installment in the award-winning and top-selling Monster Hunter series, you’ll become a hunter, explore brand new maps and use a variety of weapons to take down fearsome monsters as part of an all-new storyline.',
                'price' => '1979.00',
                'img_cover' => '/images/GAMES/MONSTER HUNTER RISE/MHR_Cover.jpg',
                'genre_id' => 1
            ],
            [
                'game_title' => 'Monster Hunter World',
                'game_desc' => 'Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.',
                'price' => '1209.00',
                'img_cover' => '/images/GAMES/MOSNTER HUNTER WORLD/MHW_Cover.jpg',
                'genre_id' => 1
            ],
            [
                'game_title' => 'Path Of Exile',
                'game_desc' => 'You are an Exile, struggling to survive on the dark continent of Wraeclast, as you fight to earn power that will allow you to exact your revenge against those who wronged you. Created by hardcore gamers, Path of Exile is an online Action RPG set in a dark fantasy world.',
                'price' => 'Free',
                'img_cover' => '/images/GAMES/PATH OF EXILE/POE_Cover.jpg',
                'genre_id' => 7
            ],
            [
                'game_title' => 'PUBG Battlegrounds',
                'game_desc' => 'Play PUBG: BATTLEGROUNDS for free. Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds. Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS can offer.',
                'price' => 'Free',
                'img_cover' => '/images/GAMES/PUBG/PUBG_Cover.png',
                'genre_id' => 8
            ],
            [
                'game_title' => 'Rust',
                'game_desc' => 'The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.',
                'price' => '1049.95',
                'img_cover' => '/images/GAMES/RUST/RUST_Cover.jpg',
                'genre_id' => 2
            ],
            [
                'game_title' => 'Sons Of The Forest',
                'game_desc' => 'Sent to find a missing billionaire on a remote island, you find yourself in a cannibal-infested hellscape. Craft, build, and struggle to survive, alone or with friends, in this terrifying new open-world survival horror simulator."',
                'price' => '910.00',
                'img_cover' => '/images/GAMES/SONS OF THE FOREST/SOTF_Cover.avif',
                'genre_id' => 9
            ],
            [
                'game_title' => 'Star Wars Jedi Survivor',
                'game_desc' => 'The story of Cal Kestis continues in STAR WARS Jedi: Survivor™, a galaxy-spanning, third-person, action-adventure game.',
                'price' => '2999.00',
                'img_cover' => '/images/GAMES/STAR WARS JEDI SURVIVOR/SWJS_Cover.jpg',
                'genre_id' => 1
            ],
            [
                'game_title' => 'Team Fortress 2',
                'game_desc' => 'Nine distinct classes provide a broad range of tactical abilities and personalities. Constantly updated with new game modes, maps, equipment and, most importantly, hats!',
                'price' => 'Free',
                'img_cover' => '/images/GAMES/TEAM FORTRESS 2/TF_Cover.jpg',
                'genre_id' => 8
            ],
            [
                'game_title' => 'War Thunder',
                'game_desc' => 'War Thunder is the most comprehensive free-to-play, cross-platform, MMO military game dedicated to aviation, armoured vehicles, and naval craft, from the early 20th century to the most advanced modern combat units. Join now and take part in major battles on land, in the air, and at sea.',
                'price' => 'Free',
                'img_cover' => '/images/GAMES/WAR THUNDER/WT_Cover.jpg',
                'genre_id' => 8
            ],
        ];
        foreach($game as $key => $value){
            Game::create($value);
        }
    }
}
