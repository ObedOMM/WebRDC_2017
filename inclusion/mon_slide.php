<style>
#slideshow {
	position: relative;
	width: 640px;
	height: 310px;
	padding: 13px;
	margin: 0 auto 2em;
//	border: 1px solid #ddd;
	border: 0px solid #ddd;
	background:	#FFF;
	
	/* CSS3 effects */
	
	
//	background: linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
	background: linear-gradient(#1f9, #000 20%, #EEE 80%, #f4f);

	
	border-radius: 15px 15px 15px 15px;
//	box-shadow: 0 0 3px rgba(0,0,0, 0.2);
	box-shadow: 2px 0px 10px black;
}
 
/* avanced box-shadow
 * tutorial @
 * https://www.creativejuiz.fr/blog/les-tutoriels/ombre-avancees-avec-css3-et-box-shadow 
*/

#slideshow:before,
#slideshow:after {
	position: absolute;
	bottom:16px;
	z-index: -10;
	width: 50%;
	height: 20px;
	content: " ";
	background: rgba(0,0,0,0.1);
	border-radius: 50%;
	box-shadow: 0 0 3px rgba(0,0,0, 0.4), 0 20px 10px rgba(0,0,0, 0.7);
}



#slideshow:before {
	transform: rotate(4deg);
	left:325px;
}
#slideshow:after {

	transform: rotate(-4deg);
}



/* gestion des dimensions et débordement du conteneur */
#slideshow .container {
	position:relative;
	width: 640px;
	height: 310px;
	overflow: hidden;
}
	
/* on prévoit un petit espace gris pour la timeline */
#slideshow .container:after {
	position:absolute;
	bottom: 0; left:0;
	content: " ";
	width: 100%;
	height: 2px;
	background: #999;
}

/* 
   le conteneur des slides
   en largeur il fait 100% x le nombre de slides
*/


#slideshow .slider {
	position: absolute;
	left:0; top:0;
	width: 500%;
	height: 310px;
}

/* annulation des marges sur figure 		POUR REMPLIR LE BORDER PRINCIPALE*/
#slideshow figure {
	position:relative;
	display:inline-block;
	padding:0; margin:0;
}

/* petit effet de vignette sur les images */
#slideshow figure:after {
	position: absolute;
	display:block;
	content: " ";
	top:0; left:0;
	width: 100%; height: 100%;
	box-shadow: 0 0 65px rgba(0,0,0, 0.5) inset;
}

/* styles de nos légendes */
#slideshow figcaption {
	position:absolute;
	left:0; right:0; bottom: 5px;
	padding: 20px;
	margin:0;
	border-top: 1px solid rgb(225,225,225);
	text-align:left;
	letter-spacing: 0.05em;
	word-spacing: 0.05em;
	font-family: Georgia, Times, serif;
	background: #fff;
	background: rgba(255,255,255,0.7);
	color: #333;
//	text-shadow: -1px -1px 0 rgba(255,255,255,0.3);
	text-shadow: 1px 1px 15px red;
}





 
/* fonction d'animation, n'oubliez pas de prefixer ! */
@keyframes slider {
//	0%, 20%, 100%	{ left: 0 }
//	25%, 45%		{ left: -100% }
//	50%, 70%		{ left: -200% }
//	75%, 95%		{ left: -300% }

//	0%, 10%, 100%	{ left: 0 }
//	20%, 40%		{ left: -100% }
//	40%, 60%		{ left: -200% }
//	60%, 80%		{ left: -300% }
//	80%, 90%		{ left: -400% }
	
	
	0%, 10%, 100%	{ left: 0 }
	20%, 30%		{ left: -100% }
	40%, 50%		{ left: -200% }
	60%, 70%		{ left: -300% }
	80%, 90%		{ left: -400% }
	
	
	

	
}


/* complétez le sélecteur : */
#slideshow .slider {
									/* ... avec la propriété animation */
	animation: slider 32s infinite;
}


</style>

<section id="slideshow">
		
	<div class="container">
		<div class="c_slider"></div>
		<div class="slider">
			<figure>
				<img src="images/lyceespersp.jpg" alt="Lycée Gérard NKWILI de kinshasa" width="640" height="310" />
				<figcaption>Lycée Gérard NKWILI</figcaption>

			</figure><!--
			--><figure>
				<img src="images/lycee3.jpg" alt="" width="640" height="310" />
				<figcaption>La discipline et l'ordre</figcaption>
			</figure><!--
			--><figure>
				<img src="images/lycee5.jpg" alt="" width="640" height="310" />
				<figcaption> Buzoba ya bana mikié</figcaption>

			</figure><!--
			--><figure>
				<img src="images/lyceeBB.jpg" alt="Nkengia Loola NINITHA au lycée Gerard NKWILI" width="640" height="310" />
				<figcaption>Ninitha loola en personne </figcaption>
			</figure><!--
			--><figure>
				<img src="images/lllllllllll.png" alt="Obed OMM au brézil" width="640" height="310" />
				<figcaption>Ajout des autres photos </figcaption>
			</figure>
 
		</div>
	</div>
		
	<span id="timeline"></span>
</section>
