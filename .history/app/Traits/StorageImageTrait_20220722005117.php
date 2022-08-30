<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

trait StorageImageTrait
{
    public function storagetraitsUpload($request, $fileName, $folderName)
    {
        dd(Auth::user());
        if ($request->hasFile($fileName)) {

            $filePath = $request->file($fileName)->store('public/' . $folderName . '/' . Auth::user()->id);
            $data = [
                'file_name' => $request->file($fileName)->getClientOriginalName(),
                '$file_path' => Storage::url($filePath)
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
            '$file_path' => Storage::url($filePath)
        ];
        return $data;
    }
}
