<?php
/**
 * 常量
 */
// define('NAME','liukun');
const NAME = 'liukun';
const NAME2 = 'liukun';
echo NAME;
echo defined('NAME'); //判断是否存在

function show()
{
    echo NAME; //常量不需要global，不受访问限制
}

show();

echo PHP_VERSION; //php版本 8.0.26
echo PHP_OS; //系统 winnt

print_r(get_defined_constants(true)['user']); //获取所有常量中的user下的常量

/**
 * ?: 和 ？？
 */
$isTest = true;
echo $isTest ? '是' : '否'; //是
$istest2 = null;
echo $isTest ?? '是'; //true $isTest存在且非空
echo $istest2 ?? '是'; //是 

