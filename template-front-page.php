<?php
/* 
Template Name: Landing Page
*/
?>

<?php get_header(); ?>
<?php define("IMAGEPATH", get_template_directory_uri()); ?>

<div class="container-responsive mt-5 mb-5">
<div class="row">
	<div class="col-xs-1 col-md-2"></div>
	<div class="col-xs-10 col-md-8 text-left">
		<img class="pl-md-5" src='<?php echo IMAGEPATH ?>/theme/images/logo.png'/>
	</div>
</div>
<div class="row">
<div class="col-xs-1 col-md-3"></div>
<div class="col-xs-5 col-md-3"><button type="button" class="btn btn-illarion-top w-100 text-primary font-weight-bold large">Download</button></div>
<div class="col-xs-5 col-md-3"><button type="button" class="btn btn-illarion-top w-100 text-primary font-weight-bold large">Register</button></div>
<div class="col-xs-1 col-md-3"></div>
</div>
</div>

<div class="row row-border no-gutters">
	<div class="col-12 paperback-small">
		<div id="imageCarousel" class="carousel slide" data-interval="5000" data-ride="carousel" data-pause="hover" data-wrap="true">
			<ol class="carousel-indicators d-none d-md-block">
				<li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#imageCarousel" data-slide-to="1"></li>
				<li data-target="#imageCarousel" data-slide-to="2"></li>
			</ol>
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-xs-12 col-md-4">
							<img src="<?php echo IMAGEPATH ?>/theme/images/1.jpg" class="img-responsive">
						</div>
						<div class="col-md-4 d-none d-md-block">
							<img src="<?php echo IMAGEPATH ?>/theme/images/2.jpg" class="img-responsive">
						</div>
						<div class="col-md-4 d-none d-md-block">
							<img src="<?php echo IMAGEPATH ?>/theme/images/3.jpg" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-xs-12 col-md-4">
							<img src="<?php echo IMAGEPATH ?>/theme/images/4.jpg" class="img-responsive">
						</div>
						<div class="col-md-4 d-none d-md-block">
							<img src="<?php echo IMAGEPATH ?>/theme/images/5.jpg" class="img-responsive">
						</div>
						<div class="col-md-4 d-none d-md-block">
							<img src="<?php echo IMAGEPATH ?>/theme/images/6.jpg" class="img-responsive">
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<div class="row">
						<div class="col-xs-12 col-md-4">
							<img src="<?php echo IMAGEPATH ?>/theme/images/7.jpg" class="img-responsive">
						</div>
						<div class="col-md-4 d-none d-md-block">
							<img src="<?php echo IMAGEPATH ?>/theme/images/3.jpg" class="img-responsive">
						</div>
						<div class="col-md-4 d-none d-md-block">
							<img src="<?php echo IMAGEPATH ?>/theme/images/5.jpg" class="img-responsive">
						</div>
					</div>
				</div>
			</div>

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

<div class="container-responsive mt-5 mb-5">

<div class="row py-md-4 my-md-5">

</div>

<div class="row text-illarion">
	<div class="col-xs-12 col-md-8 my-auto paperback">
	<div class="mx-2 my-5">
	<h2>About Illarion</h2>
	<p>Illarion is a Massively Multiplayer Online Role Playing Game (MMORPG) created by voluntary developers. It is opensource and totally free. Illarion is available for over a decade offering a classical and hardcore gaming experience alongside with an isometric gameplay.</p>
	<p>Illarions design focuses on true role playing and interaction with other players. You wont be guided through the world or be locked inside of fixed class designs. Instead Illarion encourages the player to forge his own destiny and goals. The game features a skill-based leveling system, allowing the player to compell his own unique gaming experience.</p>
	</div>
	</div>
	<div class="col-md-4 text-right d-none d-md-block">
		<img class="img-responsive" src="<?php echo IMAGEPATH ?>/theme/images/dwarf.png"/>
	</div>
</div>

</div>





</div><!-- /.container-responsive -->

<?php get_footer(); ?>
