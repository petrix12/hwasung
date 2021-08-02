              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="index.php"><img width='165' height='76' src='images/logo-light-165x76.png' alt='HWASUNG THERMO M&Eacute;XICO S.A. de C.V.'/></a><a class="rd-navbar-mobile-search-toggle mdi" data-custom-toggle="rd-navbar-search-mobile" href="#"><span></span></a></div>
                      <!--RD Navbar Mobile Search-->
                      <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="resultados-busqueda.php" method="GET">
                          <div class="form-group">
                            <label class="form-label" for="rd-navbar-mobile-search-form-input">Buscar</label>
                            <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off"/>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="<?php if ($menu_activo==1) echo 'active'; ?>"><a href="index.php">Inicio</a></li>
                      <li class="<?php if ($menu_activo==2) echo 'active'; ?>"><a href="historia.php">Historia</a></li>
                      <li class="<?php if ($menu_activo==3) echo 'active'; ?>"><a href="productos.php">Productos</a></li>
                      <li class="<?php if ($menu_activo==4) echo 'active'; ?>"><a href="Beneficios-y-Ventajas-Hwa-Sung-Thermo.pdf">Beneficios y Ventajas</a></li>
<?php /*                      
                      <li class="tabs-nav <?php if ($menu_activo==4) echo 'active'; ?>"><a href="#">Comparativos</a>
                      	<ul class="rd-navbar-dropdown">
                          <li><a href="comparativo_vs_Carrier.php#0">Comparativo vs Carrier</a>
                          </li>
                          <li><a href="comparativo_vs_ThermoKing.php#1">Comparativo vs ThermoKing</a>
                          </li>
                        </ul>
                      </li>
*/ ?>                      
                      <li class="<?php if ($menu_activo==5) echo 'active'; ?>"><a href="video.php">Video</a</li>
                      <li class="<?php if ($menu_activo==6) echo 'active'; ?>"><a href="contacto.php">Contacto</a></li>
                    </ul>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="resultados-busqueda.php" data-search-live="rd-search-results-live" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Buscar</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                      <div class="rd-search-results-live" id="rd-search-results-live"></div>
                    </div>
                  </form>
                </div>
              </div>