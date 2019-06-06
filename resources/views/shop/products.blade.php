@extends('shop')
@section('content')

    <div class='container mainProduitsPage'>
        <div class="row flex-row">
            <div class="row col-3">
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

            <div id='productsContainerRight col-9'>
                <div id='zoomProduitContainer'>
                    <h3 id='TitleContainerPub'>Nos Suggestions</h3>

                    <ul class='row containerFlex'>
                        <li class='produitPubItemContainer'>
                            <div class='produitPubItem'>
                                <h3 class='titlePub'>Meilleure vente</h3>
                            </div>
                            <h4 class='productName'>Dentifrice solide aux HE</h4>
                        </li>

                        <li class='produitPubItemContainer'>
                            <div class='produitPubItem'>
                                <h3 class='titlePub'>Produit du mois</h3>
                            </div>
                            <h4 class='productName'>'Shampooing à la poudre de Shikakai'</h4>
                        </li>
                    </ul>

                </div>
                <hr/>
            </div>
        </div>
    </div>

@endsection