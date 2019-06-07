@extends('shop')

@section('css')
    <link href="{{asset('css/products.css')}}" rel="stylesheet" >
@stop

@section('content')

    <div class='container mainProduitsPage'>
        <div class="row flex-row">
            <div class="col-2">
                <nav id='MenuLeftProduits'>
                    <ul>
                        <li class='categorie allproductstitle'>Tous les produits</li>

                        @foreach($categories as $category)
                        <li class='categorie'><a href="">{{ucfirst($category->nom)}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <div id='productsContainer' class="col-10">

                <div id='row pubsContainer' class="mt-4 mb-4">
                    <h3 id='TitleContainerPub'>Nos Suggestions</h3>
                </div>

                <div class='d-flex justify-content-around'>

                    <div class='produitPubItemContainer  mt-2'>
                        <div class='pubProduct'>
                            <h3 class='titlePub' >Meilleure vente</h3>
                            <img src="{{asset('img/produits/dentifrice_charbon.jpeg')}}" width= "300px" height="200px" alt="meilleure vente">
                        </div>
                        <h4 class='productName'>Dentifrice solide aux HE</h4>
                    </div>

                    <div class='produitPubItemContainer  mt-2'>
                        <div class='pubProduct'>
                            <h3 class='titlePub'>Produit du mois</h3>
                            <img src="{{asset('img/produits/shampoing_solide.jpeg')}}" width= "300px" height="200px" alt="produit du mois">
                        </div>
                        <h4 class='productName'>Shampooing aux HE</h4>
                    </div>
                </div>

                <hr/>

                <div class='d-flex flex-wrap justify-content-between'>
                @foreach($products as $product)
                    <div class="card product mt-4">
                        <img src="{{asset('img/produits/'.$product->pictures->first()->nom_photo_complet)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ucfirst($product->nom)}}</h5>
                            <p class="moreInformations"><a href="">+ d'infos</a></p>
                            <p class="card-text">{{str_replace('.',',',number_format($product->prix_ht * 1.2,2))}}€</p>
                            <a href="#" class="btn btn-success buy-btn">Ajouter au panier</a>
                        </div>
                    </div>

                @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection