<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<div class="main">
	 <div class="headerContainer flex">
	   <div class="accentDiv">
	      <div class="headerText">
	          <h1 class="accentBorder"><?php echo get_bloginfo ('name') ?></h1>
	          <h4><?php echo get_bloginfo ('description');  ?></h4> 
	      </div>
	   </div>
	   <div class="headerImg" style="background: url(<?php header_image(); ?>) no-repeat; background-size: cover;"></div>
	</div>
  <div class="blogContainer">

    <!-- <div class="content"> -->
    		<?php get_template_part( 'loop', 'index' );	?>
    <!-- </div>  --><!--/.content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>