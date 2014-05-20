<footer class="content-info" role="contentinfo">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('sidebar-footer'); ?>	
			</div>
		</div>
	</div>
	<div class="second-footer">
		<div class="bottom-menu clearfix">
			<?php wp_nav_menu( array('menu' => 'Bottom menu' )); ?>
		</div>
		<div class="disclaimer">
		    <p class="copyright">&copy; <?php echo date('Y'); ?> The Clinic 279</p>
		    <p class="friendly">Designed and developed by James' Friendly Websites</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
