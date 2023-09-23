<?php
// function show($var)
// {
//     return ++$var;
// }
// echo show(2);

// $var = 2;
// function show(&$var) //使参数指定外层的var 传址
// {
//     $var = 1;
//     echo $var; // 1
// }

// show($var);
// echo $var; // 1

// function show(...$args)
// {
//     print_r($args); //array
// }
// show(2,3,34,4);

//函数类型限制
declare(strict_types=1); //严格模式
function show(int ...$args): array
{
    return $args;
}
print_r(show(2, 3, 4));

try {
    show(2, 3, 4, '2');
} catch (\Throwable $th) {
    echo $th; //typeError
}

echo '<hr/>';
$file='xx.jpg';
echo trim(strrchr($file, '.'),'.'); //返回最后一次出现的位置及其后面的部分