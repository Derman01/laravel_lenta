<article class="blog_post">
    <div class="three columns">
        <a href="#" class="th"><img src="{{asset('images/'.$article->image)}}" alt="desc" /></a>
    </div>
    <div class="nine columns">
        <a href="{{route('article', $article->id)}}"><h4>{{$article->title}}</h4></a>
        <p>{{explode('.', $article->content)[0]}}</p>
    </div>
</article>
