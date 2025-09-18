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
                                <h5>Modifier Image Principale du Produit ( {{ $produit->nom }} )</h5>
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
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Modifier l'Image Principale de votre Produit</h3>
                        </div>
                        <form action="{{ route('admin.modifier-image.update', $produit->id) }}" method="POST" name="mes_produit" id="mes_produit" enctype="multipart/form-data">
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

                                <!-- Image Upload -->
                                <div class="form-group row gutters">
                                    <label class="col-sm-2 col-form-label">Image Principale:</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="img" class="form-control-file" id="imgUpload" onchange="showImagePreview(event)">
                                    </div>
                                </div>

                                <!-- Image Preview Section -->
                                <div id="imagePreview" style="display: none; margin-top: 20px;">
                                    <h4>Prévisualisation de l'image:</h4>
                                    <img id="previewContainer" src="" alt="Preview" style="max-width: 300px; max-height: 300px; border: 1px solid #ddd; border-radius: 5px;">
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group row gutters">
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">Mettre à jour</button>
                                        <a class="btn btn-secondary btn-block" href="{{ route('admin.detail-produit', $produit->id) }}">Retour</a>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    const preview = document.getElementById('previewContainer');
    const imagePreview = document.getElementById('imagePreview');

    // Clear previous previews
    preview.src = '';

    // Display the preview section
    imagePreview.style.display = 'block';

    // Get the selected file
    const file = event.target.files[0];

    if (file && file.type.startsWith('image/')) {
        // Read the file and set the src of the image element
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        imagePreview.style.display = 'none';
    }
}
</script>

@endsection
