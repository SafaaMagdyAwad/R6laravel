<?php

namespace App;

trait Common
{

    public function upload_file( $file, $path){

        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;

        $file->move($path, $file_name);
        return $file_name;
    }
}
