<?php get_header() ?>

   <!-- Page Title
   ================================================== -->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <?php if (have_posts()) { while (have_posts()) {the_post();?>
              <article class="post">

               <div class="entry-header cf">

                  <h1><a href="<?php the_permalink() ?>" title=""><?php the_title()?></a></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
                     /
                     <span class="categories">
                     <?php the_tags( ' ', ' / ' ) ?>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                  <a href="<?php the_permalink()?>" title=""><?php the_post_thumbnail( 'post_thumb' ) ?></a>
               </div>

               <div class="post-content">

                  <?php the_excerpt(); ?>

               </div>

            </article> <!-- post end -->
            <?php }//конец while ?>
            <!-- Pagination -->
           <?php the_posts_pagination(); ?>
            <?php }//конец if ?>
         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

          <?php get_sidebar() ?>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->
  <?php get_footer() ?>

  