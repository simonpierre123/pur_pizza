

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Services</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    

    <?php include "incorporer_service_from.php"; ?>
	
   	<?php include "incorporer_produits_commande.php"; 
		$incorporer_produits_commande=true; //sera pris en compte dans incorporer_images.php et indiquera si la requête de récupération du service doit etre limité ou pas
		$incorporer_services_size=3; // indiqué le nombre limité d'image de la gallerie à afficher

	
	
	?>
	
