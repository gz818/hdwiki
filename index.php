<?php
	
/*the hdwiki entrance */
error_reporting(0);
//error_reporting(E_ALL);

@set_magic_quotes_runtime(false);
ini_set('magic_quotes_runtime', 0);

$mtime = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];

define('IN_HDWIKI', TRUE);
define('HDWIKI_ROOT', dirname(__FILE__));

include HDWIKI_ROOT.'/model/hdwiki.class.php';

$hdwiki = new hdwiki();
$hdwiki->run();
?>