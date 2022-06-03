@extends('layouts.pattern')

@section('header')
<header>
    <div class="row">
{{--       {{ dd($article)}}--}}
        <h4>{{$article->rubric->name}}</h4>
        <article>
            <div class="twelve columns">
                <h1>{{$article->title}}</h1>
                <p class="excerpt">
                    {{$article->lid}}
                </p>
            </div>
        </article>
    </div>
</header>
@endsection

@section('content')
<section class="section_light">
    <div class="row">
        <p> <img src="{{asset('images/'.$article->image)}}" alt="desc" width=400 align=left hspace=30>
            {{$article->content}}
        </p>
    </div>
</section>
@endsection
