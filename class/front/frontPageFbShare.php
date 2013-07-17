<?php 
class frontPageFbShare extends Controller_Front
{
	protected function run($aArgs)
	{
		require_once('builder/builderInterface.php');
		usbuilder()->init($this, $aArgs);
		
		//gets and assigns sequence
		$aOption['seq'] = $this->getSequence();
		//gets settings from database depending on sequence
		$fb_share_setting = common()->modelContents()->getSettings($aOption);
		$iResultCount = common()->modelContents()->checkdb($aOption['seq']);
		
		//fixes css depending on the extracted position of the fb share button
		if($fb_share_setting['position_css'] == "top_left"){
			$sCss = 'float: left;padding-top: 0px;padding-bottom: 5px;padding-left: 0px;padding-right: 5px;';
		}elseif($fb_share_setting['position_css'] == "top_right"){
			$sCss = 'float: right;padding-top: 0px;padding-bottom: 5px;padding-left: 5px;padding-right: 0px;';
		}elseif($fb_share_setting['position_css'] == "btm_left"){
			$sCss = 'float: left;padding-top: 5px;padding-bottom: 0px;padding-left: 0px;padding-right: 5px;';
		}else{
			$sCss = 'float: right;padding-top: 5px;padding-bottom: 0px;padding-left: 5px;padding-right: 0px;';
		}
		 
		//fixes whether fb share button will be displayed or not
		if($fb_share_setting['auto_display'] == 1){
			$sHtml = '<a name="fb_share" type="'.$fb_share_setting['style'].'" style = "'.$sCss.'">'.$fb_share_setting['link_lbl'].'</a>';
		}else{
			$sHtml = '<a name="fb_share" type="'.$fb_share_setting['style'].'" style = "display:none">'.$fb_share_setting['link_lbl'].'</a>';
		}
		$script = '<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>';
		$this->assign('fbsharebtn', $sHtml);
		$this->assign('fbscript', $script);
		if ($iResultCount == 0) $this->fetchClear();
	}
}