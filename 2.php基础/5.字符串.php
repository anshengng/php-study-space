<?php
/**
 * 字符串定界符
 */
// $str = "<h1 style=\"color:red\">liukun</h1>";
// echo $str;

$str = <<<php
    <h1 style="color:red">liukun</h1>
php; //<<<php \n php;需要注意空格

echo $str;


/**
 * 字符串操作
 */
$str2='hello';
$name='liukun';
echo $str2.$name.'22222';

echo '<hr/>';
echo strlen($name);//求字符串长度 6
echo mb_strlen($name); // 6
echo mb_strlen($name,'utf8'); // 6

echo '<hr/>';
//使用trim去除头尾的空格
echo strlen(' liukun '); //8
echo strlen(trim(' liukun ')); //6
echo strlen(rtrim(' liukun ')); // 7 只删除右边 ltrim
echo trim(' liukun ',' n'); //liuku

echo '<hr/>';
echo ucfirst('liukun'); //Liukun 首字母大写
echo ucwords('hello liukun'); //Hello Liukun 每个单词的首字母大写
echo ucwords('hello|liukun','|');//这种需要传递分隔符信息

echo '<hr/>';
echo md5('liukun'); //hash字符
print_r(explode('.','liukun.com')); //拆分字符串,结果为数组
print_r(implode('.',['liukun','com'])); //合并字符串,结果为字符串
echo substr($name,0,3); //liu 截取字符串
$t='你好';
echo mb_substr($t,0,1,'utf8'); //你

echo '<hr/>';
echo str_repeat('*',4); //****