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
                                <h5>Modifier Catégorie</h5>
                                <h6 class="sub-heading">&nbsp;</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="right-actions">
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary float-right" data-toggle="tooltip" data-placement="left" title="Retour">
                                    <i class="icon-arrow-left"></i>
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
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Modifier la catégorie</h3>
                            </div>
                            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" name="edit_categorie" id="edit_categorie">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    {{-- Success message handled by SweetAlert --}}

                                    <div class="form-group row gutters">
                                        <label for="nom_categorie" class="col-sm-3 col-form-label">Nom de la catégorie:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nom_categorie" id="nom_categorie" class="form-control" value="{{ old('nom_categorie', $category->nom_categorie) }}" placeholder="Entrez le nom de la catégorie" required>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label">Description (optionnelle):</label>
                                        <div class="col-sm-6">
                                            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Description optionnelle">{{ old('description', $category->description) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Mettre à Jour Catégorie</button>
                                            <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}">Annuler</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: .main-content -->
        </div>
        <!-- END: .app-main -->
    </div>
    <!-- END: .app-container -->
    <!-- BEGIN .main-footer -->
    <footer class="main-footer fixed-btm">
        Copyright MA-Shop Admin 2021.
    </footer>
    <!-- END: .main-footer -->
</div>
@endsection
