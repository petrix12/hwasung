<?php

function fecha(){ 
	$mes = date("n"); 
	$mesArray = array(
		 1 => "Enero", 
		 2 => "Febrero", 
		 3 => "Marzo", 
		 4 => "Abril", 
		 5 => "Mayo", 
		 6 => "Junio", 
		 7 => "Julio", 
		 8 => "Agosto", 
		 9 => "Septiembre", 
		 10 => "Octubre", 
		 11 => "Noviembre", 
		 12 => "Diciembre" 
	 ); 
	$semana = date("D"); 
	$semanaArray = array( 
		"Mon" => "Lunes", 
		"Tue" => "Martes", 
		"Wed" => "Mi\&eacute;rcoles", 
		"Thu" => "Jueves", 
		"Fri" => "Viernes", 
		"Sat" => "S\&aacute;bado", 
		"Sun" => "Domingo", 
	); 
	$mesReturn = $mesArray[$mes]; 
	$semanaReturn = $semanaArray[$semana]; 
	$dia = date("d"); 
	$anio = date ("Y"); 
	return $semanaReturn." ".$dia." de ".$mesReturn." de ".$anio; }

?>

      <!-- Page Footer-->
      <footer class="section-60 page-footer bg-dark-blue section-skew">
        <div class="skew-block"></div>
        <div class="shell">

            <div class="range range-xs-center range-sm-top">
		            <div class="cell-xs-10 cell-md-6 text-md-center cell-md-push-1 offset-top-50 offset-md-top-0">
		              <img border='0' src='images/garantia.png' width="150" height="160" />
		            </div>
		            
		            <div class="cell-xs-10 cell-md-6 text-md-left cell-md-push-1 offset-top-50 offset-md-top-0">
		              <!--Footer brand--><a href="index.html"><img width='164' height='76' src='images/logo-light-165x76.png' alt='HWASUNG THERMO M&Eacute;XICO S.A. de C.V.'/></a>
		              <div class="offset-top-30">
		                <ul class="list-inline list-inline-dark">
		              <li><a class="icon icon-xxs fa-facebook" href="https://www.facebook.com/HWASUNGTHERMOMEXICOSADECV" target="_blank" title="S&iacute;ganos en Facebook"></a></li>
		<?php /*              
		              <li><a class="icon icon-xxs fa-twitter" href="#"></a></li>
		              <li><a class="icon icon-xxs fa-pinterest" href="#"></a></li>
		              <li><a class="icon icon-xxs fa-vimeo" href="#"></a></li>
		              <li><a class="icon icon-xxs fa-google" href="#"></a></li>
		              <li><a class="icon icon-xxs fa-rss" href="#"></a></li>
		*/ ?>              
		                </ul>
		              </div>
		              	<div class="offset-md-top-30 offset-top-20">
		                	<p class="text-dark">&copy; <span id="copyright-year"></span> <strong><?=str_replace('\\','',fecha());?></strong></p>
				        </div>
		            </div>
            </div>
          
        </div>
      </footer>

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Cerrar (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Compartir"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Anterior (flecha izquierda)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Siguiente (flecha derecha)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"> </script>       
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-22904564-36"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-22904564-36');
		</script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             