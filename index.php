<?php //get_template_part('templates/header', 'banner'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'imaga'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content', get_post_type() ); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php the_posts_navigation(); ?>
