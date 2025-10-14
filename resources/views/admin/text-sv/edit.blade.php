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
                                <i class="icon-text"></i>
                            </div>
                            <div class="page-title">
                                <h5>Modifier Texte SV</h5>
                                <h6 class="sub-heading">Langue: {{ $textSv->language }}</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="right-actions">
                                <a href="{{ route('admin.text-sv.index') }}" class="btn btn-secondary float-right" data-toggle="tooltip" data-placement="left" title="Retour">
                                    <i class="icon-arrow-left">back</i>
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
                                <h3>Modifier le texte SV</h3>
                            </div>
                            <form action="{{ route('admin.text-sv.update', $textSv->id) }}" method="POST">
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

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <!-- Basic Information -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="language">Langue:</label>
                                                <input type="text" name="language" id="language" class="form-control" value="{{ old('language', $textSv->language) }}" placeholder="ex: fr, en, ar" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mail">Email:</label>
                                                <input type="email" name="mail" id="mail" class="form-control" value="{{ old('mail', $textSv->mail) }}" placeholder="email@example.com">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text Fields organized in sections -->
                                    <div class="card mt-3">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5>Textes 1 - 25</h5>
                                            <button type="submit" class="btn btn-primary btn-sm">Sauvegarder</button>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @for ($i = 1; $i <= 25; $i++)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="text{{ $i }}">Texte {{ $i }}:</label>
                                                            <textarea name="text{{ $i }}" id="text{{ $i }}" class="form-control" rows="2" placeholder="Texte {{ $i }}">{{ old("text{$i}", $textSv->{"text{$i}"} ?? '') }}</textarea>
                                                        </div>
                                                    </div>
                                                    @if ($i % 2 == 0 && $i < 25)
                                                        </div><div class="row">
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Mettre à jour Texte SV</button>
                                        <a class="btn btn-secondary" href="{{ route('admin.text-sv.index') }}">Annuler</a>
                                    </div>
                                </div>

                                <!-- Floating Save Button -->
                                <div class="floating-save-btn">
                                    <button type="submit" class="btn btn-success btn-lg" onclick="document.getElementById('text-sv-form').submit();">
                                        <i class="icon-check"></i> Sauvegarder les modifications
                                    </button>
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

<style>
.floating-save-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
    background: white;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// Add form ID for floating button
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.setAttribute('id', 'text-sv-form');

    // Handle form submission with AJAX
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès!',
                    text: data.message,
                    confirmButtonText: 'OK'
                });
                // Stay on the same page - no redirect
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur!',
                    text: 'Une erreur est survenue.',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Erreur!',
                text: 'Une erreur est survenue lors de la sauvegarde.',
                confirmButtonText: 'OK'
            });
        });
    });
});
</script>
@endsection
