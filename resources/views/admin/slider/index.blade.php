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
                                    <i class="icon-laptop_windows"></i>
                                </div>
                                <div class="page-title">
                                    <h5>Sliders</h5>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="right-actions">
                                    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary float-right">
                                        <i class="icon-plus"></i> Ajouter Slider
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="main-content">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card m-0">
                                <div class="card-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sliders as $slider)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset($slider->img) }}" style="width:200px;">
                                                    </td>
                                                    <td>{{ $slider->nom }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.sliders.edit', $slider->id) }}">
                                                            <button class="btn btn-outline-info btn-rounded">Modifier</button>
                                                        </a>
                                                        <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" style="display:inline;" class="delete-slider-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-outline-danger btn-rounded delete-slider">Supprimer</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.delete-slider').forEach(function(button) {
        button.addEventListener('click', function() {
            Swal.fire({
                title: 'Supprimer ce slider ?',
                text: "Cette action est irréversible !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Oui, supprimer',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.closest('form').submit();
                }
            });
        });
    });
});
</script>
