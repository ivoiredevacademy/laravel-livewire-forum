@extends('layouts.app')

@section("style")
    <style>
        body {
            background-color: white;
        }
    </style>
@endsection

@section("content")
    <div class="w-100 h-100 bg-white">
        <div class="container" style="margin-top: 3.5rem;">
            <div class="row">
                <div class="col-md-12 col-lg-9">
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
                                Lorem Ipsum Dolor Sit Amet Lorem.
                            </h1>
                            <div>
                                <a href="#" class="question__tags">Laravel</a>
                                <a href="#" class="question__tags">PHP</a>
                                <a href="#" class="question__tags">Javascript</a>
                            </div>
                        </div>
                    </div>

                    <div class="question-detail__content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad aliquam beatae blanditiis, consequatur cupiditate dolore
                            dolorem doloribus esse eveniet facilis harum mollitia nisi
                            rem repellendus suscipit totam ullam vel voluptatem.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad aliquam beatae blanditiis, consequatur cupiditate dolore
                            dolorem doloribus esse eveniet facilis harum mollitia nisi
                            rem repellendus suscipit totam ullam vel voluptatem.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad aliquam beatae blanditiis, consequatur cupiditate dolore
                            dolorem doloribus esse eveniet facilis harum mollitia nisi
                            rem repellendus suscipit totam ullam vel voluptatem.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad aliquam beatae blanditiis, consequatur cupiditate dolore
                            dolorem doloribus esse eveniet facilis harum mollitia nisi
                            rem repellendus suscipit totam ullam vel voluptatem.
                        </p>

                            <pre>
const john = new Person();
john.sayHello();
                            </pre>

                    </div>
                    <hr/>
                    <div class="mb-4 answers-count ">
                        <span class="text-dark-blue font-weight-bold">4 reponses</span>
                        <span class="d-flex align-items-center">
                            <img src="{{ asset("img/avatar.png") }}" alt="" width="20" height="20" />
                            <span class="text-black ml-2">
                               Amadou Diallo
                            </span>
                        </span>
                    </div>

                    <!-- Comment -->
                    <div class="comment">
                        <a href="#" class="comment__likes-count no-underline">
                            <i class="la la-heart-o"></i>
                            <span>0</span>
                        </a>
                        <div class="comment__content">
                            <div class="comment__author">
                                <div class="comment__author-info">
                                    <img src="{{ asset("img/avatar.png") }}" alt="" width="25" height="25" />
                                    <span class="comment__author-name">Jane Doe</span>
                                </div>
                                <div class="comment__ago">
                                    <i class="la la-clock-o"></i>
                                    Il y a dix minutes.
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
                    </div>

                    <div class="comment">
                        <a href="#" class="comment__likes-count no-underline">
                            <i class="la la-heart-o"></i>
                            <span>7</span>
                        </a>
                        <div class="comment__content">
                            <div class="comment__author">
                                <div class="comment__author-info">
                                    <img src="{{ asset("img/avatar.png") }}" alt="" width="25" height="25" />
                                    <span class="comment__author-name">John Smith</span>
                                </div>
                                <div class="comment__ago">
                                    <i class="la la-clock-o"></i>
                                    Il y a deux heures.
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
                    </div>

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
                    </div>


                    <div class="comment">
                        <a href="#" class="comment__likes-count no-underline liked">
                            <i class="la la-heart"></i>
                            <span>7</span>
                        </a>
                        <div class="comment__content">
                            <div class="comment__author">
                                <div class="comment__author-info">
                                    <img src="{{ asset("img/avatar.png") }}" alt="" width="25" height="25" />
                                    <span class="comment__author-name">Jacques Anouma</span>
                                </div>
                                <div class="comment__ago">
                                    <i class="la la-clock-o"></i>
                                    Il y a quatre heures.
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
                    </div>




                    <div class="mt-3">
                        <textarea name="content" id="" cols="30" rows="3" class="form-control"
                            placeholder="Ajouter un commentaire..."
                        ></textarea>
                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn btn-primary text-white text-right shadow-sm">Commenter</button>
                        </div>
                    </div>

                    <!-- End comment -->
                </div>


                <div class="col-md-12 col-lg-3">
                    Right
                </div>
            </div>
        </div>
    </div>

@endsection
