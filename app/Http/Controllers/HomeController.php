<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function homepage(){

        $auname = Auth::user()->name;

        $num1 = Article::max('id');
        $num2 = 5;
        if ( $num1 < 1006 ){

            $num2 = $num1-1000;
            $num1 = 1001 ;

        }else{
            $num1 = $num1-5;
        }

        echo $num2;

        $articles = Article::paginate(4);
        //dd($articles);

        return view( 'author\homepage',[
            'articles' => $articles,
            'num2' => $num2,

        ]);

    }

    public function article( Request $request){

        $num1 = Article::max('id');
        $num2 = 5;
        if ( $num1 < 1006 ){

            $num2 = $num1-1000;
            $num1 = 1001 ;

        }else{
            $num1 = $num1-5;
        }

        $articles = Article::get()->where(id>$num1);



        if ( $request->isMethod('post')) {
            
            $data = $request->input('Article');
            $data['useid'] = Auth::user()->id;
            $data['name'] = Auth::user()->name;

            if ( Article::create($data) ){
                return redirect('homepage')->with('success','添加成功');
            }else{
                return redirect()->back();
            }


        }

        return view( 'author\article',[
            'articles' => $articles,
            'num2'=>$num2,
        ]);
    }



}
