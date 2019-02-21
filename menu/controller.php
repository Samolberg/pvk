<?php
else
{
    $fn = CONTROLLER_DIR.DEFAULT_CONTROLLER.'.php';
    echo $fn;
    $http->set('controller', DEFAULT_CONTROLLER);
    require_once $fn;
}