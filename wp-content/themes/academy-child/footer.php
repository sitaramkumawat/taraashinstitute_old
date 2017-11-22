				<?php if(is_active_sidebar('footer')) { ?>
					<div class="clear"></div>
					<div class="footer-sidebar sidebar clearfix">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer')); ?>
					</div>
				<?php } ?>
				</div>
			</div>
			<!-- /content -->
			<div class="footer-wrap">
				<footer class="site-footer">
				<div class="footer_widget">
				<div class="row">
				<?php if(is_active_sidebar('foo-1')) { ?>
					
						<?php dynamic_sidebar( 'foo-1' ); ?>
					
				<?php } ?>
				<?php if(is_active_sidebar('foo-2')) { ?>
					
						<?php dynamic_sidebar( 'foo-2' ); ?>
					
				<?php } ?>
				<?php if(is_active_sidebar('foo-3')) { ?>
					
						<?php dynamic_sidebar( 'foo-3' ); ?>
					
				<?php } ?>
				<?php if(is_active_sidebar('foo-4')) { ?>
					
						<?php dynamic_sidebar( 'foo-4' ); ?>
					
				<?php } ?>
			
				</div>
				</div>
                               <div class="footer-bottom">
					<div class="row">
						<div class="copyright left">
							<?php echo ThemexCore::getOption('copyright', 'Taraash Institute &copy; '.date('Y')); ?>
						</div>
						
						<!-- /navigation -->				
					</div>	
</div>		
				</footer>				
			</div>
			<!-- /footer -->			
		</div>
		<!-- /site wrap -->
	<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89384585-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'UuqhLKk3JR';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

	</body>
</html>