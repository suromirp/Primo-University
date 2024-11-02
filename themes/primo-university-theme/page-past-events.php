<?php 
get_header(); 
pageBanner(array(
  'title' => 'Past Events',
  'subtitle' => 'A Recap of our past events'
));
?>

<div class="container container--narrow page-section">
<?php
 $today = date('Ymd'); // Variable to decide if event is in past
  $pastEvents = new WP_Query(array(
            'paged' => get_query_var('paged', -1),
            'post_type' => 'event',
            'meta_key' => 'event_date', // Get custom field data
            'orderby' => 'meta_value_num', // Use custom field data
            'order' => 'ASC',
            'meta_query' => array( // Custom date filter
                array(
                  'key' => 'event_date',
                  'compare' => '<',
                  'value' => $today,
                  'type' => 'numeric',
                )
              )
    ));

 while($pastEvents->have_posts()) {
    $pastEvents->the_post();
    get_template_part('template-parts/content-event');
     }
  echo paginate_links(array(
    'total' => $pastEvents->max_num_pages
  )); ?>
</div>

<?php get_footer();

?>