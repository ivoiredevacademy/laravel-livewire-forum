<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Tag;


class Home extends Component
{

    public $query;
    protected $paginationTheme = 'bootstrap';

    public function updatingQuery(){

        $this->resetPage();
    }



    public function render()
    {
        $questions = Question::where('title', 'like', '%' . $this->query . '%')
            ->with('tags')
            ->latest()->paginate(2);

        $question_all = Question::all();
        $tags = Tag::with("questions")->get();

        return view('livewire.home', ['questions'=>$questions, 'question_all'=>$question_all, 'tags' => $tags]);
    }
}
