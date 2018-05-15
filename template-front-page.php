<?php
/* 
Template Name: Landing Page
*/
?>

<?php get_header(); ?>
<?php define("IMAGEPATH", get_template_directory_uri()); ?>

<div class="container-responsive mt-5 mb-5">
<div class="row">
	<div class="col-1"></div>
	<div class="col-8 text-center">
		<img src='<?php echo IMAGEPATH ?>/theme/images/logo.png'/>
	</div>
</div>
<div class="row">
<div class="col-4"></div>
<div class="col-2"><button type="button" class="btn btn-primary w-100">Download</button></div>
<div class="col-2"><button type="button" class="btn btn-primary w-100">Register</button></div>
<div class="col-4"></div>
</div>
</div>

<div class="row">
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
	<div class="col-8 my-auto">
	<h2>About Illarion</h2>
	<p>Illarion is a Massively Multiplayer Online Role Playing Game (MMORPG) created by voluntary developers. It is opensource and totally free. Illarion is available for over a decade offering a classical and hardcore gaming experience alongside with an isometric gameplay.</p>
	<p>Illarions design focuses on true role playing and interaction with other players. You wont be guided through the world or be locked inside of fixed class designs. Instead Illarion encourages the player to forge his own destiny and goals. The game features a skill-based leveling system, allowing the player to compell his own unique gaming experience.</p>
	</div>
	<div class="col-4">
		<img class="img-responsive" src="<?php echo IMAGEPATH ?>/theme/images/stock2.png"/>
	</div>
</div>

</div>





</div><!-- /.container-responsive -->

<?php get_footer(); ?>
