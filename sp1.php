<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/20
 * Time: 11:50
 */
require 'sphinxapi.php';
$cl  = new SphinxClient();
$q   = $_GET['key'] ?? 'test'; //模拟关键字
$sql = '';
//$mode = SPH_MATCH_ALL;
$host  = '127.0.0.1';
$port  = 9312;
$index = '*';
$cl->SetServer($host, $port);
$cl->SetConnectTimeout(10);
$cl->SetArrayResult(true);
$res = $cl->Query($q, $index);
print_r($res['matches']);
