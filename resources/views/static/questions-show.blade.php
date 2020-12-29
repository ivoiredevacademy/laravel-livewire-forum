@extends('layouts.app')

@section("style")
    <style>
        body {
            background-color: white;
        }
    </style>
@endsection

@section("content")

    @livewire('answer', ['question' => $question])
@endsection
