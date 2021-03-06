<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader {

	function __construct()
	{
		parent::__construct();
	}
	
	public function template($template_name, $data = array(), $return = false )
	{
		$CI =& get_instance();
		define('PAGE_TITLE', isset($CI->title) ? $CI->title : 'AVENXO' );
		define('CDN', $CI->config->item('cdn') ? $CI->config->item('cdn') : base_url() );
		
		$data['content'] = $this->view($template_name, $data, true);
		$data['menu'] = $this->view('template/side_menu', $data, true);
		if ($return) return $this->parseContent($this->view('template/main_template', $data, true));
		else echo $this->parseContent($this->view('template/main_template', $data, true));
	}
	
	private function parseContent($content)
	{
		$matches = array();
		$section = array();
		$search = array();
		$replace = array();
		
		preg_match_all('/\[section name=\"(.+?)\"\](.+?)\[\/section\]/s', $content, $matches);
		
		if (is_array($matches[1])) foreach($matches[1] as $i => $row)
		{
			$section[$row] = $matches[2][$i];
			$search[] = '/\[section=\"'.$row.'\"(.*)\]/';
			$replace[] = $matches[2][$i];
		}
		
		$content = preg_replace('/\[section (.+?)\[\/section\]/s', '', $content);
		$content = preg_replace($search, $replace, $content);
		$content = preg_replace('/\[section(.*)default\=\"(.*)\"(.*)\]/', '$2', $content);
		$content = preg_replace('/\[section(.*)\]/', '', $content);
		return $content;
	}
}