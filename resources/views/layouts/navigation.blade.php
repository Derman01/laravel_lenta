<nav>
    <div class="twelve columns header_nav" style="display: flex; align-items: center">
        <div class="row">
            <ul id="menu-header" class="nav-bar horizontal">
                <li><a href="{{route('home')}}">Главная</a></li>
                @php
                    $rubrics = \App\Models\Rubric::all();
                @endphp
                @foreach($rubrics as $rubric)
                    <li><a href="{{route('rubric', $rubric->id)}}">{{$rubric->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <div style="padding: 0 12px">
            <a href="{{route('login')}}">Войти</a>
        </div>
    </div>
</nav>
