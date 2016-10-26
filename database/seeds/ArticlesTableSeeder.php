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
            'title' => 'Article One',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus erat eget quam ultrices facilisis. In pulvinar risus vel purus elementum, vitae interdum felis blandit. Cras iaculis suscipit sapien ac posuere. Suspendisse vel faucibus ex. Integer tincidunt nibh sed tempor facilisis. Proin tincidunt justo in risus lobortis, mattis porttitor eros.',
            'user_id' => 1,
            'image' => 'img/MadeToOrderAstraMilitarum.jpg',
            'category_id' => 1,
        ]);

                 DB::table('articles')->insert([
            'title' => 'Article Two',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus erat eget quam ultrices facilisis. In pulvinar risus vel purus elementum, vitae interdum felis blandit. Cras iaculis suscipit sapien ac posuere. Suspendisse vel faucibus ex. Integer tincidunt nibh sed tempor facilisis. Proin tincidunt justo in risus lobortis, mattis porttitor eros.',
            'user_id' => 2,
               'image' => 'img/MadeToOrderAstraMilitarum.jpg',
            'category_id' => 2,
        ]);

                 DB::table('articles')->insert([
            'title' => 'Article Three',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus erat eget quam ultrices facilisis. In pulvinar risus vel purus elementum, vitae interdum felis blandit. Cras iaculis suscipit sapien ac posuere. Suspendisse vel faucibus ex. Integer tincidunt nibh sed tempor facilisis. Proin tincidunt justo in risus lobortis, mattis porttitor eros.',
            'user_id' => 3,
               'image' => 'img/MadeToOrderAstraMilitarum.jpg',
            'category_id' => 3,
        ]);
    }
}
