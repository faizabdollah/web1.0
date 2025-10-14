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
                                <img src="{{ asset('MA-admi/img/icon/annuaire_icon.png') }}" alt="Categories" style="width: 32px; height: 32px;">
                            </div>
                            <div class="page-title">
                                <h5>Modifier l'image de la catégorie</h5>
                                <h6 class="sub-heading">{{ $category->nom_categorie }}</h6>
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
                                <h3>Modifier l'image de la catégorie</h3>
                            </div>
                            <form action="{{ route('admin.categories.update-image', $category->id) }}" method="POST" enctype="multipart/form-data">
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

                                    <!-- Current Image Display -->
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label">Image actuelle:</label>
                                        <div class="col-sm-6">
                                            @if($category->img)
                                                <div class="mb-3">
                                                    <img src="{{ asset($category->img) }}" alt="Current Image" style="max-width: 300px; border: 1px solid #ddd; border-radius: 5px;">
                                                </div>
                                                <a href="{{ route('admin.categories.delete-image', $category->id) }}"
                                                   class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette image ?')">
                                                    <i class="icon-trash"></i> Supprimer l'image
                                                </a>
                                            @else
                                                <p class="text-muted">Aucune image définie pour cette catégorie.</p>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Image Upload -->
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label">Nouvelle image:</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="image" class="form-control-file" id="imageUpload" accept="image/*" onchange="showImagePreview(event)">
                                            <small class="form-text text-muted">Formats acceptés: JPG, PNG, GIF. Taille maximale: 2MB.</small>
                                        </div>
                                    </div>

                                    <!-- Image Preview Section -->
                                    <div id="imagePreview" style="display: none; margin-top: 20px;">
                                        <h5>Prévisualisation de la nouvelle image:</h5>
                                        <div id="previewContainer"></div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Mettre à jour l'image</button>
                                            <a class="btn btn-secondary" href="{{ route('admin.categories.edit', $category->id) }}">Modifier les détails</a>
                                            <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}">Retour à la liste</a>
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

<!-- JavaScript for Image Preview -->
<script>
    function showImagePreview(event) {
        const previewContainer = document.getElementById('previewContainer');
        const imagePreview = document.getElementById('imagePreview');

        // Clear previous previews
        previewContainer.innerHTML = '';

        // Get the selected file
        const file = event.target.files[0];
        if (file) {
            // Display the preview section
            imagePreview.style.display = 'block';

            // Create an image element
            const imgElement = document.createElement('img');
            imgElement.style.maxWidth = '300px';
            imgElement.style.border = '1px solid #ddd';
            imgElement.style.borderRadius = '5px';
            imgElement.style.padding = '5px';

            // Read the file and set the src of the image element
            const reader = new FileReader();
            reader.onload = function(e) {
                imgElement.src = e.target.result;
            };
            reader.readAsDataURL(file);

            // Append the image to the preview container
            previewContainer.appendChild(imgElement);
        } else {
            // Hide preview if no file selected
            imagePreview.style.display = 'none';
        }
    }
</script>
@endsection
