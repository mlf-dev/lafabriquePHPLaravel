<?php

use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $picture = new \App\Picture();
        $picture->nom_photo_complet = 'demaquillant.jpg';
        $picture->save();
        $picture->products()->attach([8]);

        $picture = new \App\Picture();
        $picture->nom_photo_complet = 'demaquillant_biphase.jpeg';
        $picture->save();
        $picture->products()->attach([9]);

        $picture = new \App\Picture();
        $picture->nom_photo_complet = 'dentifrice.jpeg';
        $picture->save();
        $picture->products()->attach([5]);

        $picture = new \App\Picture();
        $picture->nom_photo_complet = 'dentifrice_charbon.jpeg';
        $picture->save();
        $picture->products()->attach([6]);

        $picture = new \App\Picture();
        $picture->nom_photo_complet = 'savon_douche.jpg';
        $picture->save();
        $picture->products()->attach([4]);

        $picture = new \App\Picture();
        $picture->nom_photo_complet = 'savon_enceinte.jpeg';
        $picture->save();
        $picture->products()->attach([3]);

        $picture = new \App\Picture();
        $picture->nom_photo_complet = 'shampoing_solide.jpeg';
        $picture->save();
        $picture->products()->attach([1,2,10]);
    }
}
