
<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header','reviews'); ?>

<? while (have_posts()) : the_post(); ?>
  <article <? post_class(); ?>>

    <div class="row">
      <div class="col-6">

      </div>
      <div class="col-6 box-shadow bg-white">
        <div class="row">
          <div class="col-3 text-right">
            <img class="img-fluid img-circle" src="<?= get_the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
          </div>
          <div class="col-9">
            <? the_title(); ?>, <? the_field('company'); ?> <? the_field('location'); ?>
            <span class="review-stars text-orange">
              <? the_field('stars'); ?>
            </span>
            <p>
              <small>
                <? the_content(); ?>
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>

  </article>
<? endwhile; ?>

<? get_template_part('templates/parts/related-posts'); ?>
