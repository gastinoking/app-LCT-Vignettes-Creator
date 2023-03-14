<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vignette;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(1)->create([
             "name"=>'damssan',
             "email"=>'gastinoking@gmail.com',
             "password"=>bcrypt('admin123'),
         ]);


        Artisan::call('migrate:fresh');

        $faker = \Faker\Factory::create('fr_FR');
        $typeEngin = ['AUTO','MOTO'];
        $typeimpression = [
            'images/vignettes/vignette-bleu.png',
            'images/vignettes/vignette-jeune.png',
            'images/vignettes/vignette-rouge.png',
            'images/vignettes/vignette-vert.png',
        ];
        foreach (range(1, 50) as $index => $item) {
            Vignette::create([
                    'entreprise'=>$faker->name,
                    'immatriculation'=>rand(1100,7000),
                    'typeengin'=>$typeEngin[rand(0,1)],
                    'annees'=>rand(1100,7000),
                    'typeimpression'=>$typeimpression[rand(0,3)],
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
