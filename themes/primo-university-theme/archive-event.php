<?php 
get_header(); 
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'See whats going on in our world'
));
?>

<div class="container container--narrow page-section">
<?php

while(have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'event'); // Grab the event section from file. Second argument is optional but very organize, automate and work smart with different documents like: event, blog, professor... enz
            }
?>
        <hr class="section-break">

      <p>Looking for a recap of past events? <a href="<?php echo site_url('/past-events'); ?>">Check out our past events archive</a></p>

       <?php
get_footer();
?>

