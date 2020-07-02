<?php get_header(); ?>

<section class="page-wrap container m-auto mt-5">
    <h1 class="text-center"> <?php the_title(); ?>   </h1>
<div class="container row">

  <?php if(has_post_thumbnail()): ?>
    <div class="mt-5">
        <!-- This has a featured image -->
        <div>
          <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
        </div>
    <?php endif; ?>
   </div>

    <div class="col text-dark projectStyle">
      <?php get_template_part('includes/section','blogcontent'); ?>
         <?php wp_link_pages(); ?>
    </div>
</div>
</section>
<?php get_footer(); ?>