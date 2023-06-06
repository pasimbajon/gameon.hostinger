<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\LibraryViewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/discover', function () {
    return view('pages.discover'); 
});

Route::resource('/admin/games',GameController::class);
Route::resource('/', HomeViewController::class)->only(['index','show']);
Route::resource('/store', HomeViewController::class)->only(['index','show']);
Route::resource('/discover',ViewController::class)->only(['index','show']);

// Route::get('/discover/{name}', function (string  $name) {
//     $title = "";
//     $description = "";
//     $image = "";
//     $gallery = [];
//     $path = "";
//     switch($name) {
//         case "counter-strike_global_offensive":
//             $title = "Counter-Strike: Global Offensive";
//             $description = "Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).";
//             $image = 'images/GAMES/COUNTER-STRIKE GLOBAL OFFENSIVE/CSGO_Cover.png';
//             $gallery = ["csgo1.jpg","csgo2.jpg","csgo3.jpg","csgo4.jpg","csgo5.jpg"];
//             $path = "images/GAMES/COUNTER-STRIKE GLOBAL OFFENSIVE/";
//             break;
//         case "dota_2":
//             $title = "DOTA 2";
//             $description = "Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it's their 10th hour of play or 1,000th, there's always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.";
//             $image = "images/GAMES/DOTA 2/DOTA2_Cover.jpg";
//             $gallery = ["DOTA2_1.jpg","DOTA2_2.jpg","DOTA2_3.jpg","DOTA2_4.jpg","DOTA2_5.jpg"];
//              $path = "images/GAMES/DOTA 2/";
//             break;
//         case "apex_legends":
//             $title = "Apex Legends™";
//             $description = "Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.";
//             $image = "images/GAMES/APEX LEGENDS/APEX_COVER.jpg";
//             $gallery = ["APEX1.jpg","APEX2.jpg","APEX3.jpg","APEX4.jpg","APEX5.jpg"];
//             $path = "images/GAMES/APEX LEGENDS/";
//             break;
//         case "pubg_battlegrounds":
//             $title = "PUBG Battlegrounds";
//             $description = "Play PUBG: BATTLEGROUNDS for free. Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds. Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS can offer.";
//             $image = "images/GAMES/PUBG/PUBG_Cover.png";
//             $gallery = ["PUBG1.jpg","PUBG2.jpg","PUBG3.jpg","PUBG4.jpg","PUBG5.jpg"];
//             $path = "images/GAMES/PUBG/";
//             break;
//         case "team_fortress_2":
//             $title = "Team Fortress 2s";
//             $description = "Nine distinct classes provide a broad range of tactical abilities and personalities. Constantly updated with new game modes, maps, equipment and, most importantly, hats!";
//             $image = "images/GAMES/TEAM FORTRESS 2/TF_Cover.jpg";
//             $gallery = ["TF1.jpg","TF2.jpg","TF3.jpg","TF4.jpg","TF5.jpg"];
//             $path = "images/GAMES/TEAM FORTRESS 2/";
//             break;
//         case "rust":
//             $title = "Rust";
//             $description = "The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.";
//             $image = "images/GAMES/RUST/RUST_Cover.jpg";
//              $gallery = ["RUST1.jpg","RUST2.jpg","RUST3.jpg","RUST4.jpg","RUST5.jpg"];
//              $path = "images/GAMES/RUST/";
//             break;
//         case "grand_theft_auto_V":
//             $title = "Grand Theft Auto V";
//             $description = "Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.";
//             $image = "images/GAMES/GRAND THEFT AUTO V/GTAV_Cover.jpg";
//             $gallery = ["GTAV1.jpg","GTAV2.jpg","GTAV3.jpg","GTAV4.jpg","GTAV5.jpg"];
//             $path = "images/GAMES/GRAND THEFT AUTO V/";
//             break;
//         case "call_of_duty_modern_warfare_II":
//             $title = "Call Of Duty Modern Warfare II";
//             $description = "Call of Duty®: Modern Warfare® II drops players into an unprecedented global conflict that features the return of the iconic Operators of Task Force 141.";
//             $image = "images/GAMES/CALL OF DUTY MODERN WARFARE II/CODMWII_Cover.jpg";
//             $gallery = ["CODMWII1.jpg","CODMWII2.jpg","CODMWII3.jpg","CODMWII4.jpg","CODMWII5.jpg"];
//             $path = "images/GAMES/CALL OF DUTY MODERN WARFARE II/";
//             break;
//         case "destiny_2":
//             $title = "Destiny 2";
//             $description = "Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere, absolutely free.";
//             $image = "images/GAMES/DESTINY 2/DESTINY2_Cover.jpg";
//             $gallery = ["DESTINY2_1.jpg","DESTINY2_2.jpg","DESTINY2_3.jpg","DESTINY2_4.jpg","DESTINY2_5.jpg"];
//             $path = "images/GAMES/DESTINY 2/";
//             break;
//         case "age_of_wonders_4":
//             $title = "Age of Wonders 4";
//             $description = "Rule a fantasy realm of your own design! Explore new magical realms in Age of Wonders’ signature blend of 4X strategy and turn-based tactical combat. Control a faction that grows and changes as you expand your empire with each turn!";
//             $image = "images/GAMES/AGE OF WONDERS 4/AOW4_Cover.jpg";
//             $gallery = ["AOW4_1.jpg","AOW4_2.jpg","AOW4_3.jpg","AOW4_4.jpg","AOW4_5.jpg"];
//             $path = "images/GAMES/AGE OF WONDERS 4/";
//             break;
//         case "asssassins_creed_origins":
//             $title = "Asssassins Creed Origins";
//             $description = "ASSASSIN’S CREED® ORIGINS IS A NEW BEGINNING *The Discovery Tour by Assassin’s Creed®: Ancient Egypt is available now as a free update!* Ancient Egypt, a land of majesty and intrigue, is disappearing in a ruthless fight for power.";
//             $image = "images/GAMES/ASSASSINS CREED ORIGINS/ACO_Cover.jpg";
//             $gallery = ["ACO1.jpg","ACO2.jpg","ACO3.jpg","ACO4.jpg","ACO5.jpg"];
//             $path = "images/GAMES/ASSASSINS CREED ORIGINS/";
//             break;
//         case "ea_sports_fifa_23":
//             $title = "EA Sports Fifa 23";
//             $description = "FIFA 23 brings The World’s Game to the pitch, with HyperMotion2 Technology, men’s and women’s FIFA World Cup™coming during the season, women’s club teams, cross-play features*, and more.";
//             $image = "images/GAMES/EA SPORTS FIFA 23/FIFA_Cover.jpg";
//             $gallery = ["FIFA1.jpg","FIFA2.jpg","FIFA3.jpg","FIFA4.jpg","FIFA5.jpg"];
//             $path = "images/GAMES/EA SPORTS FIFA 23/";
//             break;
//         case "hogwarts_legacy":
//             $title = "Hogwarts Legacy";
//             $description = "Hogwarts Legacy is an immersive, open-world action RPG. Now you can take control of the action and be at the center of your own adventure in the wizarding world.";
//             $image = "images/GAMES/HOGWARTS LEGACY/HL_Cover.jpg";
//             $gallery = ["HL1.jpg","HL2.jpg","HL3.jpg","HL4.jpg","HL5.jpg"];
//             $path = "images/GAMES/HOGWARTS LEGACY/";
//             break;
//         case "marvels_guardians_of_the_galaxy":
//             $title = "Marvels Guardians Of The Galaxy";
//             $description = "Fire up a wild ride across the cosmos with a fresh take on Marvel’s Guardians of the Galaxy. In this action-adventure game, you are Star-Lord leading the unpredictable Guardians from one explosion of chaos to the next. You got this. Probably.";
//             $image = "images/GAMES/MARVELS GUARDIANS OF THE GALAXY/GOTG_Cover.jpg";
//             $gallery = ["GOTG1.jpg","GOTG2.jpg","GOTG3.jpg","GOTG4.jpg","GOTG5.jpg"];
//             $path = "images/GAMES/MARVELS GUARDIANS OF THE GALAXY/";
//             break;
//         case "monster_hunter_rise":
//             $title = "Monster Hunter Rise";
//             $description = "Rise to the challenge and join the hunt! In Monster Hunter Rise, the latest installment in the award-winning and top-selling Monster Hunter series, you’ll become a hunter, explore brand new maps and use a variety of weapons to take down fearsome monsters as part of an all-new storyline.";
//             $image = "images/GAMES/MONSTER HUNTER RISE/MHR_Cover.jpg";
//             $gallery = ["MHR1.jpg","MHR2.jpg","MHR3.jpg","MHR4.jpg","MHR5.jpg"];
//             $path = "images/GAMES/MONSTER HUNTER RISE/";
//             break;
//         case "monster_hunter_world":
//             $title = "Monster Hunter World";
//             $description = "Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.";
//             $image = "images/GAMES/MOSNTER HUNTER WORLD/MHW_Cover.jpg";
//             $gallery = ["MHW1.jpg","MHW2.jpg","MHW3.jpg","MHW4.jpg","MHW5.jpg"];
//             $path = "images/GAMES/MOSNTER HUNTER WORLD/";
//             break;
//         case "sons_of_the_forest":
//             $title = "Sons Of The Forest";
//             $description = "Sent to find a missing billionaire on a remote island, you find yourself in a cannibal-infested hellscape. Craft, build, and struggle to survive, alone or with friends, in this terrifying new open-world survival horror simulator.";
//             $image = "images/GAMES/SONS OF THE FOREST/SOTF_Cover.avif";
//             $gallery = ["SOTF1.jpg","SOTF2.jpg","SOTF3.jpg","SOTF4.jpg","SOTF5.jpg"];
//             $path = "images/GAMES/SONS OF THE FOREST/";
//             break;
//         case "star_wars_jedi_survivor":
//             $title = "Star Wars Jedi Survivor";
//             $description = "The story of Cal Kestis continues in STAR WARS Jedi: Survivor™, a galaxy-spanning, third-person, action-adventure game.";
//             $image = "images/GAMES/STAR WARS JEDI SURVIVOR/SWJS_Cover.jpg";
//             $gallery = ["SWJS1.jpg","SWJS2.jpg","SWJS3.jpg","SWJS4.jpg","SWJS5.jpg"];
//             $path = "images/GAMES/STAR WARS JEDI SURVIVOR/";
//             break;
//         case "war_thunder":
//             $title = "War Thunder";
//             $description = "War Thunder is the most comprehensive free-to-play, cross-platform, MMO military game dedicated to aviation, armoured vehicles, and naval craft, from the early 20th century to the most advanced modern combat units. Join now and take part in major battles on land, in the air, and at sea.";
//             $image = "images/GAMES/WAR THUNDER/WT_Cover.jpg";
//              $gallery = ["WT1.jpg","WT2.jpg","WT3.jpg","WT4.jpg","WT5.jpg"];
//              $path = "images/GAMES/WAR THUNDER/";
//             break;
//         default:
            
//     }
//     return view('pages.discoverview', ["title" => $title, "description" => $description, "image" => $image, "gallery" => $gallery, "path" => $path]); 
// });
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('products', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/dashboard',[LibraryViewController::class,'index'], function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


