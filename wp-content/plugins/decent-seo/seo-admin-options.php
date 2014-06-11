<?php


function wds_options_page() {

     global $wds_options;
     ob_start(); ?>
	 
	  <div class="wrap">
	
	
	 
	
	 <form method="post" action="options.php">
	 
	 <?php settings_fields('wds_settings_group'); ?>
	 <table class="widefat">
      <thead>
        <tr>
          <th scope="col" style="width: 40%;"><?php _e('Seo for wordprss settings'); ?></th><th></th>
        </tr>
      </thead>
	  
	<tr> <td><label class="checkbox" for="wds_settings[wds_auto]" ><font size="03"><?php echo 'Disable automatic meta description'; ?></font></td>
<td><input type="checkbox" name="wds_settings[wds_auto]" id="wds_settings[wds_auto]" value="yes" <?php if ($wds_options['wds_auto'] == "yes") { echo "checked";}  ?> /> 
</label></td></tr>   
	  
	  
	  
 <tr>
 <td> <font size="03">Use Meta keywords</font> </td>
  <td> <select id="wds_settings[wds_seo]" name="wds_settings[wds_seo]"> 

<OPTION VALUE="yes" <?php if($wds_options['wds_seo'] == "yes") { echo 'selected';}?>><b>YES </b>
<OPTION VALUE="no" <?php if($wds_options['wds_seo'] == "no") { echo 'selected';}?>><b>NO </b>

</select></td></tr>

 <tr>
 <td> <font size="03">Want seo plugin with more features ? </font></td>
  <td> <font size="03">check our <a href="http://phppoet.com/wp-seo-suite-all-in-one-seo-pack-for-wordpress/">Wp Seo Suite Plugin</a> </font></td></tr>
 
 


</table>





		
		<br />		<br /><br />		
<center>	 <input type="submit" value="Update options" class="button-primary" /></center> </center>
     </form>
	
	 
	
<br /><br />
	 
	
	 
	 <div align="center"><form method="post" action="https://www.paypal.com/cgi-bin/webscr">
<div class="paypal-donations">
<input type="hidden" value="_donations" name="cmd"/>
<input type="hidden" value="admin@fastanswers.net" name="business"/>
<input type="hidden" value="http://fastanswers.net/thank-you.html" name="return"/>
<input type="hidden" value="You found the information helpful and want to say thanks? Your donation is enough to inspire us to do more. Thanks a bunch!" name="item_name"/>
<input type="hidden" value="USD" name="currency_code"/>
<input type="image" alt="PayPal – The safer, easier way to pay online." name="submit" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif"/><img width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt=""/></div></form></div>
	 </div>
	 
	 
	 <br />

	 <?php
	 
	
}  
     function wds_add_options_link() {
	 
	 add_options_page('seo for wordpress plugin options','seo for wordpress','manage_options','wds-options','wds_options_page');
	 }
	 add_action('admin_menu','wds_add_options_link');
	 
	 
	 
	 function wds_register_settings() {
	   register_setting('wds_settings_group','wds_settings');
	 }
	 
	 add_action ('admin_init','wds_register_settings');
	 
	 // Add settings link on plugin page
function wds_plugin_action_links( $links, $file ) {
	if ( $file == plugin_basename( dirname(__FILE__).'/seo-for-wordpress.php' ) ) {
		$links[] = '<a href="admin.php?page=wds-options">'.__('Settings').'</a>';
	}

	return $links;
}

add_filter( 'plugin_action_links', 'wds_plugin_action_links', 10, 2 );
	 
	 
?>