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
                                <h5>Mes produit</h5>
                                <h6 class="sub-heading"></h6>
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
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card m-0">
                            <div class="card-body">
                                @if ($totalRows > 0)
                                    <table id="basicExample" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Produit</th>
                                                <th>Nom</th>
                                                <th>Emplacement numéro</th>
                                                <th>Référence</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($produits as $produit)
                                                <tr>
                                                    <td><img style="height:90px; width: 90px;" src="{{ asset($produit->img) }}" alt="{{ $produit->nom }}"></td>
                                                    <td>{{ $produit->nom }}</td>
                                                    <td>{{ $produit->empl }}</td>
                                                    <td>{{ $produit->ref }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.detail-produit', $produit->id) }}">
                                                            <button type="button" class="btn btn-outline-info btn-rounded">Détail</button>
                                                        </a>
                                                        <a class="delete-product btn btn-outline-danger btn-rounded" data-url="{{ route('admin.produits.delete', $produit->id) }}">
                                                            Supprimer
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <center>
                                        <div class="no_product_cart">
                                            <i class="fa fa-frown-o" aria-hidden="true"></i>
                                            <h5>Aucun résultat</h5>
                                            <p>Aucun produit disponible</p>
                                        </div>
                                    </center>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>

					<!-- END: .main-content -->
        </div>
        <!-- END: .app-main -->
    </div>
@endsection
