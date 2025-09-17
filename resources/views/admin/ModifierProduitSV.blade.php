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
                                <h5>Modifier produit ( {{ $produit->nom }} )</h5>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div  class="card">
                            <div class="card-header"></div>
                            <form action="{{ route('admin.modifier-produit.update', $produit->id) }}" method="POST" name="mes_produit" id="mes_produit" enctype="multipart/form-data" onsubmit="return syncCKEditor();">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row gutters">
                                        <label for="sous_categorie" class="col-sm-3 col-form-label" >Sous catégorie:</label>
                                        <div class="col-sm-6">
                                            <input disabled type="text" value="{{ $produit->categorie }}" id="sous_categorie" name="sous_categorie" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                      <label for="categorie" class="col-sm-3 col-form-label">Choisir une categorie :</label>
                                      <div class="col-sm-9">
                                          <select name="categorie" class="form-control" id="categorie">
                                            <option value="{{ $produit->categorie }}" selected>{{ $produit->categorie }}</option>
                                            @foreach($categories as $category)
                                              <option value="{{ $category->categorie }}">{{ $category->categorie }}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label for="nom" class="col-sm-3 col-form-label">Nom :</label>
                                        <div class="col-sm-6">
                                            <textarea name="nom" rows="2" class="form-control" id="nom">{{ $produit->nom }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label for="nom_en" class="col-sm-3 col-form-label">Name EN:</label>
                                        <div class="col-sm-6">
                                        <textarea name="nom_en" rows="2" class="form-control" id="nom_en">{{ $produit->nom_en }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label for="nom_l3" class="col-sm-3 col-form-label">Name L3:</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="nom_l3" name="nom_l3"  value="{{ $produit->nom_l3 }}" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" >
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label">Emplacement numéro :</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="empl" name="empl" value="{{ $produit->empl }}" class="form-control mx-sm-3">
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label for="ref" class="col-sm-3 col-form-label">Réf :</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="ref" name="ref" value="{{ $produit->ref }}" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label for="prix" class="col-sm-3 col-form-label">Prix :</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="prix" name="prix" value="{{ $produit->prix }}" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="prix_barre">Prix barré :</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="prix_barre"  value="{{ $produit->prix_barre }}" name="prix_barre" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"><br>
                                        </div>
                                    </div>
                                    <span class="col-sm-9">
                                        <input name="date" type="hidden" class="form-control" id="date" placeholder="Date" value="{{ $date }}">
                                        <input name="id" type="hidden" class="form-control" id="id" placeholder="Date" value="{{ $produit->id }}">
                                    </span>
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="inputPassword6">Petite description :</label>
                                        <div class="col-sm-6">
                                            <textarea name="description_p" rows="2" class="form-control" id="description_p">{{ $produit->description_p }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="inputPassword6">short description EN:</label>
                                        <div class="col-sm-6">
                                            <textarea name="description_p_en" rows="2" class="form-control" id="description_p_en">{{ $produit->description_p_en }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="inputPassword6">short description L3:</label>
                                        <div class="col-sm-6">
                                            <textarea name="description_p_l3" rows="2" class="form-control" id="description_p_l3">{{ $produit->description_p_l3 }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label for="inputPassword6" class="col-sm-3 col-form-label">Grande description :</label>
                                        <div class="col-sm-6">
                                            <textarea   name="description" class="form-control" id="description" rows="4">{{ $produit->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label for="inputPassword6" class="col-sm-3 col-form-label">description EN:</label>
                                        <div class="col-sm-6">
                                            <textarea   name="description_en" class="form-control" id="description_en" rows="4">{{ $produit->description_en }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label for="inputPassword6" class="col-sm-3 col-form-label">description L3:</label>
                                        <div class="col-sm-6">
                                            <textarea   name="description_l3" class="form-control" id="description_l3" rows="4">{{ $produit->description_l3 }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="inputPassword6">Video :</label>
                                        <div class="col-sm-6">
                                            <textarea name="video" rows="2" class="form-control" id="video">{{ $produit->video }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Video Image Update Section (Single Image) -->
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label">Video Image (Current):</label>
                                        <div class="col-sm-9">
                                            @if($produit->video_img)
                                                <img src="{{ asset($produit->video_img) }}" alt="Current Video Image" style="max-width: 200px; max-height: 200px; margin-bottom: 10px;">
                                                <p><small>Current path: {{ $produit->video_img }}</small></p>
                                            @else
                                                <p>No current video image.</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label">Update Video Image:</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="video_img" class="form-control-file" id="videoImgUpload" accept="image/*" onchange="previewVideoImage(event)">
                                        </div>
                                    </div>

                                    <!-- Video Image Preview -->
                                    <div id="videoImagePreview" style="display: none; margin-top: 20px;">
                                        <h5>Preview New Video Image:</h5>
                                        <img id="videoImgPreview" src="" alt="Preview" style="max-width: 200px; max-height: 200px;">
                                    </div>

                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="inputPassword6">Map :</label>
                                        <div class="col-sm-6">
                                            <textarea name="map" rows="2" class="form-control" id="map">{{ $produit->map }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="inputPassword6">Titre META:</label>
                                        <div class="col-sm-6">
                                            <textarea name="metatitre" rows="2" class="form-control" id="metatitre">{{ $produit->metatitre }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="inputPassword6">Description META :</label>
                                        <div class="col-sm-6">
                                            <textarea name="metadescription" rows="2" class="form-control" id="metadescription">{{ $produit->metadescription }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <label class="col-sm-3 col-form-label" for="inputPassword6">Keywords :</label>
                                        <div class="col-sm-6">
                                            <textarea name="keyword" rows="2" class="form-control" id="keyword">{{ $produit->keyword }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters">
                                        <div class="col-sm-10">
                                            <input type="hidden" name="page" value="{{ $produit->page }}">
                                            <input type="submit" class="btn btn-primary" value="Valider">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script>
                                CKEDITOR.replace( 'description' );
                                CKEDITOR.replace( 'description_l3' );
                                CKEDITOR.replace( 'description_en' );
                                CKEDITOR.replace( 'description_p' );
                                CKEDITOR.replace( 'description_p_en' );
                                CKEDITOR.replace( 'description_p_l3' );

                                function syncCKEditor() {
                                    for (instance in CKEDITOR.instances) {
                                        CKEDITOR.instances[instance].updateElement();
                                    }
                                    return true;
                                }
                            </script>

                            <script>
                            function previewVideoImage(event) {
                                const file = event.target.files[0];
                                const preview = document.getElementById('videoImgPreview');
                                const previewSection = document.getElementById('videoImagePreview');
                                if (file && file.type.startsWith('image/')) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        preview.src = e.target.result;
                                        previewSection.style.display = 'block';
                                    };
                                    reader.readAsDataURL(file);
                                } else {
                                    previewSection.style.display = 'none';
                                }
                            }
                            </script>
                        </div>
                    </div>
                    <br><br>
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
    <!-- END: .app-wrap -->

    <script src="https://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <script>
    function showImagePreview(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('previewContainer');
        const imagePreview = document.getElementById('imagePreview');

        previewContainer.innerHTML = '';
        imagePreview.style.display = 'block';

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100px';
                    img.style.height = '100px';
                    img.style.margin = '5px';
                    img.style.objectFit = 'cover';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        }
    }

    function previewVideoImage(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('videoImgPreview');
        const previewSection = document.getElementById('videoImagePreview');
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewSection.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            previewSection.style.display = 'none';
        }
    }

    function syncCKEditor() {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        return true;
    }
    </script>
@endsection
