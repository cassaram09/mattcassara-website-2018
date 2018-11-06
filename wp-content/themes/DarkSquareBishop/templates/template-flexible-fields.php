<?php
/*
Template Name: Flexible Fields
*/
?>

<?php get_header(); ?>

<?php  

  while(the_flexible_field('flexible_fields')):

  $layout = get_row_layout();

  switch ($layout) {

    case "layout_hero":
      include (TEMPLATEPATH . '/components/flex_hero.php');
      break;
    case "layout_call_out":
      include (TEMPLATEPATH . '/components/flex_call-out.php' );
      break;
    case "layout_call_to_action":
      include (TEMPLATEPATH . '/components/flex_cta.php' );
      break;
    case "layout_service_overview":
      include (TEMPLATEPATH . '/components/flex_service-overview.php');
      break;
    case "layout_service_rows":
      include (TEMPLATEPATH . '/components/flex_service-rows.php' );
      break;
    case "layout_service_icons":
      include (TEMPLATEPATH . '/components/flex_service-icons.php');
      break;
    case "layout_testimonials":
      include (TEMPLATEPATH . '/components/flex_testimonials.php' );
      break;
    case "layout_projects_featured":
      include (TEMPLATEPATH . '/components/flex_projects-featured.php' );
      break;
    case "layout_projects_all":
      include (TEMPLATEPATH . '/components/flex_projects-all.php' );
      break;
    case "layout_team":
      include (TEMPLATEPATH . '/components/flex_team.php' );
      break;
    case "layout_client_logos":
      include (TEMPLATEPATH . '/components/flex_client-logos.php' );
      break;
    case "layout_recent_posts":
      include (TEMPLATEPATH . '/components/flex_recent-posts.php' );
      break;
    case "layout_button_block":
      include (TEMPLATEPATH . '/components/flex_button-block.php' );
      break;
    default:
      break;
  }

  endwhile; 

?>

<?php get_footer(); ?>