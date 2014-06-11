<?php
/* seo metabox plugin file 
*/



function wds_seo_metabox() {
	global $post;
	global $wds_meta_options;
	global $wds_options;
	
	
	
	
	$wdsTitle = get_post_meta( $post->ID, 'wdsTitle', true );
	$wdsDesc = get_post_meta( $post->ID, 'wdsDesc', true );
	$wdstags = get_post_meta( $post->ID, 'wdstags', true );
	
    



	 ?>
<style type="text/css">
.textareaxxx {
   font-size: 12pt;
   font-family: Arial;
} 
</style>




<script> 

function maxLength (e) {    
    if (!document.createElement('textarea').maxLength) {
        var max = e.attributes.maxLength.value;
        e.onkeypress = function () {
            if(this.value.length >= max) return false;
        };
    }
}

maxLength(
    document.getElementById("text")
);

var maxAmount = 156;
function textCounter(textField, showCountField) {
    if (textField.value.length > maxAmount) {
        textField.value = textField.value.substring(0, maxAmount);
} else { 
        showCountField.value = maxAmount - textField.value.length;
}
}
var maxTitle = 70;
function textCounter2(textField2, showCountField2) {
    if (textField2.value.length > maxTitle) {
        textField2.value = textField2.value.substring(0, maxAmount);
} else { 
        showCountField2.value = maxTitle - textField2.value.length;
}
}


</script>



<p><label for="wdsTitle"><b>Enter Your Post seo  Title    </b>:  
		<input id="wdsTitle" name="wdsTitle" size="70" maxlength="70" value="<?php if ($wdsTitle) {echo $wdsTitle;} else {echo get_the_title();}?>" onKeyDown="textCounter2(this.form.wdsTitle,this.form.countDisplay2);" onKeyUp="textCounter2(this.form.wdsTitle,this.form.countDisplay2);" ></input></label></p><input readonly type="text" name="countDisplay2" size="3" maxlength="3" value="70"> Characters Remaining
	
	<p><label for="wdsDesc"><b>post Description</b>:(text limit=156)<br />
	<textarea class="textareaxxx" id="wdsDesc" name="wdsDesc"  font size="2" maxlength="156" rows="02" cols="75" value="wdsDesc" onKeyDown="textCounter(this.form.wdsDesc,this.form.countDisplay);" onKeyUp="textCounter(this.form.wdsDesc,this.form.countDisplay);" ><?php if ($wdsDesc) { echo $wdsDesc;} elseif (!isset($wds_options['wds_auto'])) {
	$wdsdescription = $post->post_content;
	$string = trim(strip_tags($wdsdescription));
$newString = substr($string, 0, 156);
echo $newString;
	} ?></textarea></label><b></b></p><br />
	
	<input readonly type="text" name="countDisplay" size="3" maxlength="3" value="156"> Characters Remaining
	
	


	
	<?php 
	global $post; if ($wdstags) {
    $wdsmetatags=get_post_meta( $post->ID, 'wdstags', true ); } else {$wdsmetatags=strip_tags(get_the_tag_list('',', ',''));}
	if($wds_options['wds_seo'] == "yes") { echo '<p><label for="wdstags"><b>Meta tags</b>:(separated by coma)
		<input id="wdstags" name="wdstags" size="100" value="' . $wdsmetatags . '" /></label></p>'; } ?>
	
	
	
	

	
	
<?php
}
/**
 * Process the custom metabox fields
 */
function wds_custom_url10( $post_id ) {
	global $post;
global $wds_meta_options;	

	if( $_POST ) {
		
		
		update_post_meta( $post->ID, 'wdsTitle', $_POST['wdsTitle'] );
		update_post_meta( $post->ID, 'wdsDesc', $_POST['wdsDesc'] );
		update_post_meta( $post->ID, 'wdstags', $_POST['wdstags'] );
		
	}
}
global $post;
$wdscurrentposttype=get_post_type( $post->ID );


function wds_meta_title() {
	global $post;
  if ('page' == $post->post_type || 'post' == $post->post_type || $wdscurrentposttype = $post->post_type)
  {   $abc2=get_the_title();
	  $wdsSeoTitle = get_post_meta($post->ID, 'wdsTitle', true);
    // echo only if not empty
    if(!empty($wdsSeoTitle)){
      echo '<!--SEO For wordpress by PHPpoet starts -->
	  <meta name="title" content="' . $wdsSeoTitle . '">
	  
	  ';
    } else 	{
	
	echo '
	<!--SEO For wordpress by PHPpoet starts -->
	<meta name="title" content="' . $abc2 . '">
	';}   
  }
}

function wds_meta_description() {
	global $post;
  if ('page' == $post->post_type || 'post' == $post->post_type || $wdscurrentposttype = $post->post_type)
  {   	$wdsdescription2 = $post->post_content;
	$string2 = trim(strip_tags($wdsdescription2));
$newString2 = substr($string2, 0, 156);


	  $wdsseodescription = get_post_meta($post->ID, 'wdsDesc', true);
    // echo only if not empty
    if(!empty($wdsseodescription)){
      echo '<meta name="description" content="' . $wdsseodescription . '" />';
    } else {echo '<meta name="description" content="' . $newString2 . '" />'; }    
  }
}

if($wds_options['wds_seo'] == "yes") {
function wds_meta_keywords() {
	global $post;
  if ('page' == $post->post_type || 'post' == $post->post_type || $wdscurrentposttype = $post->post_type)
  {  $abc1=strip_tags(get_the_tag_list('',', ','')); 
	  $wdsSeotags = get_post_meta($post->ID, 'wdstags', true);
    // echo only if not empty
    if(!empty($wdsSeotags)){
      echo '<meta name="keywords" content="' . $wdsSeotags . '" />
	  <!--SEO For wordpress by PHPpoet ends -->
	  ';
    }	else {echo '<meta name="keywords" content="' . $abc1 . '" />
	<!--SEO For wordpress by PHPpoet ends -->';}                
  }
}

}
	


add_action( 'admin_init', 'add_custom_metabox10' );
add_action( 'save_post', 'wds_custom_url10' );
add_action( 'wp_head' ,  'wds_meta_title');
add_action( 'wp_head' ,  'wds_meta_description');

if($wds_options['wds_seo'] == "yes") {
add_action( 'wp_head' ,  'wds_meta_keywords'); }

/**
 * Add meta box
 */
 
function add_custom_metabox10() {

foreach ( get_post_types( array( 'public' => true ) ) as $wdsposttype ) {
			
			add_meta_box( 'custom-metabox10', __( 'Decent SEO ' ), 'wds_seo_metabox', $wdsposttype, 'normal', 'high' );
		}




	
	
	
}

function wds_register_meta_settings() {
	   register_setting('wds_meta_settings_group','wds_meta_settings');
	 }
	 
	 add_action ('admin_init','wds_register_meta_settings');

?>