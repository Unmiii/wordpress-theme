  <?php get_header(); ?>
  <div class="homeTitle">              
    <h2><?php the_field('home_title'); ?></h2>
  </div>
  <div class="main" id="home">
    <div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>"></div>

    <div class="scrollBottom animated infinite bounce">
      <a href="#mainNav"><i class="fa fa-angle-double-down animated infinite bounce"></i></a>
    </div>

    <header id="header">
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
        </div> 

        <div class="mainNav" id="mainNav">
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

              <div class="workSection clearfix">
                <div class="gallery js-flickity" id="main-gallery" data-flickity-options='{ "wrapAround": true }'> 
                  <!-- START OF WORK SECTION LOOP  -->
                  <?php while(has_sub_fields('work_section_gallery')): ?>
                      <div class="gallery-cell">
                          <div class="workImage">
                            <?php $image = get_sub_field('work_section_images'); ?>
                            <img src="<?php echo $image['sizes']['large'] ?>" alt="">
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
                <div class="contactDetails">
                  <div class="contactInfo">
                    <div class="contactBlurb">
                      <div class="contactBlurbHeader">
                        <div class="profileImage">
                          <?php $image = get_field('profile_image'); ?>
                          <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
                        </div>
                        <div class="contactBlurbTitle">
                          <h3>Michelle Chung</h3>
                          <h4>Front-End Web Developer</h4>
                        </div>
                      </div>
                      <p>Hi there! If you'd like to discuss a potential project or just want to say hello, send me a message!</p>
                    </div>

                    <div class="contactSocial">
                      <p>
                        <strong>Contact me:</strong>
                          <a href="tel:+1(647)302-1081">+1  (647) 302-1081</a>
                      </p>
                      <p>
                        <strong>Email me:</strong> 
                        <a href="mailto:michelle@michellecodes.ca">michelle@michellecodes.ca</a>
                      </p>
                      <p>
                        <strong>Follow me:</strong> 
                        <a href="http://www.twitter.com/unmi123">
                          <i class="fa fa-twitter"></i>
                          Twitter
                        </a> / 
                        <a href="http://www.github.com/Unmiii">
                          <i class="fa fa-github-alt"></i>
                          GitHub
                        </a> / 
                        <a href="https://ca.linkedin.com/in/michellechungcodes">
                          <i class="fa fa-linkedin"></i>
                          LinkedIn
                        </a>
                      </p>
                    </div>
                  </div>
                </div> <!-- /.contactDetails -->
                <div class="contactForm">
                  <form class="contact-form" method="post" action="http://www.focuspocus.io/magic/michelle@michellecodes.ca">
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
                      <input id="url" type="url" name="url" placeholder="Enter your website url">
                    </p>
                    <p>
                      <label for="message">Message</label>
                      <textarea name="message" id="message" required="required"></textarea>
                    </p>
                    <input name="submit" class="submit" type="submit" value="SEND MESSAGE">
                  </form>
                </div> <!-- /.contactForm -->
              </div> <!-- /.contactWrapper -->
            </section> <!-- /.contact -->
        <?php endwhile; // end of the loop. ?> 

      </div> <!-- /.containerWrapper -->
    </div> <!-- /.container -->
  </div> <!-- /.main -->

  <?php get_footer(); ?>
</div>