@extends('layouts.pattern')

@section('content')
    <section>
        <div class="section_main">
            <div class="row">
                <section class="eight columns">
                    @each('layouts.article-template', $articles, 'article')
                </section>
            </div>
        </div>
    </section>
@endsection

@section('slider')
    @include('layouts.slider')
@endsection
