<?php
require 'environment.php';

define("BASE", "http://arbigaus.com");
global $config;
$config = array();
if(ENVIRONMENT == "development") {
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'projetos';
	$config['dbpass'] = 'g123456@*';
} else {
	$config['dbname'] = 'u785659193_arb';
	$config['host'] = 'mysql.hostinger.com.br';
	$config['dbuser'] = 'u785659193_arb';
	$config['dbpass'] = 'njzeVu4O316';
}
