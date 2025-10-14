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
                                <i class="icon-image"></i>
                            </div>
                            <div class="page-title">
                                <h5>Modifier les Images SV</h5>
                                <h6 class="sub-heading">Gestion des images du système SV</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="right-actions">
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary float-right" data-toggle="tooltip" data-placement="left" title="Retour">
                                    <i class="icon-arrow-left"></i>
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
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Modifier les Images SV</h3>
                            </div>
                            <form action="{{ route('admin.img-sv.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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

                                    <!-- About Images -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Images About</h4>
                                            <!-- About 1 -->
                                            <div class="form-group">
                                                <label>About 1:</label>
                                                @if($imgSv->about1)
                                                    <div class="mb-2">
                                                        <img src="{{ asset($imgSv->about1) }}" alt="About 1" style="max-width: 200px; border: 1px solid #ddd; border-radius: 5px;">
                                                    </div>
                                                @endif
                                                <input type="file" name="about1" class="form-control-file" accept="image/*">
                                            </div>

                                            <!-- About 2 -->
                                            <div class="form-group">
                                                <label>About 2:</label>
                                                @if($imgSv->about2)
                                                    <div class="mb-2">
                                                        <img src="{{ asset($imgSv->about2) }}" alt="About 2" style="max-width: 200px; border: 1px solid #ddd; border-radius: 5px;">
                                                    </div>
                                                @endif
                                                <input type="file" name="about2" class="form-control-file" accept="image/*">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <h4>Images Produit</h4>
                                            <!-- Produit -->
                                            <div class="form-group">
                                                <label>Produit:</label>
                                                @if($imgSv->produit)
                                                    <div class="mb-2">
                                                        <img src="{{ asset($imgSv->produit) }}" alt="Produit" style="max-width: 200px; border: 1px solid #ddd; border-radius: 5px;">
                                                    </div>
                                                @endif
                                                <input type="file" name="produit" class="form-control-file" accept="image/*">
                                            </div>

                                            <!-- Detail Produit -->
                                            <div class="form-group">
                                                <label>Détail Produit:</label>
                                                @if($imgSv->det_produit)
                                                    <div class="mb-2">
                                                        <img src="{{ asset($imgSv->det_produit) }}" alt="Detail Produit" style="max-width: 200px; border: 1px solid #ddd; border-radius: 5px;">
                                                    </div>
                                                @endif
                                                <input type="file" name="det_produit" class="form-control-file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Images Contact</h4>
                                            <!-- Contact 1 -->
                                            <div class="form-group">
                                                <label>Contact 1:</label>
                                                @if($imgSv->contact1)
                                                    <div class="mb-2">
                                                        <img src="{{ asset($imgSv->contact1) }}" alt="Contact 1" style="max-width: 200px; border: 1px solid #ddd; border-radius: 5px;">
                                                    </div>
                                                @endif
                                                <input type="file" name="contact1" class="form-control-file" accept="image/*">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <small class="form-text text-muted">Formats acceptés: JPG, PNG, GIF. Taille maximale: 2MB par image.</small>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Mettre à jour les images</button>
                                        <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}">Annuler</a>
                                    </div>
                                </div>
                            </form>

                            <!-- Delete Forms (outside main form to avoid conflicts) -->
                            <div class="mt-4">
                                <h4>Supprimer des images</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        @if($imgSv->about1)
                                            <form action="{{ route('admin.img-sv.delete', 'about1') }}" method="POST" style="display: inline;" onsubmit="return confirm('Supprimer l\'image About 1 ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="icon-trash"></i> Supprimer About 1
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if($imgSv->about2)
                                            <form action="{{ route('admin.img-sv.delete', 'about2') }}" method="POST" style="display: inline;" onsubmit="return confirm('Supprimer l\'image About 2 ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="icon-trash"></i> Supprimer About 2
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if($imgSv->produit)
                                            <form action="{{ route('admin.img-sv.delete', 'produit') }}" method="POST" style="display: inline;" onsubmit="return confirm('Supprimer l\'image Produit ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="icon-trash"></i> Supprimer Produit
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if($imgSv->det_produit)
                                            <form action="{{ route('admin.img-sv.delete', 'det_produit') }}" method="POST" style="display: inline;" onsubmit="return confirm('Supprimer l\'image Détail Produit ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="icon-trash"></i> Supprimer Détail Produit
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-3">
                                        @if($imgSv->contact1)
                                            <form action="{{ route('admin.img-sv.delete', 'contact1') }}" method="POST" style="display: inline;" onsubmit="return confirm('Supprimer l\'image Contact 1 ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="icon-trash"></i> Supprimer Contact 1
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
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
@endsection
