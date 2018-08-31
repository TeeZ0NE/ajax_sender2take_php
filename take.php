<?php
/**
 * Created by PhpStorm.
 * User: teez0ne
 * Date: 22.08.18
 * Time: 12:25
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//print_r($_SERVER['REQUEST_METHOD']);
header('Pragma: no-cache');
header('Content-type: text/plain');
header('Access-Control-Allow-Origin: *');
$service = $_REQUEST['service']??"test service";
if ($_REQUEST['service'])unset($_REQUEST['service']);
$obj = $_REQUEST;
$curr_date =  date('d.m.Y',time());
echo "done";
/*file_put_contents(
	sprintf('logs/%2$s_%1$s.stat.csv',$curr_date,$service),
	implode(';',$obj).PHP_EOL,FILE_APPEND|LOCK_EX
);
//echo ob_get_length();
//print_r(get_headers($_SERVER['HTTP_REFERER'],1));
