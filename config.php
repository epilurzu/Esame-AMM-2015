<?
session_start();

/*
$config['host'] = 'localhost';
$config['user'] = 'root';
$config['pass'] = '';
$config['db']   = 'enrico-blog';
*/

$config['host'] = 'localhost';
$config['user'] = 'poddaEnrico';
$config['pass'] = 'pappagallo7338';
$config['db']   = 'amm15_poddaEnrico';

$config['conn'] = mysql_connect ($config['host'], $config['user'], $config['pass']) or die ('Unable to connect to server, check the configuration file.............................');
                  mysql_select_db ($config['db'], $config['conn']) or die('Unable to connect to database, check the configuration file');
						 
$config['sql_config']	= "SELECT * FROM config";
$config['row']			= mysql_fetch_array(mysql_query($config['sql_config'], $config['conn']));
$config['sql_template']	= "SELECT * FROM template";
$config['template']		= mysql_fetch_array(mysql_query($config['sql_template'], $config['conn']));
?><?
session_start();

$config['host'] = 'localhost';
$config['user'] = 'root';
$config['pass'] = '';
$config['db']   = 'enrico-blog';

$config['conn'] = mysql_connect ($config['host'], $config['user'], $config['pass']) or die ('Unable to connect to server, check the configuration file');
                  mysql_select_db ($config['db'], $config['conn']) or die('Unable to connect to database, check the configuration file');
						 
$config['sql_config']	= "SELECT * FROM config";
$config['row']			= mysql_fetch_array(mysql_query($config['sql_config'], $config['conn']));
$config['sql_template']	= "SELECT * FROM template";
$config['template']		= mysql_fetch_array(mysql_query($config['sql_template'], $config['conn']));
?>