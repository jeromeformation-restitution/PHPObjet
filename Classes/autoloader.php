<?php

function autoloader($auto){

	require_once 'class/'.$auto.'.php';

}

spl_autoload_register('autoloader');
