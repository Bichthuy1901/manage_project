<?php
namespace App\Helper;
class Helper
{
    public static function upload($file, $folderName) 
    {
        $filename = $file->getClientOriginalName();//lay ten anh gan vao bien $filename
        $file->move($folderName, $filename);
        return $filename; 
    }
}