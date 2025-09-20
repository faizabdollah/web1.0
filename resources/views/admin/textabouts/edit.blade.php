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
                            <div class="page-title">
                                <h5>Modifier TextAbout</h5>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="right-actions">
                                <a href="{{ route('about') }}" target="_blank" class="btn btn-secondary float-right">
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
                                <h3>Modifier TextAbout</h3>
                            </div>
                            <form action="{{ route('admin.textabouts.update', $text_about->id) }}" method="POST">
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

                                    @for($i = 1; $i <= 30; $i++)
                                        <div class="form-group row gutters">
                                            <label for="text{{ $i }}" class="col-sm-3 col-form-label">Text{{ $i }}:</label>
                                            <div class="col-sm-6">
                                                <textarea
                                                    name="text{{ $i }}"
                                                    id="text{{ $i }}"
                                                    class="form-control"
                                                    rows="2"
                                                >{{ old("text{$i}", $text_about->{"text{$i}"}) }}</textarea>
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
