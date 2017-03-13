@extends('layouts.layouts1')

@section('content1')

    <div class="panel panel-default">
        <div class="panel-heading">添加文章</div>
        <div class="panel-body">
            <form class="navbar-form navbar-left" method="post" action="">

                {{csrf_field()}}

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="title" name="Article[title]">
                </div>
                <button type="submit" class="btn btn-default text-right" >Submit</button>
                <br><br>
                <textarea rows="30" cols="100" class="form-control" name="Article[content]">
                    输入正文
                </textarea>
            </form>



        </div>
    </div>







@endsection