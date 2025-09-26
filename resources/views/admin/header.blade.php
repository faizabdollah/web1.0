<header class="app-header">
    <div class="container-fluid">
        <div class="row gutters">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
                <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                    <i class="icon-menu5"></i>
                </a>
                <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                    <i class="icon-chevron-thin-left"></i>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-4">

            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
                <ul class="header-actions">
                    <li class="dropdown">
                        <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-notifications_none"></i>
                            <span class="count-label"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
                            <ul class="imp-notify">
                                <li>
                                    <div class="icon">W</div>
                                    <div class="details">
                                        <p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">J</div>
                                    <div class="details">
                                        <p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon secondary">R</div>
                                    <div class="details">
                                        <p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-person_outline"></i>
                            <span class="count-label red"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
                            <ul class="stats-widget">
                                <li>
                                    <h4> echo $row_Re_nu_visi_pv_head['hits']; </h4>
                                    <p>Clics sur Page Vitrine <span>PV<!-- +2% --></span></p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="87"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h4> echo $row_Re_nu_visi_ads_head['hits']; </h4>
                                    <p>Clics sur Annonce <span>Ads<!-- +39% --></span></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            <span class="sr-only">65% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                                <!-- li>
    <h4>2,219</h4>
    <p>Uploads <span class="text-secondary">-7%</span></p>
    <div class="progress">
             <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
              <span class="sr-only">42% Complete (success)</span>
             </div>
        </div>
    </li -->
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                            aria-haspopup="true">
                            <span style="font-size:30px;" class="icon-profile-male"></span>
                            <span class="user-name">$row_ses_headere['nom'];</span>
                            <i class="icon-chevron-small-down"></i>
                        </a>
                        <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                            <ul class="user-settings-list">
                                <li>
                                    <a href="profil.php">
                                        <div class="icon">
                                            <i class="icon-account_circle"></i>
                                        </div>
                                        <p>Profil</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="modifier_profil.php">
                                        <div class="icon red">
                                            <i class="icon-cog3"></i>
                                        </div>
                                        <p>Settings</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="../MA-shop/index.php">
                                        <div class="icon yellow">
                                            <i class="icon-schedule"></i>
                                        </div>
                                        <p>MA Shop</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="logout-btn">
                                <a href="{{ route('logout') }}"
                                class="btn btn-primary"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
