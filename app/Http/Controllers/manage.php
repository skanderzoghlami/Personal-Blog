<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;
class manage extends Controller
{
    //
    public function AddArticle(Request $request)
    {
        if($request->isMethod('post'))
        {
            $ar=new Article();
            if ($request->file('photo')->isValid()) {
                $unique_name = md5($ar->owner. time());
                $path = $request->file('photo')->move('images',$unique_name.".jpg");
            }
            $ar->title=$request->input('title');
            $ar->body=$request->input('body');
            $ar->user_id=Auth::user()->id;
            $ar->path=$path ;
            $ar->save();
            return redirect('view');
        }
        return view('manage.AddArticle');
    }
    public function view(){
        $articles = DB::table('articles')->simplePaginate(5);
        $ar=Array('articles'=>$articles);
        return view('manage.view',$ar);
    }
    public function read(Request $request, $id){
    if($request->isMethod('post'))
    {
        $ar=new Comment();
        $ar->comment=$request->input('body');
        $ar->article_id=$id;
        $ar->owner=Auth::user()->name;
        $ar->save();
    }
    $article=Article::find($id);
    $ar=Array('article'=>$article);
    return view('manage.read',$ar);
}
    public function delete(Request $request){
            if($request->input('type')=="articles")
            {
                Article::destroy($request->input('id'));
            }
        if($request->input('type')=="comments")
        {
            Comment::destroy($request->input('id'));
        }
        if($request->input('type')=="users")
        {
            User::destroy($request->input('id'));
        }
        return view('manage.adminy')->with('success','deleted succesfully');
    }
    public function articlesAdmin(){
        $articles = DB::table('articles')->simplePaginate(5);
        $ar=Array('articles'=>$articles);
        return view('manage.articles',$ar)->with('success','this is the articles list');;
    }
    public function commentsAdmin(){
        $articles = DB::table('comments')->simplePaginate(5);
        $ar=Array('comments'=>$articles);
        return view('manage.comments',$ar)->with('success','this is the comments list');
    }
    public function usersAdmin(){
        $articles = DB::table('users')->simplePaginate(5);
        $ar=Array('users'=>$articles);
        return view('manage.users',$ar)->with('success','this is the user list');
    }
    public function adminy(){
        return view('manage.adminy');
    }
    public function addAdmin(Request $request){

//            $user = User::find($request->input('id'))->update();
//            $user->isAdmin=true ;
        DB::update('update users set isAdmin = "true" where id = ?',[$request->input('id')]);
        return view('manage.adminy')->with('success','The user is now an admin');;
    }
    public function removeAdmin(Request $request){

//            $user = User::find($request->input('id'))->update();
//            $user->isAdmin=true ;
        DB::update('update users set isAdmin = "false" where id = ?',[$request->input('id')]);
        return view('manage.adminy')->with('success','The user is no longer an admin');
    }

}
