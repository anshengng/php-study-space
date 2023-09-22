<?php
    $name="liukun"; //定义变量,以$開頭
    $_="_";
    $name2='$_';
    echo $name,$_,$name2;
    echo var_dump($name);
    
    $a=1;
    $b=$a;
    echo $a,$b;//a,b不会互相影响  11

    $c=2;
    $d=&$c;
    $d=22;
    echo $c,$d;//d指向c的空间，互相影响，类似js引用数据类型 2222

    //单行注释
    # 单行

    /**
     * 多行
     */