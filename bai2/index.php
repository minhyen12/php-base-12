<?php
    function checkString($str) {
	    if ((strpos($str, 'restaurant') !== false && strpos($str, 'book') === false) || (strpos($str, 'restaurant') === false && strpos($str, 'book') !== false)) {
		    return true;
	    }
	    return false;
    }

    function countWord($str) {
        $strArr = explode(".", $str); 
        $count = count($strArr); 
        foreach ($strArr as $item) {
            if (empty($item) && $count > 0) {
                $count--;
            }
        }
        return $count;
    }

    $filename = ['file1.txt', 'file2.txt'] ;
    foreach ($filename as $key => $value) {
        $myfile = fopen($value, 'r');
        $connect = fread($myfile, filesize($value));
        if(checkString($connect) === true) {
            $countWord = countWord($connect);
            echo "chuoi hop le<br>";
            echo "Số câu trong chuỗi: ".$countWord."<br>";
        }
        else {
            echo 'chuoi khong hop le<br>';
        }
        fclose($myfile);
        if ($key < count($filename) - 1) {
            echo "======================================<br>";
            //test
        }
    }
?> 
