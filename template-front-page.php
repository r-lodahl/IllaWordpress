<?php
/* 
Template Name: Landing Page
*/
?>

<?php get_header(); ?>
<?php define("IMAGEPATH", get_template_directory_uri()); ?>

<div class="container-responsive mt-5 mb-5">
<div class="row">
	<div class="col-2"></div>
	<div class="col-8 text-left">
		<img class="pl-5" src='<?php echo IMAGEPATH ?>/theme/images/logo.png'/>
	</div>
</div>
<div class="row">
<div class="col-3"></div>
<div class="col-3"><button type="button" class="btn btn-illarion-top w-100 text-primary font-weight-bold large">Download</button></div>
<div class="col-3"><button type="button" class="btn btn-illarion-top w-100 text-primary font-weight-bold large">Register</button></div>
<div class="col-3"></div>
</div>
</div>

<div class="row row-border no-gutters">
<!--
	<div class="col-3 no-padding">
		<img class="img-responsive" src='<?php echo IMAGEPATH ?>/theme/images/1.jpg'/>
	</div>
	<div class="col-3 no-padding">
		<img class="img-responsive" src='<?php echo IMAGEPATH ?>/theme/images/2.jpg'/>
	</div>
	<div class="col-3 no-padding">
		<img class="img-responsive" src='<?php echo IMAGEPATH ?>/theme/images/3.jpg'/>
	</div>
	<div class="col-3 no-padding">
		<img class="img-responsive" src='<?php echo IMAGEPATH ?>/theme/images/4.jpg'/>
	</div>
-->

<div id="imageCarousel" class="carousel slide" data-interval="2000" data-ride="carousel" data-pause="hover" data-wrap="true">
	<ol class="carousel-indicators">
		<li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#imageCarousel" data-slide-to="1"></li>
		<li data-target="#imageCarousel" data-slide-to="2"></li>
	</ol>
	
	<div class="carousel-inner">
		<div class="item active">
			<div class="row">
				<div class="col-xs-4">
					<img src="<?php echo IMAGEPATH ?>/theme/images/1.jpg" class="img-responsive">
					<div class="carousel-caption">
						<h3>Bild1</h3>
						<p>Ein Bildbeschreibung</p>
					</div>
				</div>
				<!-- http://csharp-video-tutorials.blogspot.com/2016/08/bootstrap-multi-column-carousel.html -->



</div>

<div class="container-responsive mt-5 mb-5">

<div class="row">
	<div class="col-4">
	A
	</div>
	<div class="col-4">
	A
	</div>
	<div class="col-4">
	A
	</div>
</div>

<div class="row text-white">
	<div class="col-8 my-auto paperback">
	<div class="mx-2 my-5">
	<h2>About Illarion</h2>
	<p>Illarion is a Massively Multiplayer Online Role Playing Game (MMORPG) created by voluntary developers. It is opensource and totally free. Illarion is available for over a decade offering a classical and hardcore gaming experience alongside with an isometric gameplay.</p>
	<p>Illarions design focuses on true role playing and interaction with other players. You wont be guided through the world or be locked inside of fixed class designs. Instead Illarion encourages the player to forge his own destiny and goals. The game features a skill-based leveling system, allowing the player to compell his own unique gaming experience.</p>
	</div>
	</div>
	<div class="col-4">
		<img class="img-responsive" src="<?php echo IMAGEPATH ?>/theme/images/stock2.png"/>
	</div>
</div>

</div>





</div><!-- /.container-responsive -->

<?php get_footer(); ?>
