<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

trait StorageImageTrait
{

    /*
        Thực thi update file vào storage/public/...
    */
    public function storagetraitsUpload($request, $fileName, $folderName)
    {

        if ($request->hasFile($fileName)) {
            $filePath = $request->File($fileName)->store('public/' . $folderName . '/' . Auth::user()->id);
            $data = [
                'file_name' => $request->file($fileName)->getClientOriginalName(),
                'file_path' => Storage::url($filePath)
            ];
            return $data;
        }
        return null;
    }
    public function storagetraitsUploadMutiple($fileName, $folderName)
    {
        $filePath = $fileName->store('public/' . $folderName . '/' . Auth::user()->id);
        $data = [
            'file_name' => $fileName->getClientOriginalName(),
            'file_path' => Storage::url($filePath)
        ];
        return $data;
    }
}
