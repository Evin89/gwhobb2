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
            'title' => 'Game One',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus erat eget quam ultrices facilisis. In pulvinar risus vel purus elementum, vitae interdum felis blandit. Cras iaculis suscipit sapien ac posuere. Suspendisse vel faucibus ex. Integer tincidunt nibh sed tempor facilisis. Proin tincidunt justo in risus lobortis, mattis porttitor eros.',
        ]);

             DB::table('categories')->insert([
            'title' => 'Game Two',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus erat eget quam ultrices facilisis. In pulvinar risus vel purus elementum, vitae interdum felis blandit. Cras iaculis suscipit sapien ac posuere. Suspendisse vel faucibus ex. Integer tincidunt nibh sed tempor facilisis. Proin tincidunt justo in risus lobortis, mattis porttitor eros.',
        ]);

            DB::table('categories')->insert([
            'title' => 'Game Three',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus erat eget quam ultrices facilisis. In pulvinar risus vel purus elementum, vitae interdum felis blandit. Cras iaculis suscipit sapien ac posuere. Suspendisse vel faucibus ex. Integer tincidunt nibh sed tempor facilisis. Proin tincidunt justo in risus lobortis, mattis porttitor eros.',
        ]);
    }
}
