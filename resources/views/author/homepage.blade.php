
@extends('layouts.layouts1')

@section('content1')

    <!-- 右侧内容区域 -->
    <!-- Single button -->
    @include('auth.message')
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            @for($x=0; $x<=5; $x++)
                <li><a href="{{ url('article') }}">添加文章</a></li>
            @endfor
        </ul>
    </div>

    <br><br>

    @foreach( $articles as $article)
    <div class="list-group">
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">{{ $article->title }}</h4>
            <p class="list-group-item-text">
                @if(strlen($article->content)>20)
                    {{ substr($article->content, 0, 20) }}
                @else
                    {{$article->content}}
                @endif

                ...</p>
        </a>
    </div>
    @endforeach





@endsection

