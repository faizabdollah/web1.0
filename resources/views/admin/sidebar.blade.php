<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-profile -->
						<div class="user-profile">
					<span style="font-size:90px;" class="icon-profile-male" ></span>
						 <h6 class="profile-name">{{ \App\Models\Fournisseur::where('mail', \Illuminate\Support\Facades\Auth::user()->email)->first()->nom ?? \Illuminate\Support\Facades\Auth::user()->name ?? 'Admin' }}</h6>
						</div>
						<!-- END .user-profile -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">

								<li>
									<a href="mes_contact.php">
										<span class="has-icon">
											<i class="icon-contacts"></i>
										</span>
										<span class="nav-title">Mes Contacts</span>
									</a>
								</li>

								<li>
									<a href="form_eco.php">
										<span class="has-icon">
											<i class="icon-contacts"></i>
										</span>
										<span class="nav-title">Form_eco</span>
									</a>
								</li>

								<li class="menu-header">
									-- Gestion Site Vitrine
								</li>
								<li class="selected">
								    <a href="#" class="has-arrow" aria-expanded="false">
									<span class="has-icon">
										<i class="icon-laptop_windows"></i>
									</span>
									<span class="nav-title">SETTING</span>
									</a>
									<ul aria-expanded="false" class="collapse in">

										<li>
									    	<a href="/" target="_blank">Consulter mon Site</a>
									    </li>

										<li>
											<a href="{{ route('admin.updateinfo') }}">Modifier mes infos</a>
										</li>
                                        <li>
                                            <a href="{{ route('admin.produits.index') }}">Mes produits</a>
                                        </li>
                                        <li>
									    	<a href='{{ route('admin.produits.create') }}'>Ajouter produit</a>
									    </li>
									    <li>
									        <a href="{{ route('admin.categories.index') }}">Mes catégories</a>
									    </li>
										<li>
									    	<a href="{{ route('admin.sliders.index') }}">Mes sliders</a>
									    </li>
										<li>
									    	<a href="{{ route('admin.sliders.create') }}">Ajouter slider</a>
									    </li>
										<li>
											<a href='{{ route('admin.logo.edit') }}'>Modifier Logo</a>
										</li>
										<li>
										    <a href="{{ route('admin.galerie.index') }}">Images Galerie</a>
										</li>
										<li>
										    <a href="{{ route('admin.galerie.create') }}">Ajouter img Galerie</a>
										</li>
										<li>
									    	<a href='{{ route('admin.Meta.edit', \App\Models\Meta::first()->id) }}'>Modifier Meta SV</a>
									    </li>
										<li>
									    	<a href='{{ route('admin.Pixel.edit', \App\Models\Pixel::first()->id) }}'>Modifier pixel SV</a>
									    </li>
										<li>
											<a href="{{ route('admin.textabouts.edit', \App\Models\text_about::first()->id) }}">Modifier TextAbout</a>
										</li>
										<li>
											<a href="{{ route('admin.textcontacts.edit', \App\Models\text_contact::first()->id) }}">Modifier TextContact</a>
										</li>
										<li>
											<a href="{{ route('admin.imageabouts.edit', \App\Models\image_about::first()->id) }}">Modifier ImageAbout</a>
										</li>
										<li>
											<a href="{{ route('admin.img-sv.edit') }}">Modifier Images SV</a>
										</li>
										<li>
											<a href="{{ route('admin.text-sv.index') }}">Gestion Textes SV</a>
										</li>
										<li>
										   	<a href='modif_res_soc.php'>Modifier réseaux sociaux</a>
										   </li>
										<li>
									    	<a href='modif_car_situ.php'>Modifier carte situation</a>
									    </li>
									</ul>
								</li>

                                <li class="menu-header">
									-- Info session
								</li>
								<li>
									<a href="#" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-lock_outline"></i>
										</span>
										<span class="nav-title">Authentication</span>
									</a>
									<ul aria-expanded="false" class="collapse in">
										            <li>
											<a href='{{ route("admin.password.change") }}'>Modifier mot passe</a>
										</li>
									</ul>
								</li>
								<br><br>
							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
