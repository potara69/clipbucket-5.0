<?php
	/**
	* File: Index
	* Description: This is home page of your wesbite. Anyone who lands on your website
	* using home page URL will see this page first
	* @author: Arslan Hassan
	* @since: 2007, ClipBucket v2.0
	* @website: clip-bucket.com
	* Copyright (c) 2007-2017 Clip-Bucket.com. All rights reserved
	* @modified : { January 10th, 2017 } { Saqib Razzaq } { Updated copyright date }
	*/

	error_reporting(-1);
	ini_set('display_errors', 1);

	define('THIS_PAGE','index');
	require 'includes/config.inc.php';
	$pages->page_redir();

	if(is_installed('editorspick')) {
		assign('editor_picks',get_ep_videos());
	}

	if( !$userquery->perm_check('view_videos',false, false, true) && !userid() )
	{
		template_files('signup_or_login.html');
	} else {
		template_files('index.html');
	}
	display_it();
