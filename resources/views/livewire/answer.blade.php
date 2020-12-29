
<div>
<div class="w-100 h-100 bg-white">
        <div class="container" style="margin-top: 3.5rem;">
            <div class="row">
                <div class="col-md-12 col-lg-9">
                @if (session()->has('message'))
       

                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:30px; top:20px ; right:0; left:0px width:50% ; position:absolute">
                    <strong> {{ session('message') }}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                 @endif 
                    <span class="question-detail__head">
                        Question
                    </span>
                    <div class="question-detail__title">
                        <a href="#" class="d-flex flex-column align-items-center no-underline ">
                            <i class="la la-heart-o"></i>
                            <span>
                                10
                            </span>
                        </a>
                        <div>
                            <h1>
                                {{$question->title}}.
                            </h1>
                            <div>
                            
                                @foreach($question->tags as $question_tags)
                                <a href="#" class="question__tags">{{$question_tags->name}}</a>
                            @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="question-detail__content">
                        <p>
                            {{$question->content}}
                        </p>

                            <pre>
const john = new Person();
john.sayHello();
                            </pre>
                            @can('update', $question)
                            <button class="btn btn-danger text-white text-right shadow-sm" wire:click="edit($question->id)">Delete</button>
                           <button class="btn btn-primary text-white text-right shadow-sm" wire:click="delete($question->id)">Edit</button>
                           <button class="btn btn-danger text-white text-right shadow-sm" wire:click="delete($question->id)">🔒Fermer</button>
                            
                            @endcan
                    </div>

                    <hr/>
                    <div class="mb-4 answers-count ">
                        <span class="text-dark-blue font-weight-bold">{{count($question->comments)}} reponses</span>
                        <span class="d-flex align-items-center">
                            <img src="{{ asset("img/avatar.png") }}" alt="" width="20" height="20" />
                            <span class="text-black ml-2">
                               {{$question->user->name}}
                            </span>
                        </span>
                    </div>

                    <!-- Comment -->
               
                    @foreach ($commentaires as $comment)
                    <div class="comment @if($comment->id == $question->best_comment_id)  {{'good-answer'}} @endif">
                        <a href="#" class="comment__likes-count no-underline">
                            <i class="la la-heart-o"></i>
                            <span>7</span>
                        </a>
                        <div class="comment__content">
                            <div class="comment__author">
                                <div class="comment__author-info">
                                    <img src="{{ asset("img/avatar.png") }}" alt="" width="25" height="25" />
                                    <span class="comment__author-name">{{$comment->user->name}}</span>
                                </div>
                                <div class="comment__ago">
                                    <i class="la la-clock-o"></i>
                                    {{$comment->created_at->diffForHumans()}}.
                                </div>
                            </div>
                            <div class="comment__text">
                                <p>
                                   {{$comment->content}}
                                </p>
                            </div>
                            @can('update', $comment)
                        <button class="btn btn-danger text-white text-right shadow-sm" wire:click="edit($comment->id)">Delete</button>
                         <button class="btn btn-primary text-white text-right shadow-sm" wire:click="delete($comment->id)">Edit</button>
                        @endcan
                        @can('update', $question)
                        <button class="btn btn-success text-white text-right shadow-sm" wire:click="bestComment({{$comment->id}}, {{$question->id}})">Best Answer</button>
                         
                        @endcan
                        </div>
                     
                    </div>

                    @endforeach
<!-- 
                    <div class="comment good-answer">
                        <a href="#" class="comment__likes-count no-underline liked">
                            <i class="la la-heart"></i>
                            <span>20</span>
                        </a>
                        <div class="comment__content">
                            <div class="comment__author">
                                <div class="comment__author-info">
                                    <img src="{{ asset("img/avatar.png") }}" alt="" width="25" height="25" />
                                    <span class="comment__author-name">William Struk</span>
                                </div>
                                <div class="comment__ago">
                                    <i class="la la-clock-o"></i>
                                    Il y a trois heures.
                                </div>
                            </div>
                            <div class="comment__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Asperiores commodi cum eius fuga nisi placeat quos rem soluta veniam.
                                    Dignissimos doloremque ipsa nostrum, obcaecati omnis praesentium quidem
                                    soluta totam vero!
                                </p>
                            </div>
                        </div>
                    </div> -->


                   
                    @guest
                    <a href="{{route('login')}}">Veuillez vous connecter</a>
                    @else

                    <div class="mt-3">
      
                        <textarea name="content" id="" cols="30" rows="3" class="form-control"
                            placeholder="Ajouter un commentaire..."  wire:model="commentaire" wire:keydown.enter="store()" 
                        ></textarea>
                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn btn-primary text-white text-right shadow-sm" wire:click="store()">Commenter</button>
                            @error('message') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    @endguest

                    <!-- End comment -->
                </div>


                <div class="col-md-12 col-lg-3">
                    Right
                </div>
            </div>
        </div>
    </div>
    </div>
