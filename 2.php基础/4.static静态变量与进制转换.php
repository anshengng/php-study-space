<?php
function make()
{
    $num = 1;
    $num = $num + 1;
    return $num.'<hr/>';
}
echo make(); // 2
echo make(); // 2
/**
 * 不使用static时每次都重新创建 $num
 */

 
function make2()
{
    static $num = 1;
    $num = $num + 1;
    return $num.'<hr/>';
}
echo make2(); // 2
echo make2(); // 3
/**
 * $num在内存中能保留，持久化保存
 */


/**
 * 数据类型
 * integer
 * float
 * string
 * boolean
 * array
 * object
 */
echo octdec(777); //八进制装换为十进制

echo hexdec('FFF'); //十六进制转为十进制

//转义符 \
echo '<hr/>';
$string='liukun';
echo "I'm fine, \$string \t\t\tthank \nyou."; //\t表示空格 \n表示换行 （在源码中，浏览器中是没有的）
