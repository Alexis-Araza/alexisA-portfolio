<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">
        </div>
    </div>
<?php endif; ?>


    <section class="container page-wrap m-auto">

      <div class="mx-auto">

        <div class="text-center">
          <div class="fp-txt">
          <?php get_template_part('includes/section','content'); ?>
          </div>
        </div>
  </div>
    </section>




<?php get_footer(); ?>
