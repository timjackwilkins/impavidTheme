<footer>
  	<div class="container">
    </div>
	
	<div class="footerWrapper flex">

	<div class="footerContact">
	<p>	<?php 
 // Custom widget Area Start
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Custom Widget Area') ) : ?>
<?php endif;
// Custom widget Area End
?></p>
	</div>
    
  	<div class="footerSocial">
  	<p> IMPAVID THEME &copy; Tim Jack Wilkins & Christina Fung <?php echo date('Y'); ?></p></div>
  		</div>	
 


    
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>