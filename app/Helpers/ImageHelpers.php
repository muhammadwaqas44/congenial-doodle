<?php
/**
 * Created by PhpStorm.
 * User: bilal
 * Date: 4/27/18
 * Time: 12:22 PM
 */

namespace App\Helpers;


use Illuminate\Http\Request;
use Image;

class ImageHelpers
{

    ///////     Type can be link or anything else. In $file we will receive path of file or object of file
    public static function updateProfileImage($folderName = "storage/public/profile_images/", $file,$type, $fileName){

        if($type == 'link'){
            Image::make($file)->save(public_path($folderName . $fileName));
        }else{
            Image::make($file)->save(public_path($folderName . $fileName));
            return "ok";
        }

    }

    public static function uploadFile($folderName = '/files/' , $file , $fileName){
        $filename = $fileName;

        $destinationPath = public_path($folderName);

        $thisNmae =$file->move($destinationPath,$filename);
    }

}
