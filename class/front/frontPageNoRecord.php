<?php
class frontPageNoRecord extends Controller_Front
{
    protected function run($aArgs)
    {
        $aOption['seq'] = $this->getSequence();
        $connection = new modelFbshare();
    	$iResultCount = $connection->checkdb($aOption['seq']);
    	
        if ($iResultCount['cId'] > 0) $this->fetchClear();
    	$this->assign('error', 'No records found.');
        
    }
}
