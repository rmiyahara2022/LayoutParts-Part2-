<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; //追記
use Illuminate\Support\Facades\Validator; //追加

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        // $blogsを定義し値を取得（ブログの全データ）

        return view('blogs.index')->with('blogs', $blogs);
        // viewに$blogsを渡す
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'blog_title' => 'required|max:100',
            'blog_text' => 'required|max:1000',
        ];

        $messages = ['required' => '必須項目です', 'max' => '文字数制限をオーバーしています'];

        Validator::make($request->all(), $rules, $messages)->validate();

        //モデルをインスタンス化
        $blog = new Blog;

        //モデル->カラム名 = 値　で、データを割り当てる
        $blog->title = $request->input('blog_title');
        $blog->text = $request->input('blog_text');

        //データベースに保存
        $blog->save();

        //リダイレクト
        return redirect('/blogs');
    }

    public function show($id)
    {
            $blog = Blog::find($id);
        
            if (!$blog) {
                abort(404); // 該当するブログが見つからない場合は 404 エラーを返す
            }
        
            return view('blogs.show')->with('blog', $blog);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit')->with('blog', $blog);
    }

    public function update(Request $request, $id)
    {
        //「編集」ボタンを押したとき
            $rules = [
                'blog_title' => 'required|max:100',
                'blog_text' => 'required|max:1000',
            ];
        
            $messages = ['required' => '必須項目です', 'max' => '文字数制限をオーバーしています'];

            Validator::make($request->all(), $rules, $messages)->validate();

            //該当のブログを検索
            $blog = Blog::find($id);

            //モデル->カラム名 = 値　で、データを割り当てる
            $blog->title = $request->input('blog_title');
            $blog->text = $request->input('blog_text');

            //データベースに保存
            $blog->save();
    
        //リダイレクト
        return redirect('/blogs');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('/blogs');
    }
}
