<?php 
	
	// define site url
	if (!define('_SITE_URL','http://localhost/uk17/')){
		define('_SITE_URL','http://localhost/uk17/');
	}

	// define admin url
	if (!define('_ADMIN_SITE_URL','http://localhost/uk17/admin/')){
		define('_ADMIN_SITE_URL','http://localhost/uk17/admin/');
	}

	// site title
	if (!define('_SITE_TITLE','UK17')){
		define('_SITE_TITLE','UK17');
	}
	//logo path
	if (!define('_SITE_LOGO','UK17')){
		define('_SITE_LOGO','UK17');
	}
	// all right resreve
	if (!define('_SITE_ALL_RIGHT','UK17 Right Reserved 2024')){
		define('_SITE_ALL_RIGHT','UK17 Right Reserved 2024');
	}



	 

	/* ================= ADMIN CSS , JS AND IMAGE START HERE =================*/
		$csslink = _ADMIN_SITE_URL.'assets/css/';
		$jslink  = _ADMIN_SITE_URL.'assets/js/';
		$imglink = _ADMIN_SITE_URL.'assets/img/';
		$pluginlink  = _ADMIN_SITE_URL.'assets/plugin/';

		if (!define('_CSS_ADMIN_URL',$csslink))
		{
			define('_CSS_ADMIN_URL',$csslink);
		}
		if (!define('_JS_ADMIN_URL',$jslink))
		{
			define('_JS_ADMIN_URL',$jslink);
		}
		if (!define('_IMG_ADMIN_URL',$imglink))
		{
			define('_IMG_ADMIN_URL',$imglink);
		}
		if (!define('_PLUGIN_ADMIN_URL',$pluginlink))
		{
			define('_PLUGIN_ADMIN_URL',$pluginlink);
		}
	/* ================= END HERE =================*/


	/* ================= FRONTEND CSS , JS AND IMAGE START HERE =================*/
		$front_csslink = _SITE_URL.'css/';
		$front_jslink  = _SITE_URL.'js/';
		$front_imglink = _SITE_URL.'img/';
		$front_pluginlink  = _SITE_URL.'plugin/';

		if (!define('_CSS_SITE_URL',''))
		{
			define('_CSS_SITE_URL',$front_csslink);
		}
		if (!define('_JS_SITE_URL',''))
		{
			define('_JS_SITE_URL',$front_jslink);
		}
		if (!define('_IMG_SITE_URL',''))
		{
			define('_IMG_SITE_URL',$front_imglink);
		}
		if (!define('_PLUGIN_SITE_URL',''))
		{
			define('_PLUGIN_SITE_URL',$front_pluginlink);
		}
	/* ================= END HERE =================*/

?>