<br />
<table class="widefat">
      <thead>
        <tr>
          <th scope="col" style="width: 40%;"><?php _e('author SEO'); ?></th><th></th>
        </tr>
      </thead>

<tr><td><label for="wds_settings[wds_authorTitle]"><b>Enter Your author seo  Title    </b>: </td> 
	<td>	<input id="wds_settings[wds_authorTitle]" name="wds_settings[wds_authorTitle]" size="70" maxlength="70" value="<?php echo $wds_options['wds_authorTitle'];?>" ></input></label></p>
	</td></tr>
	<tr><td><p><label for="wds_settings[wds_authorDesc]"><b>author Description</b>:</td>
	<td><textarea  id="wds_settings[wds_authorDesc]" name="wds_settings[wds_authorDesc]" rows="02" cols="75" value=""><?php echo $wds_options['wds_authorDesc'];?></textarea></label></p></td> </tr>
	<tr>
<p><td><label for="wds_settings[wds_authortags]"><b>author Meta tags</b>:(separated by coma)</td>
	<td>	<input id="wds_settings[wds_authortags]" name="wds_settings[wds_authortags]" size="100" value="<?php echo $wds_options['wds_authortags'];?>" /></label></p></td>
	</tr>
	</table>