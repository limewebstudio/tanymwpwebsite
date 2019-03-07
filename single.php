<?php get_header() ?>

   <!-- Page Title
   ================================================== -->
  
   <?php if(have_posts()):while(have_posts()): the_post()?>
   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <article class="post">

               <div class="entry-header cf">

                  <h1><?php the_title() ?></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
                     /

                  </p>

               </div>

               <div class="post-thumb">
                  <?php the_post_thumbnail() ?>
               </div>

               <div class="post-content">
                  
              <?php the_content() ?>

               </div>

            </article> <!-- post end -->
            <div id="comments">
               <div class="respond">

                  <h3>Пікір қалдыру</h3>

                  <!-- form -->
                  <form name="contactForm" id="contactForm" method="post" action="">
                  <fieldset>

                     <div class="cf">
                        <label for="cName">Name <span class="required">*</span></label>
                        <input name="cName" type="text" id="cName" size="35" value="" />
                     </div>

                     <div class="cf">
                        <label for="cEmail">Email <span class="required">*</span></label>
                        <input name="cEmail" type="text" id="cEmail" size="35" value="" />
                     </div>

                     <div class="cf">
                        <label for="cWebsite">Website</label>
                        <input name="cWebsite" type="text" id="cWebsite" size="35" value="" />
                     </div>

                     <div class="message cf">
                        <label  for="cMessage">Message <span class="required">*</span></label>
                        <textarea name="cMessage"  id="cMessage" rows="10" cols="50" ></textarea>
                     </div>

                     <button type="submit" class="submit">Submit</button>

                  </fieldset>
                  </form> <!-- Form End -->

               </div> <!-- Respond End -->

            </div>  <!-- Comments End -->

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

          <?php get_sidebar() ?>

         </div> <!-- Secondary End-->
         
      </div>

   </div> <!-- Content End-->
   <?php endwhile; ?>
<?php endif; ?>

  <?php get_footer() ?>