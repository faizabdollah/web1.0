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
                                <h5>Ajouter Produit image</h5>
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
                            <h3>Ajoutez des images à votre Produit</h3>
                        </div>
                        <form action="{{ route('admin.ajouter-produit-image.store', $produit->id) }}" method="POST" name="mes_produit" id="mes_produit" enctype="multipart/form-data">
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
                                    <label class="col-sm-2 col-form-label">Produit Image:</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="img[]" multiple class="form-control-file" id="imgUpload" onchange="showImagePreview(event)">
                                    </div>
                                </div>

                                <!-- Image Preview Section -->
                                <div id="imagePreview" style="display: none; margin-top: 20px;">
                                    <h4>Prévisualisation des images:</h4>
                                    <div id="previewContainer" style="display: flex; flex-wrap: wrap;"></div>
                                </div>

                                <!-- Hidden Inputs for mail and page -->
                                <input type="hidden" name="mail" value="{{ $fournisseur->mail }}">
                                <input type="hidden" name="page" value="{{ $fournisseur->page ?? 1 }}">

                                <!-- Submit Button -->
                                <div class="form-group row gutters">
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                                        <a class="btn btn-primary btn-block" href="{{ route('admin.detail-produit', $produit->id) }}">Retour</a>
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
        const previewContainer = document.getElementById('previewContainer');
        const imagePreview = document.getElementById('imagePreview');

        // Clear previous previews
        previewContainer.innerHTML = '';

        // Display the preview section
        imagePreview.style.display = 'block';

        // Loop through selected files
        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];

            // Create an image element
            const imgElement = document.createElement('img');
            imgElement.style.maxWidth = '150px';
            imgElement.style.marginRight = '10px';
            imgElement.style.marginBottom = '10px';

            // Read the file and set the src of the image element
            const reader = new FileReader();
            reader.onload = function(e) {
                imgElement.src = e.target.result;
            };
            reader.readAsDataURL(file);

            // Append the image to the preview container
            previewContainer.appendChild(imgElement);
        }
    }
</script>

<style>
    /* Card Container */
    .card {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
        color: white;
        font-size: 20px;
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 8px 8px 0 0;
    }

    .card-header h3 {
        color: black;
    }

    /* Form Styling */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .col-form-label {
        font-weight: 600;
        font-size: 16px;
        color: #333;
    }

    .form-control-file {
        border-radius: 5px;
        padding: 10px;
        border: 1px solid #ddd;
        background-color: #fff;
        transition: border-color 0.3s ease;
    }

    .form-control-file:focus {
        border-color: #007bff;
    }

    /* Button Styling */
    .btn {
        font-size: 16px;
        font-weight: 600;
        padding: 12px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    /* Layout Improvements */
    .gutters {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .col-sm-6 {
        padding-left: 0;
    }

    .col-sm-3 {
        font-size: 16px;
    }

    .col-sm-10 {
        text-align: right;
    }

    .main-content {
        background-color: #f1f1f1;
        padding: 30px;
        border-radius: 10px;
    }

    #imagePreview img {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px;
    }
</style>

@endsection
