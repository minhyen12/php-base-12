<?php
    function checkString($str, $word1, $word2) 
    {
	    if ((strpos($str, $word1) && !strpos($str, $word2)) || (!strpos($str, $word1) && strpos($str, $word2))) {
		    return true;
	    }
	    return false;
    }

    function countWord($str) 
    {
        $strArr = explode(".", $str); 
        $count = count($strArr); 
        foreach ($strArr as $item) {
            if (empty($item) && $count > 0) {
                $count--;
            }
        }
        return $count;
    }

    function checkFile($fileName, $word1, $word2) 
    {
        $myfile = fopen($fileName, 'r');
        $connect = fread($myfile, filesize($fileName));
        if(checkString($connect, $word1, $word2)) {
            $countWord = countWord($connect);
            echo "chuoi hop le<br>";
            echo "Số câu trong chuỗi: ". $countWord ."<br>";
        } else {
            echo 'chuoi khong hop le<br>';
        }
        fclose($myfile);
        echo "<br>";
    }

    checkFile('file1.txt', 'restaurant', 'book');
    checkFile('file2.txt', 'restaurant', 'book');
    
?> 
