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



        Artisan::call('migrate:fresh');
        \App\Models\User::factory(1)->create([
            "name"=>'damssan',
            "email"=>'gastinoking@gmail.com',
            "password"=>bcrypt('admin123'),
        ]);

        $faker = \Faker\Factory::create('fr_FR');
        $typeEngin = ['AUTO','MOTO'];
        $typeimpression = [
            'images/vignettes/vignette-bleu.png',
            'images/vignettes/vignette-jeune.png',
            'images/vignettes/vignette-rouge.png',
            'images/vignettes/vignette-vert.png',
        ];
        foreach (range(1, 150) as $index => $item) {
            Vignette::create([
                    'entreprise'=>'LCT',
                    'immatriculation'=>"TG 220".rand(0,9)."AR",
                    'typeengin'=>$typeEngin[rand(0,1)],
                    'annees'=>rand(2002,2022),
                    'typeimpression'=>$typeimpression[rand(0,3)],
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
