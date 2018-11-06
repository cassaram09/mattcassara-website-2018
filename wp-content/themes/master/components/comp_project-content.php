  <!-- SECTION: Project Content -->

<?php  

  while(the_flexible_field('project_content')):

  $layout = get_row_layout();

  switch ($layout) {
    case "project-block_image":
      include (TEMPLATEPATH . '/components/flex_block-image.php');
      break;
    case "project-block_video":
      include (TEMPLATEPATH . '/components/flex_block-video.php');
      break;
  }

  endwhile; 

?>