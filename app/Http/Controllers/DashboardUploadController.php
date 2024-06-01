<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.berita.index", [
            "berita" => Upload::where("user_id", auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.berita.create",[
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "title" => "required|max:255",
            "slug" => "required|unique:uploads",
            "category_id" => "required",
            "body" => "required"
        ]);

        $validateData["user_id"] = auth()->user()->id;
        $validateData["excerpt"] = Str::limit(strip_tags($request->body), 200);

        Upload::create($validateData);

        return redirect("/dashboard/berita")->with('success',' new berita berhasil ditambahkan ');
    }


    /**
     *
     * Display the specified resource.
     */
    public function show(Upload $upload)
    {
        return view("dashboard.berita.show", [
            "upload" => $upload
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upload $upload)
    {
        Upload::destroy($upload->id);

        return redirect("/dashboard/berita")->with('success','berita berhasil dihapus ');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Upload::class, "slug", $request->title);
        return response()->json(["slug" => $slug]);
    }
}
