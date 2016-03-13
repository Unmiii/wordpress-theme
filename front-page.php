  <?php get_header(); ?>
  <div class="main" id="home">
    <div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>">
    </div> <!-- /.hero -->
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
            <h1>              
                <a href="#home"><?php the_field('home_title'); ?></a>
            </h1>
            <section class="about">
              <h2><?php the_field('about_section_title')?></h2>
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
              <h2><?php the_field('work_section_title'); ?></h2>
              <div class="workSection">
                <!-- START OF WORK SECTION LOOP  -->
                <?php while(has_sub_fields('work_section')): ?>
                  <div class="portfolioGallery">
                    <?php $images = get_sub_field('work_section_images');
                    if( $images ): ?>
                    <ul>
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>">
                                     <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>" />
                                </a>
                                <p><?php echo $image['caption']; ?></p>
                                <p><?php echo $image['description']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                  </div> <!-- /.portfolioGallery -->
                <?php endwhile; ?> <!-- END OF WORK SECTION LOOP -->
              </div> <!-- /.workSection -->
            </section> <!-- /.work -->

            <section class="contact">
              <h2><?php the_field('contact_section_title'); ?></h2>
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
                  <div class="profileImage">
                    <?php $image = get_field('profile_image'); ?>
                    <!-- <pre><?php print_r($image); ?></pre> -->
                    <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
                  </div>
                  <?php the_field('contact_section_content'); ?>
                </div> <!-- /.contactDetails -->
              </div> <!-- /.contactWrapper -->
            </section> <!-- /.contact -->
        <?php endwhile; // end of the loop. ?> 

      </div> <!-- /.containerWrapper -->
    </div> <!-- /.container -->
  </div> <!-- /.main -->

  <?php get_footer(); ?>
</div>