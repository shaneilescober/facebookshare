<?php
class common
{
	function modelContents()
	{
		return getInstance('modelFbshare');
	}
	
	function getFullUrl() {
		return $_SERVER['REQUEST_URI'];
	}
}