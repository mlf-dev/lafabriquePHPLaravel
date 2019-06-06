@extends('shop')
@section('content')

    <div class='container mainProduitsPage'>
        <div class="row flex-row">
            <div class="col-3">
                <nav id='MenuLeftProduits'>
                    <ul>
                        <li class='categorie allproductstitle'>Tous les produits</li>
                        <li class='categorie'>Cheveux</li>
                        <ul>
                            <li>Shampooings</li>
                            <li>Après-Shampooings</li>
                        </ul>
                        <li class='categorie'>Visage</li>
                        <ul>
                            <li>Démaquillant</li>
                            <li>Huiles hydratantes</li>
                        </ul>
                        <li class='categorie'>Corps</li>
                        <ul>
                            <li>Crèmes hydratantes</li>
                            <li>Savons solides douche</li>
                            <li>Déodorants</li>
                        </ul>
                        <li class='categorie'>Autres</li>
                        <ul>
                            <li>Dentifrices</li>
                        </ul>
                        <li class='categorie'>Grossesse</li>
                        <li>Tous les produits</li>
                        <li class='categorie'>Bébé</li>
                        <li>Tous les produits</li>
                    </ul>
                </nav>
            </div>

            <div id='productsContainer' class="col-9">

                <div id='row pubContainer'>
                    <h3 id='TitleContainerPub'>Nos Suggestions</h3>
                </div>

                <div class='d-flex justify-content-around'>

                    <div class='pubProduct'>
                        <div class='produitPubItem'>
                            <h3 class='titlePub'>Meilleure vente</h3>
                            <img src="{{asset('img/produits/dentifrice_charbon.jpeg')}}" width= "200px" alt="meilleure vente">
                        </div>
                        <h4 class='productName'>Dentifrice solide aux HE</h4>
                    </div>

                    <div class='pubProduct'>
                        <div class='produitPubItem'>
                            <h3 class='titlePub'>Produit du mois</h3>
                            <img src="{{asset('img/produits/shampoing_solide.jpeg')}}" width= "200px" alt="produit du mois">
                        </div>
                        <h4 class='productName'>Shampooing aux HE</h4>
                    </div>
                </div>

                <hr/>
            </div>
        </div>
    </div>

@endsection