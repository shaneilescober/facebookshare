<?php 
class adminPageSettings extends Controller_Admin
{
	protected function run($aArgs)
	{
		//includes builder library 
		require_once('builder/builderInterface.php');
		usbuilder()->init($this, $aArgs);
		
		//gets data from form
		usbuilder()->validator(array('form' => 'fb_setting_form'));
		$sFormScript = usbuilder()->getFormAction('fb_setting_form', 'adminExecIndex');
		$this->writeJs($sFormScript);
		//assigns sequence
		$this->assign('seq', $aArgs['seq']);
		$this->assign("sUrl", common()->getFullUrl());
		$this->assign("bExtensionView", ($aArgs['etype'] ? 1 : 0));
		
		
		$this->importCss('fbshare');
		$this->importJS('facebookshare_js');
		$this->view(__CLASS__);
	}
}
