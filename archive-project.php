<?php get_header(); ?>
<section class="container py-5">
<?php if (have_posts()) : while (have_posts()) : the_post(); $logo = bnwp_get_meta('_bnwp_logo'); $lead = bnwp_get_meta('_bnwp_lead'); ?>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-5 fw-bold text-body-emphasis"><?php the_title(); ?></h1>
        <?php if ($lead) : ?><p class="lead"><?php echo esc_html($lead); ?></p><?php endif; ?>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 mt-5"><a type="button" href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">See Details</a></div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0"><?php if ($logo) : ?><img class="rounded-lg-3" src="<?php echo esc_url($logo); ?>" alt="" style="height:auto;width:200px;"><?php endif; ?></div>
    </div>
  </div>
<?php endwhile; the_posts_pagination(); else : ?><p>কোনো প্রকল্প পাওয়া যায়নি।</p><?php endif; ?>
</section>
<?php get_footer(); ?>
