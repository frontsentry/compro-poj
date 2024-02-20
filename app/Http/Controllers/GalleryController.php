<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Spatie\Tags\HasTags;
use Spatie\Tags\Tag;
use Spatie\TagsField\Tags;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    use HasTags;

    public function index()
    {
        return view('gallery.index');
    }

    public function getGalleries(Request $request)
    {
        $q = Gallery::with('tags');

        if ($request->has('type')) {
            $q = $q->where('type', $request->type);
        }

        if ($request->has('tags')) {
            $q = $q->withAllTags([$request->tags]);
        }
        $data = $q
            ->orderBy('updated_at', 'desc')
            ->get();
        return response()->json($data);
    }

    public function getGalleryTags()
    {   
        $tagIds = DB::table('taggables') 
            ->distinct()
            ->select('tag_id')
            ->where('taggable_type', Gallery::class)
            ->get()
            ->pluck('tag_id');

        $tags = Tag::whereIn('id', $tagIds)
            ->orderBy('updated_at', 'desc')
            ->get();
        return response()->json($tags);
    }
}
