<?php 
class adminExecIndex extends Controller_AdminExec
{
	public function run($aArgs)
	{
		require_once('builder/builderInterface.php');
		usbuilder()->init($this, $aArgs);
		
		//gets data from $aArgs
		$aData['seq'] = $aArgs['seq'];
		$aData['auto_display'] = $aArgs['bool_display'];
		$aData['style'] = $aArgs['share_btn_style'];
		$aData['link_lbl'] = $aArgs['icon_link_label'];
		$aData['position_css'] = $aArgs['share_btn_position'];
		
		//checks if database already has a record depending on the sequence
		$bNull = common()->modelContents()->checkdb($aData['seq']);
		
		//inserts or updates database 
		if($bNull['cId'] === "0"){
			$bSave = common()->modelContents()->insertdata($aData);
		}else{
			$bSave = common()->modelContents()->updatedata($aData);
		}
		
		//show message whether or not data has been saved.
		if($bSave === true){
			usbuilder()->message($sMessage, $sType = 'success');
			usbuilder()->message('Saved succesfully');
		}else{
			usbuilder()->message('Oops. Something went wrong.', 'warning');
		}
		
		//redirects back to adminPageIndex
		usbuilder()->jsMove($aArgs['return_url']);
		
		//usbuilder()->vd($bNull);
	}
}