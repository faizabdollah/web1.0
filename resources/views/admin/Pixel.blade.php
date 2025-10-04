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
										<h5>Modifier Pixels </h5>
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
                            <form action="{{ route('admin.Pixel.update', $pixel->id) }}" method="POST" name="up_pixel_sv" id="up_pixel_sv">
                            @csrf
                            <div class="card-body">

                                <div class="form-group row gutters">
                                    <label for="pixel" class="col-sm-3 col-form-label">Pixel 1:</label>
                                    <div class="col-sm-6">
                                        <textarea id="pixel" name="pixel" class="form-control mx-sm-3" rows="3">{!! htmlentities($pixel->pixel) !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="pixel2" class="col-sm-3 col-form-label">Pixel 2:</label>
                                    <div class="col-sm-6">
                                        <textarea id="pixel2" name="pixel2" class="form-control mx-sm-3" rows="3">{!! htmlentities($pixel->pixel2) !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="pixel3" class="col-sm-3 col-form-label">Pixel 3:</label>
                                    <div class="col-sm-6">
                                        <textarea id="pixel3" name="pixel3" class="form-control mx-sm-3" rows="3">{!! htmlentities($pixel->pixel3) !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="pixel4" class="col-sm-3 col-form-label">Pixel 4:</label>
                                    <div class="col-sm-6">
                                        <textarea id="pixel4" name="pixel4" class="form-control mx-sm-3" rows="3">{!! htmlentities($pixel->pixel4) !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="pixel5" class="col-sm-3 col-form-label">Pixel 5:</label>
                                    <div class="col-sm-6">
                                        <textarea id="pixel5" name="pixel5" class="form-control mx-sm-3" rows="3">{!! htmlentities($pixel->pixel5) !!}</textarea>
                                    </div>
                                </div>





                                <div class="form-group row gutters">
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id" id="id" value="{{ $pixel->id }}">
                                        <br>
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </div>

                            </div>
                                <input type="hidden" name="MM_update" value="up_pixel_sv">
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
