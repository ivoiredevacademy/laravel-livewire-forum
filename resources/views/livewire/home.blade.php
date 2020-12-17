<div>
<x-banner>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column">
            <div class="container banner__container">
                <h1 class="text-white font-weight-bold">Questions</h1>
                <p class="banner__description">
                    Ce forum est ouvert à toutes les questions liées à la programmation.
                    <br/>
                    (PHP, Javascript, Java, C++, Ruby, Python, C, Elixir, Dart, Julia...)
                </p>

                <div class="w-100">
                    <input type="text" class="form-control form-control-lg w-100" wire:model="query" placeholder="Rechercher des questions" />
                </div>
            </div>
        </div>
    </x-banner>
    <div class="container my-4">
    <div>

    @if (session()->has('success'))
        <div class="alert alert-success" style="margin-top:30px;">
          {{ session('success') }}
        </div>
    @endif

    </div>
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <ul class="list-group">

                    @foreach($tags as $tag)
                    <li class="list-group-item d-flex justify-content-between  align-items-center category__item">
                    <!-- active -->
                        <a href="{{route('tag', $tag->slug)}}" class="category__link">{{$tag->name}}</a>
                        <span class="badge badge-primary badge-pill">{{count($tag->questions)}}</span>
                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="d-flex justify-content-between">
                    <span>
                        {{ count($question_all) }} questions.
                    </span>
                    <a href="{{ route("static-pages.create") }}" class="btn btn-primary">Poser une question <i class="la la-arrow-right"></i></a>
                </div>
                @if(count($questions) == 0 )
                    <div class="empty-question">
                        <h2 class="empty-question__title text-center mt-4">Il n'y a pas encore de questions...</h2>
                        <div>
                            @include("illustrations.empty-questions")
                        </div>
                    </div>
                @endif
                @foreach($questions as $question)
                <div class="card no-border p-3 my-3">
                    <div class="question ">
                        <h2 class="question__title">
                            <a href="{{ route('questions.show', $question->tag->slug, $question->slug) }}">
                                {{ $question->title }}
                            </a>
                        </h2>
                        <div class="question__time">{{$question->created_at->diffForHumans()}}</div>
                        <p class="question__description my-2">
                            {{$question->content}}
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="question__answers-count">10 reponses</span>
                            <div>
                            @foreach($question->tags as $question_tags)
                                <a href="#" class="question__tags">{{$question_tags->name}}</a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="card no-border p-3 my-3">
                    <div class="question ">
                        <h2 class="question__title">Issue with MERN Tutorial </h2>
                        <div class="question__time">Il y a une heure</div>
                        <p class="question__description my-2">
                            I was following along on this tutorial
                            (https://www.digitalocean.com/community/tutorials/getting-started-with-the-mern-stack)
                            I have gotten to the part where you test things in Insomnia and I can Post, Get, Delete.
                            I ...
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="question__answers-count">10 reponses</span>
                            <div>
                                <a href="#" class="question__tags">React</a>
                                <a href="#" class="question__tags">Laravel</a>
                                <a href="#" class="question__tags">NodeJS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card no-border p-3 my-3">
                    <div class="question ">
                        <h2 class="question__title">Issue with MERN Tutorial </h2>
                        <div class="question__time">Il y a une heure</div>
                        <p class="question__description my-2">
                            I was following along on this tutorial
                            (https://www.digitalocean.com/community/tutorials/getting-started-with-the-mern-stack)
                            I have gotten to the part where you test things in Insomnia and I can Post, Get, Delete.
                            I ...
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="question__answers-count">10 reponses</span>
                            <div>
                                <a href="#" class="question__tags">React</a>
                                <a href="#" class="question__tags">Laravel</a>
                                <a href="#" class="question__tags">NodeJS</a>
                            </div>
                        </div>
                    </div>
                </div>
 -->
               <!--  <div>
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                <i class="la la-arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div> -->

                <div>
                {{$questions->links()}}
                </div>
            </div>
        </div>
    </div>

</div>
