<?php
// add to functions.php //
function find_first_img_attachment() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  // Find all images  //
  $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
  // Check if post includes an image and has value //
  if(isset($matches[1][0])) {
    $first_img = $matches[1][0];
  }
  // fallback placeholder - nothing found //
  if(empty($first_img)) {
    $first_img = "/images/image_placeholder_here.png";
  }
  return $first_img;
}
// 2nd end comment (branch test) //
?>
