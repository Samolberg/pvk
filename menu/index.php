<?php
define('BASE_DIR','./');
require_once BASE_DIR.'conf.php';

$mainTmpl = new Template('main');
$mainTmpl->set('title', 'Menu Application');

require_once BASE_DIR.'controller.php';

$mainTmplContent = $mainTmpl->parse();
echo $mainTmplContent;

//echo '<pre>';
//print_r($mainTmpl);
//echo '</pre>';
?>