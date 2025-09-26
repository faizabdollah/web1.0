@extends('layouts.admin')

@section('contentadmin')
<div class="app-wrap">
    @include('admin.header')
    <div class="app-container">
        @include('admin.sidebar')
        <div class="app-main">
            <header class="main-heading">
                <div class="container-fluid">
                    <h5>Ajouter une image à la Galerie</h5>
                </div>
            </header>
            <div class="main-content">
                <div class="card m-0">
                    <div class="card-body">
                        <form action="{{ route('admin.galerie.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" name="img[]" id="img" multiple class="form-control @error('img.*') is-invalid @enderror" required>
                                @error('img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            <a href="{{ route('admin.galerie.index') }}" class="btn btn-secondary">Retour</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
