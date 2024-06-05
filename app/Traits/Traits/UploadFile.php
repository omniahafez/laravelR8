<?php

namespace App\Traits\Traits;

trait UploadFile
{
    public function upload($imageFile){
        $imgExt = $imageFile->getClientOriginalExtension();
        $fileName = time().'.' . $imgExt;
        
        $path = 'assets/images';
        
        $imageFile->move($path, $fileName);
        return $fileName;

    }

}
