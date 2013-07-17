<?php 
class modelFbshare extends Model
{
	//function for checking database if there is an existing record or not specified by sequence
	public function checkdb($seq)
	{
		$sSql = "SELECT COUNT(idx) as cId FROM fb_share_settings WHERE seq = {$seq}";
		$bNull = $this->query($sSql, row);
		return $bNull;
	}
	//inserts data into fb_share_settings table
	public function insertdata($aData)
	{
		$sSql = "INSERT INTO fb_share_settings 
		(seq, 
		auto_display, 
		style, 
		link_lbl, 
		position_css) 
		VALUES 
		({$aData['seq']}, 
		{$aData['auto_display']},
		'{$aData['style']}',
		'{$aData['link_lbl']}',
		'{$aData['position_css']}')";
		
		$bInsert = $this->query($sSql);
		if($bInsert === false){
			return false;
		}else{
			return true;
		}
	}
	//updates data in fb_share_settings table
	public function updatedata($aData)
	{
		$sSql = "UPDATE fb_share_settings
		SET
		auto_display={$aData['auto_display']},
		style='{$aData['style']}',
		link_lbl='{$aData['link_lbl']}',
		position_css='{$aData['position_css']}' 
		WHERE seq = {$aData['seq']}";
		
		$bUpdate = $this->query($sSql);
		if($bUpdate === false){
			return false;
		}else{
			return true;
		}
	}
	//gets saved settings from fb_share_settings
	public function getSettings($aOption)
	{
		$sSql = "SELECT * FROM fb_share_settings WHERE seq = {$aOption['seq']}";
		$data = $this->query($sSql, row);
		return $data;
	}
	//deletes sequence record from facebookshare_sequence
	function deleteContentsBySeq($aSeq)
	{
		$sSeqs = implode(',', $aSeq);
		$sQuery = "Delete from facebookshare_sequence where seq in($sSeqs)";
		$mResult = $this->query($sQuery);
		return $mResult;
	}
}