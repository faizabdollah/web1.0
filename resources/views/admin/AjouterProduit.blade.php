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
                                <h5>Ajouter Produit</h5>
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
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Ajouter un nouveau produit</h3>
                            </div>
                            <form action="{{ route('admin.produits.store') }}" method="POST" name="add_produit" id="add_produit" enctype="multipart/form-data">
                                @csrf
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

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <div class="form-group row gutters">
                                        <label for="ref" class="col-sm-3 col-form-label">Référence:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="ref" id="ref" class="form-control" placeholder="Entrez la référence du produit">
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="nom" class="col-sm-3 col-form-label">Nom du produit:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom du produit" required>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="categorie" class="col-sm-3 col-form-label">Catégorie:</label>
                                        <div class="col-sm-6">
                                            <select name="categorie" id="categorie" class="form-control" required>
                                                <option value="">Sélectionnez une catégorie</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->categorie }}">{{ $category->nom_categorie }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="nom_en" class="col-sm-3 col-form-label">Nom EN:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nom_en" id="nom_en" class="form-control" placeholder="Nom en anglais">
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="nom_l3" class="col-sm-3 col-form-label">Nom L3:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nom_l3" id="nom_l3" class="form-control" placeholder="Nom L3">
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="empl" class="col-sm-3 col-form-label">Emplacement:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="empl" id="empl" class="form-control" placeholder="Emplacement">
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="description" class="col-sm-3 col-form-label">Description:</label>
                                        <div class="col-sm-6">
                                            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Description du produit"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="description_en" class="col-sm-3 col-form-label">Description EN:</label>
                                        <div class="col-sm-6">
                                            <textarea name="description_en" id="description_en" class="form-control" rows="3" placeholder="Description en anglais"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="description_l3" class="col-sm-3 col-form-label">Description L3:</label>
                                        <div class="col-sm-6">
                                            <textarea name="description_l3" id="description_l3" class="form-control" rows="3" placeholder="Description L3"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="description_p" class="col-sm-3 col-form-label">Petite description:</label>
                                        <div class="col-sm-6">
                                            <textarea name="description_p" id="description_p" class="form-control" rows="3" placeholder="Petite description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="description_p_en" class="col-sm-3 col-form-label">Petite description EN:</label>
                                        <div class="col-sm-6">
                                            <textarea name="description_p_en" id="description_p_en" class="form-control" rows="3" placeholder="Petite description en anglais"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="description_p_l3" class="col-sm-3 col-form-label">Petite description L3:</label>
                                        <div class="col-sm-6">
                                            <textarea name="description_p_l3" id="description_p_l3" class="form-control" rows="3" placeholder="Petite description L3"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="prix" class="col-sm-3 col-form-label">Prix:</label>
                                        <div class="col-sm-6">
                                            <input type="number" step="0.01" name="prix" id="prix" class="form-control" placeholder="Entrez le prix" required>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="prix_barre" class="col-sm-3 col-form-label">Prix barré:</label>
                                        <div class="col-sm-6">
                                            <input type="number" step="0.01" name="prix_barre" id="prix_barre" class="form-control" placeholder="Prix barré">
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="video" class="col-sm-3 col-form-label">Video:</label>
                                        <div class="col-sm-6">
                                            <textarea name="video" id="video" class="form-control" rows="3" placeholder="Lien video"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="map" class="col-sm-3 col-form-label">Map:</label>
                                        <div class="col-sm-6">
                                            <textarea name="map" id="map" class="form-control" rows="3" placeholder="Code map"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="metatitre" class="col-sm-3 col-form-label">Meta titre:</label>
                                        <div class="col-sm-6">
                                            <textarea name="metatitre" id="metatitre" class="form-control" rows="3" placeholder="Meta titre"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="metadescription" class="col-sm-3 col-form-label">Meta description:</label>
                                        <div class="col-sm-6">
                                            <textarea name="metadescription" id="metadescription" class="form-control" rows="3" placeholder="Meta description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="keyword" class="col-sm-3 col-form-label">Keywords:</label>
                                        <div class="col-sm-6">
                                            <textarea name="keyword" id="keyword" class="form-control" rows="3" placeholder="Keywords"></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-group row gutters">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Ajouter Produit</button>
                                            <a class="btn btn-secondary" href="{{ route('admin.mes-produits') }}">Retour</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('add_produit').addEventListener('submit', function(e) {
   e.preventDefault();
   const formData = new FormData(this);
   fetch(this.action, {
       method: 'POST',
       body: formData,
       headers: {
           'X-Requested-With': 'XMLHttpRequest',
       }
   })
   .then(response => {
       if (response.ok) {
           return response.json();
       } else {
           return response.json().then(err => { throw err; });
       }
   })
   .then(data => {
       if (data.success && data.id) { // Ensure the response contains the product ID
           Swal.fire({
               title: 'Succès!',
               text: data.message,
               icon: 'success',
               confirmButtonText: 'OK'
           }).then(() => {
               window.location.href = `/admin/detail-produit/${data.id}`;
           });
       } else {
           Swal.fire({
               title: 'Erreur!',
               text: 'Impossible de récupérer l\'ID du produit.',
               icon: 'error',
               confirmButtonText: 'OK'
           });
       }
   })
   .catch(error => {
       let errorMsg = 'Une erreur est survenue.';
       if (error.errors && error.errors.ref) {
           errorMsg = error.errors.ref[0];
       } else if (error.errors && error.errors.nom) {
           errorMsg = error.errors.nom[0];
       }
       Swal.fire({
           title: 'Erreur!',
           text: errorMsg,
           icon: 'error',
           confirmButtonText: 'OK'
       });
   });
});
</script>
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
