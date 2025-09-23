@extends('layouts.admin')

@section('contentadmin')
    <div class="app-wrap">
        @include('admin.header')

        <div class="app-container">
            @include('admin.sidebar')

            <div class="app-main">
                <header class="main-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="page-icon">
                                    <i class="icon-pencil"></i>
                                </div>
                                <div class="page-title">
                                    <h5>Modifier Slider</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="main-content">
                    <div class="row gutters">
                        <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                            <div class="card m-0">
                                <div class="card-body">
                                    <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <!-- Nom -->
                                        <div class="form-group">
                                            <label for="nom">Nom <span class="text-danger">*</span></label>
                                            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $slider->nom) }}" required>
                                            @error('nom')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <!-- Nom translations -->
                                        <div class="form-group">
                                            <label for="nom_en">Nom (EN)</label>
                                            <input type="text" name="nom_en" id="nom_en" class="form-control" value="{{ old('nom_en', $slider->nom_en) }}">
                                            @error('nom_en')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nom_l3">Nom (L3)</label>
                                            <input type="text" name="nom_l3" id="nom_l3" class="form-control" value="{{ old('nom_l3', $slider->nom_l3) }}">
                                            @error('nom_l3')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nom_l4">Nom (L4)</label>
                                            <input type="text" name="nom_l4" id="nom_l4" class="form-control" value="{{ old('nom_l4', $slider->nom_l4) }}">
                                            @error('nom_l4')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>

                                        <!-- Secondary names -->
                                        <div class="form-group">
                                            <label for="nom2">Nom2</label>
                                            <input type="text" name="nom2" id="nom2" class="form-control" value="{{ old('nom2', $slider->nom2) }}">
                                            @error('nom2')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nom2_en">Nom2 (EN)</label>
                                            <input type="text" name="nom2_en" id="nom2_en" class="form-control" value="{{ old('nom2_en', $slider->nom2_en) }}">
                                            @error('nom2_en')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nom2_l3">Nom2 (L3)</label>
                                            <input type="text" name="nom2_l3" id="nom2_l3" class="form-control" value="{{ old('nom2_l3', $slider->nom2_l3) }}">
                                            @error('nom2_l3')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nom2_l4">Nom2 (L4)</label>
                                            <input type="text" name="nom2_l4" id="nom2_l4" class="form-control" value="{{ old('nom2_l4', $slider->nom2_l4) }}">
                                            @error('nom2_l4')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>

                                        <!-- Descriptions -->
                                        <div class="form-group">
                                            <label for="p_descri">Description</label>
                                            <textarea name="p_descri" id="p_descri" class="form-control" rows="3">{{ old('p_descri', $slider->p_descri) }}</textarea>
                                            @error('p_descri')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="p_descri_en">Description (EN)</label>
                                            <textarea name="p_descri_en" id="p_descri_en" class="form-control" rows="3">{{ old('p_descri_en', $slider->p_descri_en) }}</textarea>
                                            @error('p_descri_en')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="p_descri_l3">Description (L3)</label>
                                            <textarea name="p_descri_l3" id="p_descri_l3" class="form-control" rows="3">{{ old('p_descri_l3', $slider->p_descri_l3) }}</textarea>
                                            @error('p_descri_l3')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="p_descri_l4">Description (L4)</label>
                                            <textarea name="p_descri_l4" id="p_descri_l4" class="form-control" rows="3">{{ old('p_descri_l4', $slider->p_descri_l4) }}</textarea>
                                            @error('p_descri_l4')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>

                                        <!-- Current Image -->
                                        <div class="form-group">
                                            <label>Image actuelle</label>
                                            <div>
                                                <img src="{{ asset($slider->img) }}" style="width:200px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Remplacer l'image</label>
                                            <input type="file" name="img" id="img" class="form-control-file">
                                            @error('img')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>

                                        <!-- Buttons -->
                                        <div class="form-group">
                                            <label for="Button">Button Text</label>
                                            <input type="text" name="Button" id="Button" class="form-control" value="{{ old('Button', $slider->Button) }}">
                                            @error('Button')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="Button_en">Button (EN)</label>
                                            <input type="text" name="Button_en" id="Button_en" class="form-control" value="{{ old('Button_en', $slider->Button_en) }}">
                                            @error('Button_en')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="Button_l3">Button (L3)</label>
                                            <input type="text" name="Button_l3" id="Button_l3" class="form-control" value="{{ old('Button_l3', $slider->Button_l3) }}">
                                            @error('Button_l3')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="Button_l4">Button (L4)</label>
                                            <input type="text" name="Button_l4" id="Button_l4" class="form-control" value="{{ old('Button_l4', $slider->Button_l4) }}">
                                            @error('Button_l4')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>

                                        <!-- Link and contact -->
                                        <div class="form-group">
                                            <label for="lien_desti">Lien Destination</label>
                                            <input type="url" name="lien_desti" id="lien_desti" class="form-control" value="{{ old('lien_desti', $slider->lien_desti) }}">
                                            @error('lien_desti')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="mail">Mail</label>
                                            <input type="email" name="mail" id="mail" class="form-control" value="{{ old('mail', $slider->mail) }}">
                                            @error('mail')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="page">Page</label>
                                            <input type="text" name="page" id="page" class="form-control" value="{{ old('page', $slider->page) }}">
                                            @error('page')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>

                                        <div class="form-group mt-3">
                                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Annuler</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END .main-content -->
            </div>
        </div>
    </div>
@endsection
