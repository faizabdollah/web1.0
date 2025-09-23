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
                                <h5>Paramètres</h5>
                                <h6 class="sub-heading"></h6>
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

                <!-- Row start -->

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <form action="{{ route('admin.updateinfo.update') }}" method="POST" name="mes_produit" id="mes_produit"
                            enctype="multipart/form-data">
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

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Nom :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="nom" name="nom" value="{{ old('nom', $fournisseur->nom ?? '') }}"
                                            class="form-control mx-sm-3 @error('nom') is-invalid @enderror">
                                        @error('nom')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Nom EN:</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="nom_en" name="nom_en" value="{{ old('nom_en', $fournisseur->nom_en ?? '') }}"
                                            class="form-control mx-sm-3 @error('nom_en') is-invalid @enderror">
                                        @error('nom_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Nom AL:</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="nom_l3" name="nom_l3" value="{{ old('nom_l3', $fournisseur->nom_l3 ?? '') }}"
                                            class="form-control mx-sm-3 @error('nom_l3') is-invalid @enderror">
                                        @error('nom_l3')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Nom ESP:</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="nom_l4" name="nom_l4" value="{{ old('nom_l4', $fournisseur->nom_l4 ?? '') }}"
                                            class="form-control mx-sm-3 @error('nom_l4') is-invalid @enderror">
                                        @error('nom_l4')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Prénom :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="prenom" name="prenom" value="{{ old('prenom', $fournisseur->prenom ?? '') }}"
                                            class="form-control mx-sm-3 @error('prenom') is-invalid @enderror">
                                        @error('prenom')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Nom Entreprise, Société .. :
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" id="raison_sociale" name="raison_sociale"
                                            value="{{ old('raison_sociale', $fournisseur->raison_sociale ?? '') }}" class="form-control mx-sm-3 @error('raison_sociale') is-invalid @enderror">
                                        @error('raison_sociale')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label class="col-sm-3 col-form-label">GSM :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="gsm" name="gsm" value="{{ old('gsm', $fournisseur->gsm ?? '') }}"
                                            class="form-control mx-sm-3 @error('gsm') is-invalid @enderror">
                                        @error('gsm')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label class="col-sm-3 col-form-label">Whatsapp :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="whatsapp" name="whatsapp"
                                            value="{{ old('whatsapp', $fournisseur->whatsapp ?? '') }}" class="form-control mx-sm-3 @error('whatsapp') is-invalid @enderror">
                                        Ne pas ajouter ( + ) ni d'espace | Ex : 212686390173
                                        @error('whatsapp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Tel 1 :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="tel1" name="tel1"
                                            value="{{ old('tel1', $fournisseur->tel1 ?? '') }}" class="form-control mx-sm-3 @error('tel1') is-invalid @enderror">
                                        @error('tel1')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Tel 2 :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="tel2" name="tel2"
                                            value="{{ old('tel2', $fournisseur->tel2 ?? '') }}" class="form-control mx-sm-3 @error('tel2') is-invalid @enderror">
                                        @error('tel2')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="mail" class="col-sm-3 col-form-label">E-mail (Login):</label>
                                    <div class="col-sm-6">
                                        <input disabled type="text" id="mail" name="mail"
                                            value="{{ $fournisseur->mail ?? '' }}" class="form-control mx-sm-3">
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="mail" class="col-sm-3 col-form-label">E-mail 2:</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="mail2" name="mail2"
                                            value="{{ old('mail2', $fournisseur->mail2 ?? '') }}" class="form-control mx-sm-3 @error('mail2') is-invalid @enderror">
                                        @error('mail2')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label class="col-sm-3 col-form-label">Site Web :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="site_web" name="site_web"
                                            value="{{ old('site_web', $fournisseur->site_web ?? '') }}" class="form-control mx-sm-3 @error('site_web') is-invalid @enderror"><br>
                                        <span class="col-sm-6">Ne pas ajouter (http://) ou (https://)</span>
                                        @error('site_web')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Adresse :</label>
                                    <div class="col-sm-6">
                                        <textarea rows="3" type="text" id="adresse" name="adresse" class="form-control mx-sm-3 @error('adresse') is-invalid @enderror">{{ old('adresse', $fournisseur->adresse ?? '') }}</textarea>
                                        @error('adresse')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Petite description sur
                                        activité FR :</label>
                                    <div class="col-sm-6">
                                        <textarea rows="3" type="text" id="description_p" name="description_p" class="form-control mx-sm-3 @error('description_p') is-invalid @enderror">{{ old('description_p', $fournisseur->description_p ?? '') }}</textarea>
                                        @error('description_p')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Description sur activité FR
                                        :</label>
                                    <div class="col-sm-6">
                                        <textarea rows="5" type="text" id="description" name="description" class="form-control mx-sm-3 @error('description') is-invalid @enderror">{{ old('description', $fournisseur->description ?? '') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Petite description sur
                                        activité EN:</label>
                                    <div class="col-sm-6">
                                        <textarea rows="3" type="text" id="description_p_en" name="description_p_en" class="form-control mx-sm-3 @error('description_p_en') is-invalid @enderror">{{ old('description_p_en', $fournisseur->description_p_en ?? '') }}</textarea>
                                        @error('description_p_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Description sur activité
                                        EN:</label>
                                    <div class="col-sm-6">
                                        <textarea rows="5" type="text" id="description_en" name="description_en" class="form-control mx-sm-3 @error('description_en') is-invalid @enderror">{{ old('description_en', $fournisseur->description_en ?? '') }}</textarea>
                                        @error('description_en')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Petite description sur
                                        activité AL:</label>
                                    <div class="col-sm-6">
                                        <textarea rows="3" type="text" id="description_p_l3" name="description_p_l3" class="form-control mx-sm-3 @error('description_p_l3') is-invalid @enderror">{{ old('description_p_l3', $fournisseur->description_p_l3 ?? '') }}</textarea>
                                        @error('description_p_l3')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Description sur activité
                                        AL:</label>
                                    <div class="col-sm-6">
                                        <textarea rows="5" type="text" id="description_l3" name="description_l3" class="form-control mx-sm-3 @error('description_l3') is-invalid @enderror">{{ old('description_l3', $fournisseur->description_l3 ?? '') }}</textarea>
                                        @error('description_l3')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Petite description sur
                                        activité ESP:</label>
                                    <div class="col-sm-6">
                                        <textarea rows="3" type="text" id="description_p_l4" name="description_p_l4" class="form-control mx-sm-3 @error('description_p_l4') is-invalid @enderror">{{ old('description_p_l4', $fournisseur->description_p_l4 ?? '') }}</textarea>
                                        @error('description_p_l4')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Description sur activité
                                        ESP:</label>
                                    <div class="col-sm-6">
                                        <textarea rows="5" type="text" id="description_l4" name="description_l4" class="form-control mx-sm-3 @error('description_l4') is-invalid @enderror">{{ old('description_l4', $fournisseur->description_l4 ?? '') }}</textarea>
                                        @error('description_l4')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Description sur activité
                                        AR:</label>
                                    <div class="col-sm-6">
                                        <textarea rows="5" type="text" id="description_ar" name="description_ar" class="form-control mx-sm-3 @error('description_ar') is-invalid @enderror">{{ old('description_ar', $fournisseur->description_ar ?? '') }}</textarea>
                                        @error('description_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Facebook :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="face" name="face"
                                            value="{{ old('face', $fournisseur->face ?? '') }}" class="form-control mx-sm-3 @error('face') is-invalid @enderror">
                                        @error('face')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Twitter :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="twitter" name="twitter"
                                            value="{{ old('twitter', $fournisseur->twitter ?? '') }}" class="form-control mx-sm-3 @error('twitter') is-invalid @enderror">
                                        @error('twitter')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Instagram :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="instagram" name="instagram"
                                            value="{{ old('instagram', $fournisseur->instagram ?? '') }}" class="form-control mx-sm-3 @error('instagram') is-invalid @enderror">
                                        @error('instagram')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Pinterest :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="pinterest" name="pinterest"
                                            value="{{ old('pinterest', $fournisseur->pinterest ?? '') }}" class="form-control mx-sm-3 @error('pinterest') is-invalid @enderror">
                                        @error('pinterest')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Youtube :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="youtube" name="youtube"
                                            value="{{ old('youtube', $fournisseur->youtube ?? '') }}" class="form-control mx-sm-3 @error('youtube') is-invalid @enderror">
                                        @error('youtube')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="prenom" class="col-sm-3 col-form-label">Skype :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="skype" name="skype"
                                            value="{{ old('skype', $fournisseur->skype ?? '') }}" class="form-control mx-sm-3 @error('skype') is-invalid @enderror">
                                        @error('skype')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Initialize CKEditor 5
                                ClassicEditor
                                    .create( document.querySelector( '#description' ), {
                                        toolbar: [
                                            'heading',
                                            '|',
                                            'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor',
                                            '|',
                                            'bold', 'italic', 'underline', 'strikethrough',
                                            '|',
                                            'alignment',
                                            '|',
                                            'link', 'bulletedList', 'numberedList',
                                            '|',
                                            'outdent', 'indent',
                                            '|',
                                            'blockQuote', 'insertTable', 'mediaEmbed', 'horizontalLine', 'specialCharacters',
                                            '|',
                                            'undo', 'redo'
                                        ],
                                        height: 300,


                                    } )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );

                                ClassicEditor
                                    .create( document.querySelector( '#description_p' ), {
                                        toolbar: [
                                            'heading',
                                            '|',
                                            'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor',
                                            '|',
                                            'bold', 'italic', 'underline', 'strikethrough',
                                            '|',
                                            'alignment',
                                            '|',
                                            'link', 'bulletedList', 'numberedList',
                                            '|',
                                            'outdent', 'indent',
                                            '|',
                                            'blockQuote', 'insertTable', 'mediaEmbed', 'horizontalLine', 'specialCharacters',
                                            '|',
                                            'undo', 'redo'
                                        ],
                                        height: 300,
                                        fontColor: {
                                            colors: [
                                                {
                                                    color: 'hsl(0, 0%, 0%)',
                                                    label: 'Black'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 30%)',
                                                    label: 'Dim grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 60%)',
                                                    label: 'Grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 90%)',
                                                    label: 'Light grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 100%)',
                                                    label: 'White',
                                                    hasBorder: true
                                                },
                                                {
                                                    color: 'hsl(0, 75%, 60%)',
                                                    label: 'Red'
                                                },
                                                {
                                                    color: 'hsl(30, 75%, 60%)',
                                                    label: 'Orange'
                                                },
                                                {
                                                    color: 'hsl(60, 75%, 60%)',
                                                    label: 'Yellow'
                                                },
                                                {
                                                    color: 'hsl(90, 75%, 60%)',
                                                    label: 'Light green'
                                                },
                                                {
                                                    color: 'hsl(120, 75%, 60%)',
                                                    label: 'Green'
                                                },
                                                {
                                                    color: 'hsl(150, 75%, 60%)',
                                                    label: 'Aquamarine'
                                                },
                                                {
                                                    color: 'hsl(180, 75%, 60%)',
                                                    label: 'Turquoise'
                                                },
                                                {
                                                    color: 'hsl(210, 75%, 60%)',
                                                    label: 'Light blue'
                                                },
                                                {
                                                    color: 'hsl(240, 75%, 60%)',
                                                    label: 'Blue'
                                                },
                                                {
                                                    color: 'hsl(270, 75%, 60%)',
                                                    label: 'Purple'
                                                }
                                            ]
                                        },
                                        fontBackgroundColor: {
                                            colors: [
                                                {
                                                    color: 'hsl(0, 0%, 0%)',
                                                    label: 'Black'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 30%)',
                                                    label: 'Dim grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 60%)',
                                                    label: 'Grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 90%)',
                                                    label: 'Light grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 100%)',
                                                    label: 'White',
                                                    hasBorder: true
                                                },
                                                {
                                                    color: 'hsl(0, 75%, 60%)',
                                                    label: 'Red'
                                                },
                                                {
                                                    color: 'hsl(30, 75%, 60%)',
                                                    label: 'Orange'
                                                },
                                                {
                                                    color: 'hsl(60, 75%, 60%)',
                                                    label: 'Yellow'
                                                },
                                                {
                                                    color: 'hsl(90, 75%, 60%)',
                                                    label: 'Light green'
                                                },
                                                {
                                                    color: 'hsl(120, 75%, 60%)',
                                                    label: 'Green'
                                                },
                                                {
                                                    color: 'hsl(150, 75%, 60%)',
                                                    label: 'Aquamarine'
                                                },
                                                {
                                                    color: 'hsl(180, 75%, 60%)',
                                                    label: 'Turquoise'
                                                },
                                                {
                                                    color: 'hsl(210, 75%, 60%)',
                                                    label: 'Light blue'
                                                },
                                                {
                                                    color: 'hsl(240, 75%, 60%)',
                                                    label: 'Blue'
                                                },
                                                {
                                                    color: 'hsl(270, 75%, 60%)',
                                                    label: 'Purple'
                                                }
                                            ]
                                        }
                                    } )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );

                                ClassicEditor
                                    .create( document.querySelector( '#description_en' ), {
                                        toolbar: [
                                            'heading',
                                            '|',
                                            'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor',
                                            '|',
                                            'bold', 'italic', 'underline', 'strikethrough',
                                            '|',
                                            'alignment',
                                            '|',
                                            'link', 'bulletedList', 'numberedList',
                                            '|',
                                            'outdent', 'indent',
                                            '|',
                                            'blockQuote', 'insertTable', 'mediaEmbed', 'horizontalLine', 'specialCharacters',
                                            '|',
                                            'undo', 'redo'
                                        ],
                                        height: 300,
                                        fontColor: {
                                            colors: [
                                                {
                                                    color: 'hsl(0, 0%, 0%)',
                                                    label: 'Black'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 30%)',
                                                    label: 'Dim grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 60%)',
                                                    label: 'Grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 90%)',
                                                    label: 'Light grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 100%)',
                                                    label: 'White',
                                                    hasBorder: true
                                                },
                                                {
                                                    color: 'hsl(0, 75%, 60%)',
                                                    label: 'Red'
                                                },
                                                {
                                                    color: 'hsl(30, 75%, 60%)',
                                                    label: 'Orange'
                                                },
                                                {
                                                    color: 'hsl(60, 75%, 60%)',
                                                    label: 'Yellow'
                                                },
                                                {
                                                    color: 'hsl(90, 75%, 60%)',
                                                    label: 'Light green'
                                                },
                                                {
                                                    color: 'hsl(120, 75%, 60%)',
                                                    label: 'Green'
                                                },
                                                {
                                                    color: 'hsl(150, 75%, 60%)',
                                                    label: 'Aquamarine'
                                                },
                                                {
                                                    color: 'hsl(180, 75%, 60%)',
                                                    label: 'Turquoise'
                                                },
                                                {
                                                    color: 'hsl(210, 75%, 60%)',
                                                    label: 'Light blue'
                                                },
                                                {
                                                    color: 'hsl(240, 75%, 60%)',
                                                    label: 'Blue'
                                                },
                                                {
                                                    color: 'hsl(270, 75%, 60%)',
                                                    label: 'Purple'
                                                }
                                            ]
                                        },
                                        fontBackgroundColor: {
                                            colors: [
                                                {
                                                    color: 'hsl(0, 0%, 0%)',
                                                    label: 'Black'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 30%)',
                                                    label: 'Dim grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 60%)',
                                                    label: 'Grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 90%)',
                                                    label: 'Light grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 100%)',
                                                    label: 'White',
                                                    hasBorder: true
                                                },
                                                {
                                                    color: 'hsl(0, 75%, 60%)',
                                                    label: 'Red'
                                                },
                                                {
                                                    color: 'hsl(30, 75%, 60%)',
                                                    label: 'Orange'
                                                },
                                                {
                                                    color: 'hsl(60, 75%, 60%)',
                                                    label: 'Yellow'
                                                },
                                                {
                                                    color: 'hsl(90, 75%, 60%)',
                                                    label: 'Light green'
                                                },
                                                {
                                                    color: 'hsl(120, 75%, 60%)',
                                                    label: 'Green'
                                                },
                                                {
                                                    color: 'hsl(150, 75%, 60%)',
                                                    label: 'Aquamarine'
                                                },
                                                {
                                                    color: 'hsl(180, 75%, 60%)',
                                                    label: 'Turquoise'
                                                },
                                                {
                                                    color: 'hsl(210, 75%, 60%)',
                                                    label: 'Light blue'
                                                },
                                                {
                                                    color: 'hsl(240, 75%, 60%)',
                                                    label: 'Blue'
                                                },
                                                {
                                                    color: 'hsl(270, 75%, 60%)',
                                                    label: 'Purple'
                                                }
                                            ]
                                        }
                                    } )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );

                                ClassicEditor
                                    .create( document.querySelector( '#description_l3' ), {
                                        toolbar: [
                                            'heading',
                                            '|',
                                            'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor',
                                            '|',
                                            'bold', 'italic', 'underline', 'strikethrough',
                                            '|',
                                            'alignment',
                                            '|',
                                            'link', 'bulletedList', 'numberedList',
                                            '|',
                                            'outdent', 'indent',
                                            '|',
                                            'blockQuote', 'insertTable', 'mediaEmbed', 'horizontalLine', 'specialCharacters',
                                            '|',
                                            'undo', 'redo'
                                        ],
                                        height: 300,
                                        fontColor: {
                                            colors: [
                                                {
                                                    color: 'hsl(0, 0%, 0%)',
                                                    label: 'Black'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 30%)',
                                                    label: 'Dim grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 60%)',
                                                    label: 'Grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 90%)',
                                                    label: 'Light grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 100%)',
                                                    label: 'White',
                                                    hasBorder: true
                                                },
                                                {
                                                    color: 'hsl(0, 75%, 60%)',
                                                    label: 'Red'
                                                },
                                                {
                                                    color: 'hsl(30, 75%, 60%)',
                                                    label: 'Orange'
                                                },
                                                {
                                                    color: 'hsl(60, 75%, 60%)',
                                                    label: 'Yellow'
                                                },
                                                {
                                                    color: 'hsl(90, 75%, 60%)',
                                                    label: 'Light green'
                                                },
                                                {
                                                    color: 'hsl(120, 75%, 60%)',
                                                    label: 'Green'
                                                },
                                                {
                                                    color: 'hsl(150, 75%, 60%)',
                                                    label: 'Aquamarine'
                                                },
                                                {
                                                    color: 'hsl(180, 75%, 60%)',
                                                    label: 'Turquoise'
                                                },
                                                {
                                                    color: 'hsl(210, 75%, 60%)',
                                                    label: 'Light blue'
                                                },
                                                {
                                                    color: 'hsl(240, 75%, 60%)',
                                                    label: 'Blue'
                                                },
                                                {
                                                    color: 'hsl(270, 75%, 60%)',
                                                    label: 'Purple'
                                                }
                                            ]
                                        },
                                        fontBackgroundColor: {
                                            colors: [
                                                {
                                                    color: 'hsl(0, 0%, 0%)',
                                                    label: 'Black'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 30%)',
                                                    label: 'Dim grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 60%)',
                                                    label: 'Grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 90%)',
                                                    label: 'Light grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 100%)',
                                                    label: 'White',
                                                    hasBorder: true
                                                },
                                                {
                                                    color: 'hsl(0, 75%, 60%)',
                                                    label: 'Red'
                                                },
                                                {
                                                    color: 'hsl(30, 75%, 60%)',
                                                    label: 'Orange'
                                                },
                                                {
                                                    color: 'hsl(60, 75%, 60%)',
                                                    label: 'Yellow'
                                                },
                                                {
                                                    color: 'hsl(90, 75%, 60%)',
                                                    label: 'Light green'
                                                },
                                                {
                                                    color: 'hsl(120, 75%, 60%)',
                                                    label: 'Green'
                                                },
                                                {
                                                    color: 'hsl(150, 75%, 60%)',
                                                    label: 'Aquamarine'
                                                },
                                                {
                                                    color: 'hsl(180, 75%, 60%)',
                                                    label: 'Turquoise'
                                                },
                                                {
                                                    color: 'hsl(210, 75%, 60%)',
                                                    label: 'Light blue'
                                                },
                                                {
                                                    color: 'hsl(240, 75%, 60%)',
                                                    label: 'Blue'
                                                },
                                                {
                                                    color: 'hsl(270, 75%, 60%)',
                                                    label: 'Purple'
                                                }
                                            ]
                                        }
                                    } )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );

                                ClassicEditor
                                    .create( document.querySelector( '#description_l4' ), {
                                        toolbar: [
                                            'heading',
                                            '|',
                                            'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor',
                                            '|',
                                            'bold', 'italic', 'underline', 'strikethrough',
                                            '|',
                                            'alignment',
                                            '|',
                                            'link', 'bulletedList', 'numberedList',
                                            '|',
                                            'outdent', 'indent',
                                            '|',
                                            'blockQuote', 'insertTable', 'mediaEmbed', 'horizontalLine', 'specialCharacters',
                                            '|',
                                            'undo', 'redo'
                                        ],
                                        height: 300,
                                        fontColor: {
                                            colors: [
                                                {
                                                    color: 'hsl(0, 0%, 0%)',
                                                    label: 'Black'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 30%)',
                                                    label: 'Dim grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 60%)',
                                                    label: 'Grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 90%)',
                                                    label: 'Light grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 100%)',
                                                    label: 'White',
                                                    hasBorder: true
                                                },
                                                {
                                                    color: 'hsl(0, 75%, 60%)',
                                                    label: 'Red'
                                                },
                                                {
                                                    color: 'hsl(30, 75%, 60%)',
                                                    label: 'Orange'
                                                },
                                                {
                                                    color: 'hsl(60, 75%, 60%)',
                                                    label: 'Yellow'
                                                },
                                                {
                                                    color: 'hsl(90, 75%, 60%)',
                                                    label: 'Light green'
                                                },
                                                {
                                                    color: 'hsl(120, 75%, 60%)',
                                                    label: 'Green'
                                                },
                                                {
                                                    color: 'hsl(150, 75%, 60%)',
                                                    label: 'Aquamarine'
                                                },
                                                {
                                                    color: 'hsl(180, 75%, 60%)',
                                                    label: 'Turquoise'
                                                },
                                                {
                                                    color: 'hsl(210, 75%, 60%)',
                                                    label: 'Light blue'
                                                },
                                                {
                                                    color: 'hsl(240, 75%, 60%)',
                                                    label: 'Blue'
                                                },
                                                {
                                                    color: 'hsl(270, 75%, 60%)',
                                                    label: 'Purple'
                                                }
                                            ]
                                        },
                                        fontBackgroundColor: {
                                            colors: [
                                                {
                                                    color: 'hsl(0, 0%, 0%)',
                                                    label: 'Black'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 30%)',
                                                    label: 'Dim grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 60%)',
                                                    label: 'Grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 90%)',
                                                    label: 'Light grey'
                                                },
                                                {
                                                    color: 'hsl(0, 0%, 100%)',
                                                    label: 'White',
                                                    hasBorder: true
                                                },
                                                {
                                                    color: 'hsl(0, 75%, 60%)',
                                                    label: 'Red'
                                                },
                                                {
                                                    color: 'hsl(30, 75%, 60%)',
                                                    label: 'Orange'
                                                },
                                                {
                                                    color: 'hsl(60, 75%, 60%)',
                                                    label: 'Yellow'
                                                },
                                                {
                                                    color: 'hsl(90, 75%, 60%)',
                                                    label: 'Light green'
                                                },
                                                {
                                                    color: 'hsl(120, 75%, 60%)',
                                                    label: 'Green'
                                                },
                                                {
                                                    color: 'hsl(150, 75%, 60%)',
                                                    label: 'Aquamarine'
                                                },
                                                {
                                                    color: 'hsl(180, 75%, 60%)',
                                                    label: 'Turquoise'
                                                },
                                                {
                                                    color: 'hsl(210, 75%, 60%)',
                                                    label: 'Light blue'
                                                },
                                                {
                                                    color: 'hsl(240, 75%, 60%)',
                                                    label: 'Blue'
                                                },
                                                {
                                                    color: 'hsl(270, 75%, 60%)',
                                                    label: 'Purple'
                                                }
                                            ]
                                        }
                                    } )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );

                                // SweetAlert for messages
                                @if (session('success'))
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: '{{ session('success') }}',
                                    });
                                @endif

                                @if ($errors->any())
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: 'Please fix the errors below.',
                                    });
                                @endif
                            });
                        </script>

                    </div>
                </div>
                <br><br>

            </div>

            <!-- END: .main-content -->
        </div>
        <!-- END: .app-main -->
    </div>

@endsection
