<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\News_image_files;

class News_image_filesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,30) as $index) {
            foreach (range(1, 3) as $indexx) {
                News_image_files::create([
                    'dir' => strval($index),
                    'filename' => ($indexx == 1)?'qZiXl2ym59.jpg':($indexx == 2)?'FOulFIzm1B.jpg':'pf7CxuNzT4.jpg',
                    'extension' => 'jpg',
                    'size' => 33333
                ]);
            }
        }
    }

}
