@extends('layouts.admin')

@section('contentadmin')
    <div class="app-wrap">
        @include('admin.header')

        <div class="app-container">
            @include('admin.sidebar')


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
                                    <h5> Modifier le logo de l'entreprise</h5>
                                    <h6 class="sub-heading">Bienvenue dans votre espace d'administration</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="right-actions">
                                    <a href="#" class="btn btn-primary float-right" data-toggle="tooltip"
                                        data-placement="left" title="Download Reports">
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
                    <!-- Row start --><!-- Row end -->
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset($logo->logo) }}" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <form action="{{ route('admin.logo.update') }}" method="POST" name="mes_produit" id="mes_produit" enctype="multipart/form-data">
                                @csrf
                                <div style="height:500px" class="card">
                                    <div class="card-body">
                                        <div class="col-sm-9">
                                            <h3>Modifier le logo de l'entreprise</h3><br>

                                                <label class="custom-file">
                                                    <input type="file" name="logo" id="logo" class="custom-file-input">
                                                    <span class="custom-file-control">Choose file</span>
                                                </label>
                                                @error('logo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            <br><br>
                                            <input type="submit" name="Modifier" value="Envoyer" class="btn btn-primary">
                                            <a href="{{ route('admin.logo.edit') }}" class="btn btn-secondary">Annuler</a>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#logo').on('change', function() {
                    var fileName = $(this).val().split('\\').pop();
                    $(this).siblings('.custom-file-control').html('Selected file: ' + fileName);
                });
            });
        </script>
    @endsection
