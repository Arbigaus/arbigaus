<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == "development") {
	define("BASE", "http://arbigaus.pc");
	$config['dbname'] = 'arbigaus';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'projetos';
	$config['dbpass'] = 'g123456@*';
} else {
	define("BASE", "http://arbigaus.com");
	$config['dbname'] = 'u785659193_arb';
	$config['host'] = 'mysql.hostinger.com.br';
	$config['dbuser'] = 'u785659193_arb';
	$config['dbpass'] = 'njzeVu4O316';
}
