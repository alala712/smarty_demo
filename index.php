<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT_PATH',realpath(dirname(__FILE__)).DS);
require(ROOT_PATH.'libs'.DS.'Smarty.class.php');

$smarty = new Smarty;

$smarty->compile_dir = ROOT_PATH.'compile_dir';
$smarty->cache_dir = ROOT_PATH.'cache_dir';
$smarty->config_dir = ROOT_PATH.'config_dir';
$smarty->template_dir = ROOT_PATH.'template_dir';

$smarty->caching = 1;

$smarty->assign('name','aaa');

$smarty->display('index.tpl');
?>