<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="home-item">
          
          <h2>              
              <?php the_title(); ?>
          </h2>

          <p><?php the_content(); ?></p>

          <p><?php the_field('short_description'); ?></p>

          <p>Created in week <?php the_field('project_week'); ?></p>

          <div class="work-gallery">
            <?php while(has_sub_fields('_images')): ?>
              <!-- We are going to have to give an argument within the while parentheses; Our if statement: while this is true, run this. -->
              <p class="caption">
                <?php the_sub_field('caption');  ?>
              </p>
              <p>
                <?php $image = get_sub_field('image'); ?>
                <!-- Since we're getting an object, it'd be better to get the information instead of printing it on the page and store it into a variable. -->
              </p>
              <!-- <pre><?php print_r($image);?></pre> -->
              <!-- This is like console.log. We're just seeing what info is being called. -->
              <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
            <?php endwhile; ?>
              <!-- echo is used to print out the variable on the page -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <!-- <?php get_sidebar(); ?> -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>