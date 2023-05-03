<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blog, $imageFile, $imageDirectory, $imageName, $imageUrl;

    public static function createBlog($request){


        self::$imageFile = $request->File('image');
        if (self::$imageFile)
        {

            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'back/image/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        }


        self::$blog               = new Blog();
        self::$blog->name         =$request->name;
        self::$blog->category     =$request->category;
        self::$blog->description  =$request->description;
        self::$blog->image        =self::$imageUrl;
        self::$blog->status       =$request->status;
        self::$blog->save();


    }

    public static function updateBlog($request, $id){

        self::$blog   = blog::find($id);


        self::$imageFile = $request->File('image');
        if (self::$imageFile)
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }



            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'back/image/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        } else{
            self::$imageUrl = self::$blog->image;

        }


        self::$blog->name         =$request->name;
        self::$blog->category     =$request->category;
        self::$blog->description  =$request->description;
        self::$blog->image        =self::$imageUrl;
        self::$blog->status       =$request->status;
        self::$blog->save();


    }



}
