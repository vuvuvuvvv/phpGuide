<?php
    function countWords($str){
        //print_r(array_count_values(explode(" ",$str)));
        $strArr = explode(" ",$str);    //cutArray
        echo "<pre>";
        print_r(array_count_values($strArr));  //countValues
        echo "</pre>";
    }
    countWords("Write a function countWords(\$str) that takes any string of characters and finds the number of times each string occurs");
?>