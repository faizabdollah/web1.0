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
										<h5>Modifier Metas </h5>
										<h6 class="sub-heading"></h6>
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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
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
                            <form action="{{ route('admin.Meta.update', $meta->id) }}" method="POST" name="up_meta_sv" id="up_meta_sv">
                            @csrf
                            <div class="card-body">

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta titre :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="titre" name="titre"  value="{{ $meta->titre }}" class="form-control mx-sm-3" >
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta titre EN:</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="titre_en" name="titre_en"  value="{{ $meta->titre_en }}" class="form-control mx-sm-3" >
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta description :</label>
                                    <div class="col-sm-6">
                                        <textarea type="text" rows="4" id="description" name="description" class="form-control mx-sm-3" >{{ $meta->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta description EN:</label>
                                    <div class="col-sm-6">
                                        <textarea type="text" rows="4" id="description_en" name="description_en" class="form-control mx-sm-3" >{{ $meta->description_en }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta keywords :</label>
                                    <div class="col-sm-6">
                                        <textarea type="text" rows="4" id="keywords" name="keywords" class="form-control mx-sm-3" >{{ $meta->keywords }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta language :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="language" name="language"  value="{{ $meta->language }}" class="form-control mx-sm-3" >
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta subject :</label>
                                    <div class="col-sm-6">
                                        <textarea type="text" rows="3" id="subject" name="subject" class="form-control mx-sm-3" >{{ $meta->subject }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta robots :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="robots" name="robots"  value="{{ $meta->robots }}" class="form-control mx-sm-3" >
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta author :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="author" name="author"  value="{{ $meta->author }}" class="form-control mx-sm-3" >
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta rating :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="rating" name="rating"  value="{{ $meta->rating }}" class="form-control mx-sm-3" >
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta abstract :</label>
                                    <div class="col-sm-6">
                                        <textarea type="text" rows="4" id="abstract" name="abstract" class="form-control mx-sm-3" >{{ $meta->abstract }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta revisit :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="revisit" name="revisit"  value="{{ $meta->revisit }}" class="form-control mx-sm-3" >
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="nom" class="col-sm-3 col-form-label">Meta langue :</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="langue" name="langue"  value="{{ $meta->langue }}" class="form-control mx-sm-3" >
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id" id="id" value="{{ $meta->id }}">
                                        <br>
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </div>

                            </div>
                                <input type="hidden" name="MM_update" value="up_meta_sv">
                            </form>
                        </div>
                    </div>
                    <br><br>
                </div>
                <!-- END: .main-content -->
            </div>
            <!-- END: .app-main -->
        </div>
        <!-- END: .app-main -->
    </div>
@endsection
