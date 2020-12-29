<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Question;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Answer extends Component
{
use AuthorizesRequests;
    public $commentaires, $questionId, $question, $commentaire; 

    public function store(){

        $this->validate([
            'commentaire' => 'required'
        ]);

        $commentaire = Comment::create([
            'content' => $this->commentaire,
            'user_id' => auth()->user()->id,
            'question_id' => $this->questionId,
            ]);


           // $this->emit('sent');
            $this->resetInputFields();
            session()->flash('message', 'reponse envoyé avec succes 😁🤗.');
        }
       
        private function resetInputFields(){
            $this->commentaire= '';
           
        }
public function mount($question){
    
    $this->questionId = $question->id;
  //$this->authorize('update', $question) ;
}

public function bestComment($commentId, $questionId){

    $question = Question::where('id', $questionId)->get()->first();
    $question->update([
        'best_comment_id' => $commentId
    ]);
    session()->flash('message', 'reponse approuvée avec succes 😁🤗.');
    $this->resetInputFields();
    
}

    public function render()
    {

        $this->question = Question::where('id', $this->questionId)->get()->first();
        $this->commentaires= Comment::where('question_id', $this->questionId)->latest()->get();

        return view('livewire.answer', [
            'question' => $this->question,
        ]);
    }
}
