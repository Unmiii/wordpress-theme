  <?php get_header(); ?>
  <div class="main" id="home">
    <div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>">
    </div> <!-- /.hero -->

    <div class="homeTitle">              
      <h2><a href="#home"><?php the_field('home_title'); ?></a></h2>
    </div>
    <script language="javascript">
      $(document).ready(function() {
        $(".lettering").lettering();
      });
    </script>

    <header>
      <div class="container">

      <div class="toggle-btn">
         <div class="toggle-bar"></div>
       </div> 
       
         <div class="headerLogoDetails">
          <h2>
            <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php the_field('logo'); ?>
            </a>
          </h2>
          <!-- <h3><?php the_field('header_tagline') ?></h3> -->
        </div> 

        <div class="mainNav">
          <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary'
            )); ?>
        </div>
    </div> <!-- /.container -->
    </header><!--/.header-->

    <div class="pageWrapper">
    <div class="container">
      <div class="containerWrapper">
      <!-- MAIN LOOP -->
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
            <section class="about">
              <?php the_field('about_section_title')?>
              <div class="aboutSection">
                <!-- START OF ABOUT SECTION LOOP -->
                <?php while(has_sub_fields('about_section')): ?>
                <div class="aboutContentWrapper">
                    <div class="aboutHeading">
                      <?php the_sub_field('about_section_images'); ?>
                      <h3><?php the_sub_field('about_section_titles'); ?></h3>
                    </div>
                    <div class="aboutContent">
                      <p><?php the_sub_field('about_section_content'); ?></p>
                    </div>
              </div>
                <?php endwhile; ?> <!-- END OF ABOUT SECTION LOOP -->
              </div>
            </section> <!-- /.about -->

           <section class="work">
              <?php the_field('work_section_title'); ?>

              <div class="workSection">
                <div class="gallery-thumbnail">
                  <?php while(has_sub_fields('work_section_gallery')): ?>
                        <div class="work-thumbnail">
                          <?php $image = get_sub_field('work_section_images'); ?>
                          <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
                        </div> <!-- /.work-thumbnail -->
                 <?php endwhile; ?> <!-- END OF WORK SECTION THUMBNAIL LOOP -->
                </div> <!-- /.gallery-thumbnail -->
                <!-- <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'> -->
                <div id="main-gallery">
                  <!-- START OF WORK SECTION LOOP  -->
                  <?php while(has_sub_fields('work_section_gallery')): ?>
                      <div class="gallery-cell">
                          <div class="workImage">
                            <?php $image = get_sub_field('work_section_images'); ?>
                            <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
                          </div>
                          <div class="workInfo">
                            <div class="workHeading">
                              <h4><?php the_sub_field('work_section_image_caption_titles'); ?></h4>
                            </div> <!-- /.workHeading -->
                            <div class="workContent">
                              <p><?php the_sub_field('work_section_image_details'); ?></p>
                              <p><?php the_sub_field('work_section_skills'); ?></p>
                            </div> <!-- /.workContent -->
                          </div> <!-- /.workInfo -->
                    </div>
                  <?php endwhile; ?> <!-- END OF WORK SECTION FLICKITY LOOP -->
                </div>
              </div> <!-- /.workSection -->
            </section> <!-- /.work -->

            <section class="contact">
              <?php the_field('contact_section_title'); ?>
              <div class="contactWrapper">
                <div class="contactForm">
                  <form class="contact-form" method="post" action="http://www.focuspocus.io/magic/unmi.chung@hotmail.com">
                    <p>
                      <label for="name"><i class="fa fa-user"></i></label>
                      <input id="name" type="text" name="name" required="required" placeholder="Enter your name">
                    </p>
                    <p>
                      <label for="email"><i class="fa fa-envelope"></i></label>
                      <input id="email" type="email" name="replyto" required="required" placeholder="Enter your email address">
                    </p>
                    <p>
                      <label for="url"><i class="fa fa-globe"></i></label>
                      <input id="url" type="url" name="url" placeholder="Enter your email address">
                    </p>
                    <p>
                      <label for="message">Message</label>
                      <textarea name="message" id="message" required="required"></textarea>
                    </p>
                    <input name="submit" class="submit" type="submit" value="Send that message">
                  </form>
                </div> <!-- /.contactForm -->
                <div class="contactDetails">
                  <?php the_field('contact_section_content'); ?>
                  <div class="profileImage">
                    <?php $image = get_field('profile_image'); ?>
                    <!-- <pre><?php print_r($image); ?></pre> -->
                    <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
                  </div>
                </div> <!-- /.contactDetails -->
              </div> <!-- /.contactWrapper -->
            </section> <!-- /.contact -->
        <?php endwhile; // end of the loop. ?> 

      </div> <!-- /.containerWrapper -->
    </div> <!-- /.container -->
  </div> <!-- /.main -->

  <?php get_footer(); ?>
</div>