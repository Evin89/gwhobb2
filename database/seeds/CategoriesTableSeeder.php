<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->insert([
            'title' => 'Star Wars Armada',
            'body' => 'Rebel and Imperial fleets fight for the fate of the galaxy in Star Wars™: Armada, the two-player miniatures game of epic Star Wars space battles!

Massive Star Destroyers fly to battle against Rebel corvettes and frigates. Banks of turbolasers unleash torrential volleys of fire against squadrons of X-wings and TIEs. Engineering teams race to route additional power to failing shields. Laser blasts and explosions flare across the battlefield. Even a single ship can change the tide of battle.

In Star Wars: Armada, you assume the role of fleet admiral, serving with either the Imperial Navy or Rebel Alliance. It’s your job to issue the tactical commands that will decide the course of battle and, perhaps, the fate of the galaxy.

',
        ]);

             DB::table('categories')->insert([
            'title' => 'Warhammer 40.000',
            'body' => 'Warhammer 40,000 (informally known as Warhammer 40K, WH40K or simply 40K) is a tabletop miniature wargame produced by Games Workshop, set in a dystopian science fantasy universe. Warhammer 40,000 was created by Rick Priestley in 1987 as the futuristic companion to Warhammer Fantasy Battle, sharing many game mechanics. Expansions for Warhammer 40,000 are released periodically which give rules for urban, planetary siege and large-scale combat. The game is in its seventh edition, which was released on May 24, 2014.',
        ]);

            DB::table('categories')->insert([
            'title' => 'Batman Miniature Game',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus erat eget quam ultrices facilisis. In pulvinar risus vel purus elementum, vitae interdum felis blandit. Cras iaculis suscipit sapien ac posuere. Suspendisse vel faucibus ex. Integer tincidunt nibh sed tempor facilisis. Proin tincidunt justo in risus lobortis, mattis porttitor eros.',
        ]);
    }
}
