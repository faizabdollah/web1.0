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
                                <h5>Ajouter Catégorie</h5>
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
                                <h3>Ajouter une nouvelle catégorie</h3>
                            </div>
                            <form action="{{ route('admin.categories.store') }}" method="POST" name="add_categorie" id="add_categorie">
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
                                        <label for="nom_categorie" class="col-sm-3 col-form-label">Nom de la catégorie:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nom_categorie" id="nom_categorie" class="form-control" placeholder="Entrez le nom de la catégorie" required>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label">Description (optionnelle):</label>
                                        <div class="col-sm-6">
                                            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Description optionnelle"></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-group row gutters">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Ajouter Catégorie</button>
                                            <a class="btn btn-secondary" href="{{ route('admin.mes-produits') }}">Retour</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('add_categorie').addEventListener('submit', function(e) {
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
       if (data.success) {
           Swal.fire({
               title: 'Succès!',
               text: data.message,
               icon: 'success',
               confirmButtonText: 'OK'
           }).then(() => {
               window.location.href = '{{ route("admin.categories.index") }}';
           });
       } else {
           // Handle success without redirect if needed
           window.location.href = '{{ route("admin.categories.index") }}';
       }
   })
   .catch(error => {
       let errorMsg = 'Une erreur est survenue.';
       if (error.errors && error.errors.nom_categorie) {
           errorMsg = error.errors.nom_categorie[0];
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
