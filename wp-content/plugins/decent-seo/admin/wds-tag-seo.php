<br />
<table class="widefat">
      <thead>
        <tr>
          <th scope="col" style="width: 40%;"><?php _e('tag SEO'); ?></th><th></th>
        </tr>
      </thead>

<tr><td><label for="wds_settings[wds_tagTitle]"><b>Enter Your tag seo  Title    </b>: </td> 
	<td>	<input id="wds_settings[wds_tagTitle]" name="wds_settings[wds_tagTitle]" size="70" maxlength="70" value="<?php echo $wds_options['wds_tagTitle'];?>" ></input></label></p>
	</td></tr>
	<tr><td><p><label for="wds_settings[wds_tagDesc]"><b>tag Description</b>:</td>
	<td><textarea  id="wds_settings[wds_tagDesc]" name="wds_settings[wds_tagDesc]" rows="02" cols="75" value=""><?php echo $wds_options['wds_tagDesc'];?></textarea></label></p></td> </tr>
	<tr>
<p><td><label for="wds_settings[wds_tagtags]"><b>tag Meta tags</b>:(separated by coma)</td>
	<td>	<input id="wds_settings[wds_tagtags]" name="wds_settings[wds_tagtags]" size="100" value="<?php echo $wds_options['wds_tagtags'];?>" /></label></p></td>
	</tr>
	</table>