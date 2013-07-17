var facebookshare_settings = {
	//submit form
	save: function(){
		if($('[name=share_btn_style]:checked').val() == "icon_link"){
			if(oValidator.formName.getMessage("fb_setting_form")){
				$('[name=fb_setting_form]').submit();
			}else{
				oValidator.generalPurpose.getMessage(false,"Please input a text link for this button style.");
			}
		}else{
			$('[name=fb_setting_form]').submit();
		}
	},
	//resets form values to default
	reset: function(){
		$('[name=bool_display]').filter("[value=1]").prop("checked", true);
		$('[name=share_btn_style]').filter("[value=box_count]").prop("checked", true);
		$('[name=share_btn_position]').filter("[value=top_left]").prop("checked", true);
		$('[name=icon_link_label]').val("");
	}
}

$(document).ready(function(){
	var sUrl = usbuilder.getUrl('apiGetSettings');
	var seq = $('[name=seq]').val();
	
	$.ajax({
		dataType: "json",
		type: "GET",
		url: sUrl,
		data: "dSeq=" + seq,
		success: function(info){
			$('[name=bool_display]').filter("[value=" + info.Data.auto_display + "]").prop("checked", true);
			$('[name=share_btn_style]').filter("[value=" + info.Data.style + "]").prop("checked", true);
			$('[name=share_btn_position]').filter("[value=" + info.Data.position_css + "]").prop("checked", true);
			if($('[name=share_btn_style]').val() == "icon_link"){
				$('[name=icon_link_label]').val(info.Data.link_lbl);
			}
			
		}
	});
});
