<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('articles')->insert([
            'title' => 'Star Wars Armada Organised Play!',
            'body' => '<p>Fantasy Flight Games is excited to announce The Corellian Conflict League Kits for Star Wars™: Armada are now available for pre-order!</p><p>The Corellian Conflict is a new and exciting way to experience Star Wars: Armada. Played in groups of two to six players, each campaign unfolds over the course of multiple games in which players must weigh their decisions against not only the current game in progress, but the campaign as a whole. Pre-order Star Wars: Armada League Kits and host campaign events for your players after The Corellian Conflict releases later this year!</p>',
            'user_id' => 1,
            'image' => 'img/cc_cardfan.png',
            'category_id' => 1,
            'created_at' => new DateTime(),
        ]);

                 DB::table('articles')->insert([
            'title' => 'Prospero Burning komt uit!',
            'body' => 'On Prospero, the psykers of the Thousand Sons face the ultimate censure for their forbidden studies. The Primarch Leman Russ is sent to punish them by any means necessary – at his command, fire rains from the skies as his Space Wolves fleet bombards Prospero over and over, reducing the world of the Thousand Sons to ash. Tizca, city of glass pyramids and golden hopes, is protected from the fires by a vast force field of telekinetic power. So it is that the Space Wolves bring the Sisters of Silence, anti-psykers anathema to all who channel the Warp, and the Custodian Guard, shining heroes who are the elite blades of the Emperor himself to Prospero, there to attempt the riddance of the Thousand Sons forever.',
            'user_id' => 2,
               'image' => 'img/60010101002_BurningProsperoENG01.jpg',
            'category_id' => 2,
             'created_at' => new DateTime(),
        ]);

                 DB::table('articles')->insert([
            'title' => 'Batman: Suicide Squad Box released',
            'body' => '<p>Een nieuwe toffe startset voor de Batman Miniature game: de Suicide Squad Game Box</p><p>Komt met regels, twee gangs en terrein en tokens!,</p>',
            'user_id' => 2,
               'image' => 'img/GAME_BOX_CONTENT_PEK.jpg',
            'category_id' => 3,
             'created_at' => new DateTime(),
        ]);
    }
}
