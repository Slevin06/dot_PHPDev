<?php

//htmlspecial~は冗長なので関数化しておくと便利。
//function内ではたんに処理するだけでなくreturnしないと
//値が返ってこないので注意
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}