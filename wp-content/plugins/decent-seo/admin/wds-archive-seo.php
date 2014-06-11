<br />
<table class="widefat">
      <thead>
        <tr>
          <th scope="col" style="width: 40%;"><?php _e('archive SEO'); ?></th><th></th>
        </tr>
      </thead>

<tr><td><label for="wds_settings[wds_archiveTitle]"><b>Enter Your archive seo  Title    </b>: </td> 
	<td>	<input id="wds_settings[wds_archiveTitle]" name="wds_settings[wds_archiveTitle]" size="70" maxlength="70" value="<?php echo $wds_options['wds_archiveTitle'];?>" ></input></label></p>
	</td></tr>
	<tr><td><p><label for="wds_settings[wds_archiveDesc]"><b>archive Description</b>:</td>
	<td><textarea  id="wds_settings[wds_archiveDesc]" name="wds_settings[wds_archiveDesc]" rows="02" cols="75" value=""><?php echo $wds_options['wds_archiveDesc'];?></textarea></label></p></td> </tr>
	<tr>
<p><td><label for="wds_settings[wds_archivetags]"><b>archive Meta tags</b>:(separated by coma)</td>
	<td>	<input id="wds_settings[wds_archivetags]" name="wds_settings[wds_archivetags]" size="100" value="<?php echo $wds_options['wds_archivetags'];?>" /></label></p></td>
	</tr>
	</table>