<?php
class apiGetSettings extends Controller_Api
{
	protected function get($aArgs)
	{
		require_once('builder/builderInterface.php');
		usbuilder()->init($this, $aArgs);
		
		//gets saved settings from database 
		$data = common()->modelContents()->getSettings($aArgs['dSeq']);
		return $data;
	}
}