<?php
// Example to use featured image if applicable, if not call the function to return image uploaded to post or placeholder //
if(has_post_thumbnail()) {
  $imgurl = get_the_post_thumbnail_url('','full');
} else {
  $imgurl = find_first_img_attachment();
}
// testing commit on new branch //
// returns an image url either featured image, uploaded image or placeholder //
echo $imgurl;
// end comment //
?>
