<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\User;
class UploadController extends Controller
{
    public function index()
    {
        $title = "";
        if(request("category")){
            $category = Category::firstWhere("slug", request("category"));
            $title = " di " . $category->name;
        }

        if(request("author")){
            $author = User::firstWhere("username", request("author"));
            $title = " by " . $author->name;
        }


        return view('berita', [
            "title" =>  "All Berita" . $title,
            "active" => "berita",
            "berita" => Upload::latest()->filter(request(["search", "category", "author"]))
            ->paginate(7)->withQueryString()
    ]);
    }
    public function show(Upload $upload)
    {
        return view("upload",[
            "title" => "single upload",
            "active" => "berita",
            "upload" => $upload
    ]);
    }

}
