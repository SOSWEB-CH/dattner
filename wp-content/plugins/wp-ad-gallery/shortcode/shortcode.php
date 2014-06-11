<?php 

// Add slide gallery shortcode	
add_shortcode('ad-gallery', 'wpadgallery_shortcode');
function wpadgallery_shortcode($attr) {
	global $post, $wp_locale;

	static $instance = 0;
	$instance++;

	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters('post_gallery', '', $attr);
	if ( $output != '' )
		return $output;

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
		'id'              => $post->ID,
		'order'      	  => 'ASC',
		'orderby'    	  => 'menu_order ID',
		'size'            => 'full',
		'include'         => '',
		'exclude'         => '',
		
		// style
		'width' 		  => '580px',
		'height' 		  => '400px',

		// script
		'startindex'	  => '0',
		'windowhash'	  => 'true',
		'thumbopacity' 	  => '1',
		'animatefirst' 	  => 'false',
		'animationspeed'  => '400',
		'nextprev' 		  => 'true',
		'backforward' 	  => 'true',
		'scrolljump'	  => '0',

		// slideshow
		'slideshow' 	  => 'true',
		'autostart' 	  => 'true', 
		'slidespeed' 	  => '4000',
		'startlabel'      => 'Start',
		'stoplabel'       => 'Stop', 
		'stopscroll' 	  => 'true',
		'countprefix'     => '( ', 
		'countsufix'      => ' )',
		'imagecount' 	  => 'block',
		'imagedesc' 	  => 'block',
		'effect' 		  => 'fade',
		'keyboardmove' 	  => 'true',
		'cycle' 		  => 'true'

	), $attr));

	$id = intval($id);
	if ( 'RAND' == $order )
		$orderby = 'none';

	if ( !empty($include) ) {
		$include = preg_replace( '/[^0-9,]+/', '', $include );
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( !empty($exclude) ) {
		$exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
		return '';

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}

	$WPAG_URL = plugins_url( '', dirname(__FILE__) );

	$gallery_div = "
	<style type=\"text/css\">
	
		/**
		 * Copyright (c) 2012 Anders Ekdahl (http://coffeescripter.com/)
		 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
		 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
		 *
		 * Version: 1.2.7
		 *
		 * Demo and documentation: http://coffeescripter.com/code/ad-gallery/
		 */

		#gallery {padding:0 20px 20px;}

		#descriptions {background:#eee; height:50px;  margin-top:0; padding:0; position:relative; overflow:hidden;}
		#descriptions .ad-image-description {position:absolute;}
		#descriptions .ad-image-description .ad-description-title {display:block;}

		.ad-gallery {width:$width;}

		.ad-gallery, 
		.ad-gallery * {margin:0; padding:0;}
		.ad-gallery .ad-image-wrapper {margin-bottom:10px; height:$height; position:relative; overflow:hidden; width:100%;}
		.ad-gallery .ad-image-wrapper .ad-loader {border:1px solid #CCC; left:48%; position:absolute; z-index:10; top:48%;}

		.ad-gallery .ad-image-wrapper .ad-next {display:block; cursor:pointer; height:100%; position:absolute; right:0; top:0; width:25%; z-index:200;}
		.ad-gallery .ad-image-wrapper .ad-prev {cursor:pointer; display:block; height:100%; left:0; position:absolute; top:0; width:25%; z-index:200;}
		.ad-gallery .ad-image-wrapper .ad-prev, 
		.ad-gallery .ad-image-wrapper .ad-next {background:url('$WPAG_URL/images/trans.gif');} /* Or else IE will hide it */

		.ad-gallery .ad-image-wrapper .ad-prev .ad-prev-image, 
		.ad-gallery .ad-image-wrapper .ad-next .ad-next-image {background:url('$WPAG_URL/images/ad_prev.png'); display:none; height:30px; left:0; position:absolute; top:47%; width:30px; z-index:101;}
		.ad-gallery .ad-image-wrapper .ad-next .ad-next-image {background:url('$WPAG_URL/images/ad_next.png'); height:30px; left:auto; right:0; width:30px;}

		.ad-gallery .ad-image-wrapper .ad-image {left:0; position:absolute; overflow:hidden; top:0; z-index:9;}
		.ad-gallery .ad-image-wrapper .ad-image a img {border:0;}

		.ad-gallery .ad-image-wrapper .ad-image .ad-image-description {background:url('$WPAG_URL/images/opa75.png'); bottom:0px; color:#000; left:0px; padding:7px; position:absolute; text-align:left; width:100%; z-index:2;}
		* html .ad-gallery .ad-image-wrapper .ad-image .ad-image-description {background:none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader (enabled=true, sizingMethod=scale, src='$WPAG_URL/images/opa75.png');}
		.ad-gallery .ad-image-wrapper .ad-image .ad-image-description .ad-description-title {display:block;}

		.ad-gallery .ad-controls {height:20px;}
		.ad-gallery .ad-info {float:left;}

		.ad-gallery .ad-slideshow-controls {float:right;}
		.ad-gallery .ad-slideshow-controls .ad-slideshow-start, 
		.ad-gallery .ad-slideshow-controls .ad-slideshow-stop {padding-left:5px; cursor:pointer;}

		.ad-gallery .ad-slideshow-controls .ad-slideshow-countdown {font-size:0.9em; padding-left:5px;}
		.ad-gallery .ad-slideshow-running .ad-slideshow-start {cursor:default; font-style:italic;}

		.ad-gallery .ad-nav {position:relative; width:100%;}
		.ad-gallery .ad-forward, 
		.ad-gallery .ad-back {height:100%; position:absolute; top:0; z-index:10;}

		/* IE 6 doesn't like height: 100% */
		* html .ad-gallery .ad-forward, .ad-gallery .ad-back {height:100px;}

		.ad-gallery .ad-back {background:url('$WPAG_URL/images/ad_scroll_back.png') 0px 22px no-repeat; cursor:pointer; display:block; left:-20px; width:13px;}
		.ad-gallery .ad-forward {background:url('$WPAG_URL/images/ad_scroll_forward.png') 0px 22px no-repeat; cursor:pointer; display:block; right:-20px; width:13px; }

		.ad-gallery .ad-nav .ad-thumbs {overflow:hidden; width:100%;}
		.ad-gallery .ad-thumbs .ad-thumb-list {float:left; list-style:none; width:9000px;}
		.ad-gallery .ad-thumbs li {float:left; padding-right:5px;}
		.ad-gallery .ad-thumbs li a {display:block;}
		.ad-gallery .ad-thumbs li a img {border:3px solid #ccc; display:block;}
		.ad-gallery .ad-thumbs li a.ad-active img {border:3px solid #616161;}

		/* Can't do display none, since Opera won't load the images then */
		.ad-preloads {left:-9000px; position:absolute; top:-9000px;}
		.ad-info { display:$imagecount;}
		.ad-image-description {display:$imagedesc;}

		/* Added the .ad-thumb-list li in case the WP template has a change to li tag. */
		.ad-thumb-list li {list-style:none; margin:0;}
		
	</style>

	<script type=\"text/javascript\">
		jQuery(document).ready(function() {

			var galleries = jQuery('.ad-gallery').adGallery({
			    loader_image: '$WPAG_URL/images/loader.gif', 
			    start_at_index: $startindex, // Which image should be displayed at first? 0 is the first image 
			    update_window_hash: $windowhash, // Whether or not the url hash should be updated to the current image
			    description_wrapper: false,
			    thumb_opacity: $thumbopacity, 
			    animate_first_image: $animatefirst, // Should first image just be displayed, or animated in?
			    animation_speed: $animationspeed,  // Which ever effect is used to switch images, how long should it take? 
			    width: false,
			    height: false,
			    display_next_and_prev: $nextprev, // Can you navigate by clicking on the left/right on the image?
			    display_back_and_forward: $backforward, // Are you allowed to scroll the thumb list?
			    scroll_jump: $scrolljump, // If 0, it jumps the width of the container
			    slideshow: {
			        enable: $slideshow,
			        autostart: $autostart,
			        speed: $slidespeed,
			        start_label: '$startlabel',
			        stop_label: '$stoplabel',
			        stop_on_scroll: $stopscroll, // Should the slideshow stop if the user scrolls the thumb list?
			        countdown_prefix: '$countprefix',
			        countdown_sufix: '$countsufix',
			        onStart: false,
			        onStop: false
			    },
			    effect: '$effect', // or 'slide-vert', 'slide-hori', 'fade', 'resize', 'none'
			    enable_keyboard_move: $keyboardmove, // Move to next/previous image with keyboard arrows?
			    cycle: $cycle, // If set to false, you can't go from the last image to the first, and vice versa
			    hooks: {
			        displayDescription: false
			    },
			    callbacks: {
			        init: false,
			        afterImageVisible: false,
			        beforeImageVisible: false
			    }
			});

		});
	</script>

	<div id='gallery' class='ad-gallery'>
		<div class='image-wrapper-container'><div class='ad-image-wrapper'></div></div>
		<div class='ad-controls'></div>
		<div class='ad-nav'>
			<div class='ad-thumbs'>
				<ul class='ad-thumb-list'>
				    ";
	$output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {
		$img_src = wp_get_attachment_image_src( $id, false, false );
		$img_id = wp_get_attachment_metadata();
		$img_title = $attachment->post_title;
        $img_alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
		$invisibl = WPAG_URL. '/images/invisibl.gif';
		$image_src = "<a href='$img_src[0]' id='$id'><img src='$img_src[0]' title='$img_title' alt='$img_alt' height='60' class='image-$id'>";

		$output .= "<li>";
		$output .= "$image_src";
		$output .= "</a></li>
		";
	}

	$output .= "		</ul><!-- .ad-thumb-list -->
			</div><!-- .ad-thumb -->
		</div><!-- .ad-nav -->
		</div><!-- .image-wrapper-container' -->\n";

	return $output;
}

?>