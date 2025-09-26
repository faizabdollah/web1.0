@extends('layouts.admin')

@section('contentadmin')
<div class="app-wrap">
    @include('admin.header')
    <div class="app-container">
        @include('admin.sidebar')
        <div class="app-main">
            <header class="main-heading">
                <div class="container-fluid">
                    <h5>Modifier image Galerie</h5>
                </div>
            </header>
            <div class="main-content">
                <div class="card m-0">
                    <div class="card-body">
                        <form action="{{ route('admin.galerie.update', $galerie->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Image actuelle</label><br>
                                <img src="{{ asset($galerie->img) }}" style="max-width: 300px;" alt="Galerie Image">
                            </div>
                            <div class="form-group mt-3">
                                <label for="img">Nouvelle image (facultatif)</label>
                                <input type="file" name="img" id="img" class="form-control @error('img') is-invalid @enderror">
                                @error('img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
                            <a href="{{ route('admin.galerie.index') }}" class="btn btn-secondary mt-3">Retour</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
