<?php

namespace App\Models;


class Upload
{
    private static $upload_berita = [
        [
            "title" => "Berita 2",
            "slug" => "Berita-2",
            "author"=> "Bu Mena",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis corporis quasi consequuntur. Ut, cupiditate! Sunt dolorem tempore odit illo delectus enim reiciendis, mollitia aspernatur dignissimos esse earum iusto illum quam! Debit"
        ],
        [
            "title" => "Berita 1",
            "slug" => "Berita-1",
            "author"=> "Bu Anik",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet qui sit eum excepturi non deleniti alias nihil eaque consectetur, sequi totam! Dolorem, quo corrupti necessitatibus quasi cupiditate minus quaerat odit. Neque dignis"
        ]
        ];
        public static function all()
        {
            return collect (self::$upload_berita);
        }

        public static function find($slug)
        {
        $berita = static::all();
        return $berita->firstWhere("slug",$slug);
            }
}

