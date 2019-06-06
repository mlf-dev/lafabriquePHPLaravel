<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product();
        $product->nom = 'shampooing shikakai';
        $product->prix_ht = 8;
        $product->description = 'shampooint solide pour cheveux normaux, shampooint solide pour cheveux normaux, shampooint solide pour cheveux normaux.';
        $product->femme_enceinte = 0;
        $product->quantite= 30;
        $product->unite_quantite = 1;
        $product->save();

        $product1 = new \App\Product();
        $product1->nom = 'shampooing femme enceinte';
        $product1->prix_ht = 8;
        $product1->description = 'shampooint solide pour cheveux normaux sans huiles essentielles pour femme enceinte ou alaitantes, shampooint solide pour cheveux normaux sans huiles essentielles pour femme enceinte ou allaitantes.';
        $product1->femme_enceinte = 1;
        $product1->quantite= 30;
        $product1->unite_quantite = 1;
        $product1->save();

        $product2 = new \App\Product();
        $product2->nom = 'savon douche Coco';
        $product2->prix_ht = 7.5;
        $product2->description = "Savon douche pour le corps à l'huile de coco, sans huiles essentielles. Compatible femme enceinte ou allaitante.";
        $product2->femme_enceinte = 1;
        $product2->quantite= 40;
        $product2->unite_quantite = 1;
        $product2->save();

        $product3 = new \App\Product();
        $product3->nom = 'savon douche Agrumes';
        $product3->prix_ht = 7.5;
        $product3->description = "Savon douche pour le corps aux huiles essentielles d'agrumes.";
        $product3->femme_enceinte = 0;
        $product3->quantite= 40;
        $product3->unite_quantite = 1;
        $product3->save();

        $product4 = new \App\Product();
        $product4->nom = 'dentifrice avec HE';
        $product4->prix_ht = 8.5;
        $product4->description = "Dentifrice au carbonate de calcium et aux huiles essentielles";
        $product4->femme_enceinte = 0;
        $product4->quantite= 30;
        $product4->unite_quantite = 1;
        $product4->save();

        $product5 = new \App\Product();
        $product5->nom = 'dentifrice sans HE';
        $product5->prix_ht = 8.5;
        $product5->description = "Dentifrice au carbonate de calcium, au charbone et sans huile essentielle. Compatible femme enceinte et allaitante.";
        $product5->femme_enceinte = 0;
        $product5->quantite= 30;
        $product5->unite_quantite = 1;
        $product5->save();

        $product6 = new \App\Product();
        $product6->nom = 'démaquillant huile jojoba et HE';
        $product6->prix_ht = 12.35;
        $product6->description = "Dentifrice au carbonate de calcium, au charbone et sans huile essentielle. Compatible femme enceinte et allaitante.";
        $product6->femme_enceinte = 0;
        $product6->quantite= 100;
        $product6->unite_quantite = 3;
        $product6->save();

        $product7 = new \App\Product();
        $product7->nom = 'démaquillant huile jojoba et HE';
        $product7->prix_ht = 12.35;
        $product7->description = "Démaquillant à l'huile de jojoba et aux huiles essentielles.";
        $product7->femme_enceinte = 0;
        $product7->quantite= 100;
        $product7->unite_quantite = 3;
        $product7->save();

        $product8 = new \App\Product();
        $product8->nom = 'démaquillant bi-phase';
        $product8->prix_ht = 12.35;
        $product8->description = "Démaquillant bi-phase sans huile essentielle. Compatible femme enceinte ou allaitante.";
        $product8->femme_enceinte = 1;
        $product8->quantite= 100;
        $product8->unite_quantite = 3;
        $product8->save();

        $product9 = new \App\Product();
        $product9->nom = 'démêlant cheveux';
        $product9->prix_ht = 11;
        $product9->description = "Démêlant pour cheveux sans huile essentielle. Compatible femme enceinte et allaitante.";
        $product9->femme_enceinte = 1;
        $product9->quantite= 100;
        $product9->unite_quantite = 3;
        $product9->save();


    }
}
