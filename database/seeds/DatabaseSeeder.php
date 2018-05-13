<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      Model::unguard();
      $faker = Faker\Factory::create();
      // create 30 articles
      foreach(range(1, 50000) as $index) {
          Article::create([
              'title' => $faker->sentence(5),
              'content' => $faker->paragraph(6)
          ]);
      }
      Model::reguard();
    }
}
