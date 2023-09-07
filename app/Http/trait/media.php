<?php

namespace App\Http\trait;

use Illuminate\Support\Facades\Hash;




trait media
{
    public function Upload_image($image,$folder)
    {
        $PhotoName=uniqid().'.'.$image->extension();
        $image->move(public_path('/images/'.$folder),$PhotoName);
        return $PhotoName;
    }

    public function hash($data)
    {
        return Hash::make($data);
    }

    public function deletePhoto($photoPath)
    {
        if(file_exists($photoPath)){
            unlink($photoPath);
            return true;
        }
        return false;
    }

}





