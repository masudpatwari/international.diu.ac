<?php


function resizeImage($resource)
{
    $file = getimagesize($resource);
    $width = $file[0];
    $height = $file[1];
    $imageType = $file[2];
    $fileNewName = md5($resource->getClientOriginalName());
    $ext = $resource->getClientOriginalExtension();

    /*
     * PNG IMAGE TYPE 3
     * GIF IMAGE TYPE 1
     * JPEG/JPG IMAGE TYPE 2
     * */

    if ($imageType == 3)
    {
        $imageResourceId = imagecreatefrompng($resource);
        $targetLayer = resizeTool($imageResourceId, $width, $height);
        imagepng($targetLayer, env('UPLOAD_PATH'). $fileNewName. "_thump.". $ext);
    }
    else if ($imageType == 1)
    {
        $imageResourceId = imagecreatefromgif($resource);
        $targetLayer = resizeTool($imageResourceId, $width, $height);
        imagegif($targetLayer, env('UPLOAD_PATH'). $fileNewName. "_thump.". $ext);
    }
    else if ($imageType == 2)
    {
        $imageResourceId = imagecreatefromjpeg($resource);
        $targetLayer = resizeTool($imageResourceId, $width, $height);
        imagejpeg($targetLayer, env('UPLOAD_PATH'). $fileNewName. "_thump.". $ext);
    }
    else
    {
        return 'Invalid File Format';
    }
}

function resizeTool($imageResourceId,$width,$height) {
    $targetWidth = 60;
    $targetHeight = 60;
    $targetLayer = imagecreatetruecolor($targetWidth,$targetHeight);
    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);

    return $targetLayer;
}