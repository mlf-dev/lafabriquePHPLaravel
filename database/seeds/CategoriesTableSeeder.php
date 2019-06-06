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
        //
        $category= new \App\Category();
        $category->nom = 'cheveux';
        $category->save();
        // lien avec les produits concernés par cette catégorie pour remplir la table de liaison :
        $category->products()->attach([1,2,10]);

        $category2= new \App\Category();
        $category2->nom = 'visage';
        $category2->save();
        $category2->products()->attach([8,9]);

        $category3= new \App\Category();
        $category3->nom = 'corps';
        $category3->save();
        $category3->products()->attach([3,4]);

        $category4= new \App\Category();
        $category4->nom = 'autre';
        $category4->save();
        $category4->products()->attach([5,6]);

        $category5= new \App\Category();
        $category5->nom = 'grossesse';
        $category5->save();
        $category5->products()->attach([2,3,6,9,10]);

        $category6= new \App\Category();
        $category6->nom = 'bébé';
        $category6->save();

    }
}
