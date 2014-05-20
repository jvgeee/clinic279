<?php
/*
Template Name: Home Template
*/
?>
<div class="row">
	<div class="col-sm-8 main-content">
		<div class="health-and-wellness">
			<h1>Health Services</h1>
			<div class="row">
				<div class="col-sm-4">
					<img class="img-thumbnail" src="http://lorempixel.com/400/300/cats/4">
					<h3 class="title"><a href="/quick-diagnosis-clinic">Quick Diagnosis Clinic</a></h3>
					<p class="section-info">Here goes a little bit of section information. It will describe what's in the section so that the user can get some information without clicking.</p>
				</div>
				<div class="col-sm-4 middle">
					<img class="img-thumbnail" src="http://lorempixel.com/400/300/cats/2">
					<h3 class="title">On-Site Pathology</h3>
					<p class="section-info">Here goes a little bit of section information. It will describe what's in the section so that the user can get some information without clicking.</p>
				</div>
				<div class="col-sm-4">
					<img class="img-thumbnail" src="http://lorempixel.com/400/300/cats/3">
					<h3 class="title">Patient Health Resources</h3>
					<p class="section-info">Here goes a little bit of section information. It will describe what's in the section so that the user can get some information without clicking.</p>
				</div>
			</div>
		</div>
		<?php get_template_part('templates/article-list') ?>

	</div>
	<aside class="col-sm-4 sidebar">
		<?php get_template_part('templates/sidebar-main') ?>
	</aside>
</div>