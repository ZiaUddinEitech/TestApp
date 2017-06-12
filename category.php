<?php
require '../wp-load1.php';
$cat=get_all_category_ids();
 $args = array( 'category' => 1,'posts_per_page' => 3, 'offset'=>1, 'post_type' =>  'post' ); 
  $postslist = get_posts( $args ); 
	$i=0;
	$post_data=array();
	foreach ($postslist as $post) :  setup_postdata($post); 
	$post_data['title'][$i]=get_the_title();
	$post_data['date'][$i]=get_the_time('d-m-Y');
	$i++;
	endforeach;
echo json_encode($post_data);

?>
