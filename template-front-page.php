<?php
/* 
Template Name: Landing Page
*/
?>

<?php get_header(); ?>
<?php define("IMAGEPATH", get_template_directory_uri()); ?>

<div class="container-responsive mt-5 mb-sm-5 frontpage-background">
<div class="row py-md-5">
	<div class="col-xs-1 col-md-2"></div>
	<div class="col-xs-10 col-md-8 text-center">
		<img src='<?php echo IMAGEPATH ?>/theme/images/logo.png'/>
	</div>
</div>
<div class="row py-md-5 pt-5">
<div class="col-xs-1 col-md-2"></div>
<div class="col-xs-10 col-md-8 text-center"><button type="button" class="btn btn-lg  btn-illarion w-75 text-primary font-weight-bold large">Download & Play</button></div>
<div class="col-xs-1 col-md-2"></div>
</div>
</div>

<div class="row no-gutters pt-md-5">
	<div class="col-12 pt-md-3">
		<div id="imageCarousel" class="frontcarousel">
			<!--<ol class="carousel-indicators d-none d-md-flex">
				<li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#imageCarousel" data-slide-to="1"></li>
				<li data-target="#imageCarousel" data-slide-to="2"></li>
			</ol>-->
			
					<div>	<img src="<?php echo IMAGEPATH ?>/theme/images/1.jpg" class="img-responsive"> </div>
					<div>	<img src="<?php echo IMAGEPATH ?>/theme/images/2.jpg" class="img-responsive"> </div>
					<div>	<img src="<?php echo IMAGEPATH ?>/theme/images/3.jpg" class="img-responsive"> </div>
					<div>	<img src="<?php echo IMAGEPATH ?>/theme/images/4.jpg" class="img-responsive"> </div>
					<div>	<img src="<?php echo IMAGEPATH ?>/theme/images/5.jpg" class="img-responsive"> </div>
					<div>	<img src="<?php echo IMAGEPATH ?>/theme/images/6.jpg" class="img-responsive"> </div>
					<div>	<img src="<?php echo IMAGEPATH ?>/theme/images/7.jpg" class="img-responsive"> </div>
						

<!--			<a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>-->

		</div>
	</div>
</div>

<div class="container-responsive mb-5">

<div class="row text-illarion">
	<div class="col-xs-12 col-md-8">
	<div class="mx-2 my-md-5">
	<h2>About Illarion</h2>
	<p>Illarion is a Massively Multiplayer Online Role Playing Game (MMORPG) created by voluntary developers. It is opensource and totally free. Illarion is available for over a decade offering a classical and hardcore gaming experience alongside with an isometric gameplay.</p>
	<p>Illarions design focuses on true role playing and interaction with other players. You wont be guided through the world or be locked inside of fixed class designs. Instead Illarion encourages the player to forge his own destiny and goals. The game features a skill-based leveling system, allowing the player to compell his own unique gaming experience.</p>
	</div>
	</div>
	<div class="col-md-4 text-right d-none d-md-block">
		<img class="img-responsive" src="<?php echo IMAGEPATH ?>/theme/images/dwarf.png"/>
	</div>
</div>

<div class="row pt-md-3 pb-3 text-illarion">
	<div class="col-md pt-3"><div class="huge-illarion text-center"><i class="fas fa-crown"></i></div><h2 class="text-center">Your Story</h2><div class="text-justify text-sm-center-only">A classless system, a large range of skills and an open, explorable word. Immersive yourself and let your character become what you want.</div></div>
	<div class="col-md pt-3"><div class="huge-illarion text-center"><i class="far fa-comment"></i></div><h2 class="text-center">Roleplay</h2><div class="text-justify text-sm-center-only">Your character and his interactions with others are the most important parts of the game. These actions shape the world.</div></div>
	<div class="col-md pt-3"><div class="huge-illarion text-center"><i class="fas fa-dice"></i></div><h2 class="text-center">Oldschool</h2><div class="text-justify text-sm-center-only">Classical isometric gameplay, slowpaced and a hardcore gaming experience, while still using modern technologies.</div></div>
</div>

</div>





</div><!-- /.container-responsive -->

<?php get_footer(); ?>
