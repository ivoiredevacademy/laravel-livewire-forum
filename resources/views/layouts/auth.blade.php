@extends('layouts.skeleton')

@section("main-content")
    <div class="container-fluid h-100">
        <div class="row p-3 h-100 ">
            <x-auth-sidebar></x-auth-sidebar>
            <div class="col-md-12 col-lg-6">
                @yield("content")
            </div>
        </div>
    </div>
@endsection
