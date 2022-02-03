<?php
namespace Database\Seeders;

 use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticlesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Article');
        
        for($i = 1 ; $i <= 10 ; $i++){
        	DB::table('articles')->insert([
        	'title' => $faker->sentence(),
        	'description' => $faker->sentence(),
        	'body' => $faker->paragraph(),
        	'created_at' => \Carbon\Carbon::now(),
        	'Updated_at' => \Carbon\Carbon::now(),
        ]);
        }

    }
}









