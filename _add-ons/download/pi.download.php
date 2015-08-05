<?php
class Plugin_download extends Plugin
{

	public function index()
	{
		$file 	   = $this->fetchParam(array('file', 'filename', 'url'), null, null, false, false);
		$as   	   = $this->fetchParam('as', null, null, false, false);
		$logged_in = $this->fetchParam('logged_in');
		$override  = $this->fetchParam('override');

		$url = URL::prependSiteRoot('/TRIGGER/download/download?file='.$file);
		
		if ($as) {
			$url .= '&as='.$as;
		}
		
		if (!$logged_in && $override) {
			$url .= '&logged_in='.$logged_in.'&override='.$override;
		}
		
		return $url;
	}

}
