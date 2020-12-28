<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Tag;
use Illuminate\Support\Str;

class StaticPagesController extends Controller
{
    public function index()
    {
       /*  $questions = Question::latest()->paginate(2);
        $question_all = Question::all();
        $tags = Tag::get()->all(); */
        return view("static.index");
    }

    public function create()
    {

        return view("static.questions-create");
    }

    public function search($slug)
    {
        $tag_question = Tag::where('slug', $slug)->get()->first();

        $question_all = Question::all();
        $tags = Tag::get()->all();
        return view("static.questions-by-tag", compact('tag_question', 'question_all', 'tags') );
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required'
        ]);

        $content = $request->content;
        $title = $request->title;
        $user_id = auth()->user()->id;

        // Recupère les ids des tags dynamiquement.
        $tags = collect(json_decode($request->tags))->pluck("value");
        $tagIds = Tag::whereIn("name", $tags)->pluck("id");
        
//
//        $tags=json_decode($request->tags);
//        $tags_array = [];
//
//        foreach($tags as $tag ){
//            if($tag->value == 'PHP'){
//                $tags_array[] =  1;
//            }
//            if($tag->value == 'React'){
//                $tags_array[] =  2;
//            }
//            if($tag->value == 'Javascript'){
//                $tags_array[] =  3;
//            }
//            if($tag->value == 'C++'){
//                $tags_array[] =  4;
//            }
//            if($tag->value == 'HTML/CSS'){
//                $tags_array[] =  5;
//            }
//            if($tag->value == 'Java'){
//                $tags_array[] =  6;
//            }
//            if($tag->value == 'Laravel'){
//                $tags_array[] =  7;
//            }
//        }

        $question = Question::create([
            'title' => $title,
            'content' => $content,
            'user_id'=> $user_id,
            'slug' => Str::slug($title)
        ]);

        $question->tags()->sync($tagIds->toArray());

        return redirect('/static')->with('success', 'Question créée avec succès');
    }

    public function show($questionSlug)
    {
        return view('static.questions-show');
    }
}
