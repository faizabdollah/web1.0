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
                        <div class="col-sm-8">
                            <h5>Modifier ImageAbout</h5>
                        </div>
                        <div class="col-sm-4">
                            <div class="right-actions">
                                <a href="{{ route('about') }}" class="btn btn-secondary float-right">
                                    Retour à la page About
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="main-content">
                <div class="row gutters">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Modifier ImageAbout</h3>
                            </div>
                            <form action="{{ route('admin.imageabouts.update', $image_about->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @for($i = 1; $i <= 10; $i++)
                                        <div class="form-group row gutters">
                                            <label for="img{{ $i }}" class="col-sm-3 col-form-label">Image {{ $i }}:</label>
                                            <div class="col-sm-6">
                                                @if($image_about->{"img{$i}"})
                                                    <img src="{{ asset($image_about->{"img{$i}"}) }}" width="150" class="mb-2" />
                                                @endif
                                                <input type="file" name="img{{ $i }}" id="img{{ $i }}" class="form-control-file" />
                                            </div>
                                        </div>
                                    @endfor

                                    <div class="form-group row gutters">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Mettre à Jour</button>
                                            <a href="{{ route('about') }}" class="btn btn-secondary">Annuler</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
