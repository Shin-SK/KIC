<?php

 // Contact Form 7で自動挿入されるPタグ、brタグを削除
 add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
 function wpcf7_autop_return_false() {
   return false;
 } 
 
 add_filter('use_block_editor_for_post', '__return_false', 10);
 
 // CF7のショートコードを、タイトルで判定するようにする
 function cf7_title($title) {
	 $args = array(
		 'post_type' => 'wpcf7_contact_form',
		 'posts_per_page' => -1,
	 );
	 $posts = get_posts($args);
 
	 foreach ($posts as $post) {
		 if ($post->post_title == $title) {
			 return do_shortcode('[contact-form-7 id="' . $post->ID . '"]');
		 }
	 }
	 return ''; // タイトルが一致するフォームがない場合
 }
 