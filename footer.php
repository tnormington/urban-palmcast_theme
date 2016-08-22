					<footer class="footer" role="contentinfo">
						<img class="footer-image" src="<?php bloginfo('url'); ?>/wp-content/themes/urban-palmcast_theme/assets/images/footer_image_edit.png">
						<div class="inner-footer-wrapper">
							<div id="inner-footer" class="row">
								<div class="large-12 medium-12 columns">
									<nav role="navigation">
			    						<?php joints_footer_links(); ?>
			    					</nav>
			    				</div>
								<div class="large-12 medium-12 columns">
									<section class="footer-nav">
										<?php wp_nav_menu(); ?>
									</section>
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
								</div>
							</div> <!-- end .inner-footer-wrapper -->
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
