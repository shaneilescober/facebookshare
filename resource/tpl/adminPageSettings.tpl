<div id="sdk_message_box"></div>

<div id = "fb_setting_1">
	<form name = "fb_setting_form" class = "fb_setting_form">
		<input type = "hidden" name = "seq" value = "<?php echo $seq; ?>" />
		<input type="hidden" name="return_url" value="<?php echo $sUrl; ?>" />
		<table style = "width:100%">
			<tr>
				<td class = "fb_share_label">Display button automatically based on option below?</td>
				<td class = "fb_share_options"><span style = "margin-left:90px"><input type = "radio" name = "bool_display" value = "1" checked>&nbsp;Yes</span></td>
				<td class = "fb_share_options"><span style = "margin-left:90px"><input type = "radio" name = "bool_display" value = "0">&nbsp;No</span></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td class = "fb_share_label">Style</td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_style" value = "box_count" checked><br />
						<img src = "/_sdk/img/facebookshare/box_count.png">
					</center>
				</td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_style" value = "button_count"><br />
						<img src = "/_sdk/img/facebookshare/button_count.png">
					</center>
				</td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_style" value = "button"><br />
						<img src = "/_sdk/img/facebookshare/button.png">
					</center>
				</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_style" value = "icon"><br />
						<img src = "/_sdk/img/facebookshare/icon.png">
					</center>
				</td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_style" value = "icon_link"><br />
						<img src = "/_sdk/img/facebookshare/icon.png">
						<input type = "text" name = "icon_link_label" id = "icon_link_label" fw-filter = "isFill">
					</center>
				</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td class = "fb_share_label">Position</td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_position" value = "top_left" checked><br />Top Left<br /><br />
						<span class = "share_btn_css">
							float: left;<br />
							padding-top: 0px;<br />
							padding-bottom: 5px;<br />
							padding-left: 0px;<br />
							padding-right: 5px;<br />
						</span>
					</center>
				</td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_position" value = "top_right"><br />Top Right<br /><br />
						<span class = "share_btn_css">
							float: right;<br />
							padding-top: 0px;<br />
							padding-bottom: 5px;<br />
							padding-left: 5px;<br />
							padding-right: 0px;<br />
						</span>
					</center>
				</td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_position" value = "btm_left"><br />Bottom Left<br /><br />
						<span class = "share_btn_css">
							float: left;<br />
							padding-top: 5px;<br />
							padding-bottom: 0px;<br />
							padding-left: 0px;<br />
							padding-right: 5px;<br />
						</span>
					</center>
				</td>
				<td class = "fb_share_options">
					<center>
						<input type = "radio" name = "share_btn_position" value = "btm_right"><br />Bottom Right<br /><br />
						<span class = "share_btn_css">
							float: right;<br />
							padding-top: 5px;<br />
							padding-bottom: 0px;<br />
							padding-left: 5px;<br />
							padding-right: 0px;<br />
						</span>
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<a id = "upload_image" class = "btn_nor_01 btn_width_st2" title = "Save settings" onclick = "facebookshare_settings.save()" style = "cursor:pointer;">Save Settings</a>&nbsp;
					<a class = "add_link" onclick = "facebookshare_settings.reset()" title = "Reset to default" style = "cursor:pointer;">Reset to Default</a>
				</td>
				<td>
					<?php  if ($bExtensionView === 1){
			            echo '<a href="/admin/sub/?module=ExtensionPageManage&code=' . ucfirst(APP_ID) . '&etype=MODULE" class="add_link" title="Return to Manage Facebook Share">Return to Manage Facebook Share</a>';
			        }?>
				</td>
				<td>
					<?php  if ($bExtensionView === 1){
			            echo '<a href="/admin/sub/?module=ExtensionPageMyextensions" class="add_link" title="Return to My Extensions">Return to My Extensions</a>';
			        }?>
				</td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>