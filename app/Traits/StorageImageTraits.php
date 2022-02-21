<?php
namespace App\Traits;
// use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
trait StorageImageTraits{
    public function StorageImageUpdate($request , $fieldName, $folderName)
    {
        if($request->hasFile($fieldName)){
            $file = $request->$fieldName;
            $filenameOrigin = $file->getClientOriginalName(); // phương thức lấy đúng tên file
            $filename = str::random(20).'.'.$file->getClientOriginalExtension();
            $filepath = $request->file($fieldName)->storeAs('public/'.$folderName.'/'.auth()->id(),$filename);
            $dataUploadTrait = [
                'file_name' => $filenameOrigin,
                'file_path' => Storage::url($filepath)
            ];
            return $dataUploadTrait;
        }else{
            return null;
        }
    }

    public function StorageImageUpdateMutiple($file , $folderName)
    {
        $filenameOrigin = $file->getClientOriginalName(); // phương thức lấy đúng tên file
        $filename = str::random(20).'.'.$file->getClientOriginalExtension();
        $filepath = $file->storeAs('public/'.$folderName.'/'.auth()->id(),$filename);
        $dataUploadTrait = [
            'file_name' => $filenameOrigin,
            'file_path' => Storage::url($filepath)
        ];
        return $dataUploadTrait;
    }
    public function StorageImages($file , $folderName)
    {
        $destination_path = 'public/images/'.$folderName.'/';
        $ext = $file->extension();
        $image_name = time().str::random(2).'-'.$folderName.'.'.$ext;
        $file->storeAs($destination_path,$image_name);
        $dataUploadTrait = [
            'image' => $image_name,
        ];
        return $dataUploadTrait;
    }


    public function StorageImage($request, $fileName,$folderName){
        if($request->hasFile($fileName)){
            $destination_path = 'public/images/'.$folderName;
            $image = $request->file($fileName);
            $ext = $image->extension();
            $image_name = time().'-'.$folderName.'.'.$ext;
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $input[$fileName] = $image_name;
        }
        return $input[$fileName];
    }
}





?>