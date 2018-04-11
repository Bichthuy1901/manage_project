<?php
namespace App\Helper;
class Helper
{
    public static function upload($file, $folderName) 
    {
        $time = microtime();// tranh trung ten sau moi lan update
        $time = str_replace(" ", "", $time);
        $filename = $time . $file->getClientOriginalName();//lay ten anh gan vao bien $filename
        $file->move($folderName, $filename);
        return $filename; 
    }
}