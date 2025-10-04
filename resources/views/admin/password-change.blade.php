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
										<i class="icon-lock_outline"></i>
									</div>
									<div class="page-title">
										<h5>Modifier le mot de passe</h5>
										<h6 class="sub-heading"></h6>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="right-actions">
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
                            @if (session('status') === 'password-updated')
                                <div class="alert alert-success">
                                    Mot de passe modifié avec succès.
                                </div>
                            @endif
                            <form action="{{ route('password.update') }}" method="POST" class="form-horizontal">
                            @csrf
                            @method('put')
                            <div class="card-body">

                                <div class="form-group row gutters">
                                    <label for="current_password" class="col-sm-3 col-form-label">Mot de passe actuel :</label>
                                    <div class="col-sm-6">
                                        <input type="password" id="current_password" name="current_password" class="form-control mx-sm-3" required>
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="show_current_password">
                                            <label class="form-check-label" for="show_current_password">
                                                Afficher le mot de passe
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="password" class="col-sm-3 col-form-label">Nouveau mot de passe :</label>
                                    <div class="col-sm-6">
                                        <input type="password" id="password" name="password" class="form-control mx-sm-3" required>
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="show_new_password">
                                            <label class="form-check-label" for="show_new_password">
                                                Afficher le mot de passe
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <label for="password_confirmation" class="col-sm-3 col-form-label">Confirmer le mot de passe :</label>
                                    <div class="col-sm-6">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control mx-sm-3" required>
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="show_confirm_password">
                                            <label class="form-check-label" for="show_confirm_password">
                                                Afficher le mot de passe
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row gutters">
                                    <div class="col-sm-10">
                                        <br>
                                        <button type="submit" class="btn btn-primary">Modifier le mot de passe</button>
                                    </div>
                                </div>

                            </div>
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

    <script>
        // Toggle password visibility for current password
        document.getElementById('show_current_password').addEventListener('change', function() {
            var passwordField = document.getElementById('current_password');
            passwordField.type = this.checked ? 'text' : 'password';
        });

        // Toggle password visibility for new password
        document.getElementById('show_new_password').addEventListener('change', function() {
            var passwordField = document.getElementById('password');
            passwordField.type = this.checked ? 'text' : 'password';
        });

        // Toggle password visibility for confirm password
        document.getElementById('show_confirm_password').addEventListener('change', function() {
            var passwordField = document.getElementById('password_confirmation');
            passwordField.type = this.checked ? 'text' : 'password';
        });
    </script>
@endsection
