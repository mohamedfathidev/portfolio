<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;


trait UploderService
{
    /**
     * Upload an image to the specified directory.
     *
     * @param UploadedFile $file
     * @param string $directory
     * @return string
     */

     public function uploadImage(UploadedFile $file, string $directory = 'images'): string
     {
        // generate a unique name for the file 
        $fileName = time()."_".uniqid().".".$file->getClientOriginalExtension();

         // Store the file in the specified directory (e.g., storage/app/public/images)
        $filePath = $file->storeAs($directory, $fileName, 'public');

        // return the file path 
        return $filePath;
     }

}




?>