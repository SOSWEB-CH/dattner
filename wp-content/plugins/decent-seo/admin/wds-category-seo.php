<br />
<table class="widefat">
      <thead>
        <tr>
          <th scope="col" style="width: 40%;"><?php _e('category SEO'); ?></th><th></th>
        </tr>
      </thead>

<tr><td><label for="wds_settings[wds_categoryTitle]"><b>Enter Your category seo  Title    </b>: </td> 
	<td>	<input id="wds_settings[wds_categoryTitle]" name="wds_settings[wds_categoryTitle]" size="70" maxlength="70" value="<?php echo $wds_options['wds_categoryTitle'];?>" ></input></label></p>
	</td></tr>
	<tr><td><p><label for="wds_settings[wds_categoryDesc]"><b>category Description</b>:</td>
	<td><textarea  id="wds_settings[wds_categoryDesc]" name="wds_settings[wds_categoryDesc]" rows="02" cols="75" value=""><?php echo $wds_options['wds_categoryDesc'];?></textarea></label></p></td> </tr>
	<tr>
<p><td><label for="wds_settings[wds_categorytags]"><b>category Meta tags</b>:(separated by coma)</td>
	<td>	<input id="wds_settings[wds_categorytags]" name="wds_settings[wds_categorytags]" size="100" value="<?php echo $wds_options['wds_categorytags'];?>" /></label></p></td>
	</tr>
	</table>