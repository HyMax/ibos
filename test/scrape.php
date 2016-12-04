<?php

require_once '../vendor/autoload.php';

use QL\QueryList;

$rules = array(
    // 采集class=news-info 的div元素
    'date' => array('dt', 'text'),
    'company' => array('dd', 'text'),
    
//     'date' => array('.news-info>dl>dt', 'text'),
//     'company' => array('.news-info>dl>dd', 'text'),
);

$data = QueryList::Query('http://www.ibos.com.cn/index', $rules, '.news-info>dl')->data;

$map = array_map(function ($v) {
    return implode(',', $v);    
}, $data);

file_put_contents('output.csv', "authorization date,company name\r\n");
file_put_contents('output.csv', implode("\r\n", $map), FILE_APPEND);

