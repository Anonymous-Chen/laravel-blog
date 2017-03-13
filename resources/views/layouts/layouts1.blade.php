
@extends('layouts.app')

@section('content')

    <!-- 中间内容区局 -->
    <div class="container">
        <div class="row">

            <!-- 左侧菜单区域   -->
            <div class="col-md-3">
                @section('sidebar')

                    <h1>{{Auth::user()->name}}<small>--AC-blog</small></h1>
                    <br><br><br>

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                        <span class="input-group-addon " id="basic-addon2">search</span>
                    </div>
                    <br><br>

                    <h3>近期文章</h3>
                    <div class="list-group">
                        @for($x=2; $x>=0; $x--)
                            <a href="{{ url('article') }}"class="list-group-item">
                                    {{$articles[$x]->title}}
                                </a>
                        @endfor
                    </div>

                    <br>


                @show
            </div>

            <!-- 右侧内容区域 -->
            <div class="col-md-9">

                <br><br><br>

                @yield('content1')

            </div>
        </div>
    </div>

    <!-- 尾部 -->
    <div class="jumbotron" style="margin:0;">
        <div class="container">
            <span>  @2017 AnonymouChen</span>
        </div>
    </div>




@endsection

