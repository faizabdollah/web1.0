@extends('layouts.admin')
@section('contentadmin')
<div class="app-wrap">

    <!-- header -->
    @include('admin.header')

    <!-- BEGIN .app-container -->
    <div class="app-container">
        <!-- sidebar -->
        @include('admin.sidebar')


        <!-- BEGIN .app-main -->
        <div class="app-main">
					<!-- BEGIN .main-heading -->
            <header class="main-heading">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="page-icon">
                                <i class="icon-laptop_windows"></i>
                            </div>
                            <div class="page-title">
                                <h5>{{ $produit->nom_sous_categorie }}</h5>
                                <h6 class="sub-heading">&nbsp;</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="right-actions">
                                <a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="Download Reports">
                                    <i class="icon-download4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END: .main-heading -->
            <!-- BEGIN .main-content -->
            <div class="main-content">

                <!-- Row start -->
                <div class="row gutters" >
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">

                        <div  class="card">
                            <a href="{{ url('admin/modifier-image/' . $produit->id) }}"> <img style="height:500px; " class="card-img-top" src="{{ asset($produit->img) }}" alt="Card image cap"></a>

                        </div>

                        <style>
                            .img-square {
                                height: 100px;
                                width: 100px;
                                border: 2px solid #ccc;
                                border-radius: 6px;
                                object-fit: cover;
                                transition: border-color 0.3s;
                            }

                            .img-square:hover {
                                border-color: #007bff;
                            }
                        </style>

                        <div class="card-body d-flex flex-wrap gap-2">
                            @if($images->count() > 0)
                                @foreach($images as $image)
                                    <a href="{{ url('admin/produit-img-sup/' . $image->id . '?produit_id=' . $produit->id) }}"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette image ?');">
                                        <img class="img-square" src="{{ asset($image->img) }}" alt="Product Image">
                                    </a>
                                @endforeach
                            @endif


                            <a href="{{ url('admin/ajouter-produit-image/' . $produit->id) }}">
                                <img class="img-square" src="{{ asset('MA-admi/assets/plus.png') }}" alt="Add new image">
                            </a>

                        </div>
                        <div class="card-body" style="color: red; font-weight: bold;">Cliquez sur l'image pour la supprimer.</div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">

                            <div  class="card-body">
                                <h3 class="card-title" style="color:rgb(0, 122, 225);">{{ $produit->nom }}</h3>
                                <h5 class="card-title" >{{ $produit->prix }}&nbsp;&nbsp;&nbsp;&nbsp; <del style="text-decoration: line-through;">{{ $produit->prix_barre }}</del></h5>
                                <p><strong>Référence : </strong>&nbsp;{{ $produit->ref }}</p>
                                <p><strong>Emplacement numéro : </strong>&nbsp;{{ $produit->empl }}</p>
                                <p><strong>Sous catégorie :</strong> &nbsp;{{ $produit->sous_categorie }}</p>
                                <p class="card-text">{!! $produit->description !!}</p>
                            </div>

                            <div class="card-body">
                                <a href="{{ url('admin/modifier-produit/' . $produit->id) }}" class="btn btn-primary">Modifier</a>
                                <a onclick="javascript: return confirm('Êtes-vous sûr de vouloir supprimer {{ $produit->nom }} ?');" href="{{ url('admin/supprimer-produit/' . $produit->id) }}" class="btn btn-primary">Supprimer</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>

@endsection
