<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new \App\Tag();
        $tag->nom = 'shampooing';
        $tag->save();
        $tag->products()->attach([1,2]);

        $tag2 = new \App\Tag();
        $tag2->nom = 'savon';
        $tag2->save();
        $tag2->products()->attach([3,4]);


        $tag3 = new \App\Tag();
        $tag3->nom = 'douche';
        $tag3->save();
        $tag3->products()->attach([3,4]);

        $tag4 = new \App\Tag();
        $tag4->nom = 'démaquillant';
        $tag4->save();
        $tag4->products()->attach([8,9]);

        $tag5 = new \App\Tag();
        $tag5->nom = 'dentifrice';
        $tag5->save();
        $tag5->products()->attach([5,6]);

        $tag6 = new \App\Tag();
        $tag6->nom = 'femme enceinte';
        $tag6->save();
        $tag6->products()->attach([2,3,6,9,10]);

        $tag7 = new \App\Tag();
        $tag7->nom = 'alaitement';
        $tag7->save();
        $tag7->products()->attach([2,3,6,9,10]);

        $tag8 = new \App\Tag();
        $tag8->nom = 'demêlant';
        $tag8->save();
        $tag8->products()->attach([10]);

        $tag9 = new \App\Tag();
        $tag9->nom = 'solide';
        $tag9->save();
        $tag9->products()->attach([1,2,3,4,5,6]);
    }
}
