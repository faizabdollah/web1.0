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
											<a href="{{ route('admin') }}">Modifier mes infos</a>
										</li>
                                        <li>
                                            <a href="{{ route('admin.mes-produits') }}">Mes produits</a>
                                        </li>
                                        <li>
									    	<a href='ajouter_produit_sv.php'>Ajouter produit</a>
									    </li>
                                        <li>
									    	<a href='mes_blog_sv.php'>Mes blogs</a>
									    </li>
                                        <li>
									    	<a href='ajouter_blog_sv.php'>Ajouter blog</a>
									    </li>
									    <li>
									    	<a href='mes_categorie_sv.php'>Mes categorie</a>
									    </li>
									    <li>
									    	<a href='mes_sous_categorie_sv.php'>Mes sous categorie</a>
									    </li>
										<li>
									    	<a href='slider_affi_sv.php'>Mes sliders</a>
									    </li>
										<li>
									    	<a href='slider_ajou_sv.php'>Ajouter slider</a>
									    </li>
										<li>
											<a href='modifier_image_logo.php'>Modifier Logo</a>
										</li>
										<li>
											<a href='modifier_image_logo2.php'>Modifier Logo 2</a>
										</li>
                                        <li>
											<a href='modifier_image_logo_pied_page.php'>Modifier Logo pied page</a>
										</li>
										<li>
									    	<a href='galerie_affi_sv.php'>Images Galerie</a>
									    </li>
										<li>
									    	<a href='galerie_ajou_sv.php'>Ajouter img Galerie</a>
									    </li>
										<li>
									    	<a href='modif_img_sv.php'>Modifier img Site Vitrine</a>
									    </li>
										<li>
									    	<a href='modifier_boutton_sv.php'>Modifier Bouttons SV</a>
									    </li>
										<li>
									    	<a href='modifier_meta_sv.php'>Modifier Meta SV</a>
									    </li>
										<li>
									    	<a href='modifier_pixel_sv.php'>Modifier pixel SV</a>
									    </li>
										<li>
									    	<a href='modifier_text_sv_fr.php'>Modifier Text SV FR</a>
									    </li>
										<li>
									    	<a href='modifier_text_sv_en.php'>Modifier Text SV EN</a>
									    </li>
										<li>
									    	<a href='modifier_text_sv_ar.php'>Modifier Text SV AR</a>
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
											<a href='modifier_mot_passe.php'>Modifier mot passe</a>
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
