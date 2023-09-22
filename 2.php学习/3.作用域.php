<?php
$name = 'liukun';
function show()
{
    // echo $name; 函数的作用域中是无法访问到$name的
    global $name; //使用global或者传参
    // echo $GLOBALS['name'];
    echo $name;
    echo '<br/>';
    print_r($_GET); //获取地址栏参数 xxx?name=lk
}
show();

/**
 * 变量检测与删除
 */
$name2 = 'liukun';
var_dump(isset($name2)); //判断变量是否存在
unset($name2); //删除变量
// var_dump(isset($name2));

// function show2()
// {
//     global $name2; 
//     unset($name2); //这样是无法删除的
// }
// show2();
// echo $name2;
