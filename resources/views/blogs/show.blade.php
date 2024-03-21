<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel追加演習</title>
  
    @vite('resources/css/app.css')

</head>
  
<body class="flex flex-col min-h-[100vh]">
    <header class="bg-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 py-6">
            <div class="flex items-center justify-between">
                <p class="text-white text-xl">ブログアプリ-記事詳細</p>
                <nav>
                    <ul class="flex text-white text-m">
                        <li><a href="/blogs" class="px-4">TOP</a></li>
                        <li><a href="/tasks" class="px-4">Todoアプリ</a></li>
                        <li><a href="/blogs" class="px-4">Blogアプリ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="grow grid place-items-center">
        <div class="w-full mx-auto px-4 sm:px-6">

            <div class="flex mb-5">
                <span class="block border border-slate-300 py-4 pl-4 sm:text-sm bg-gray-100 w-[100px]">
                    タイトル
                </span>
                <label class="block border border-slate-300 py-4 pl-4 sm:text-sm w-[500px]">
                    {{ $blog->title }}
                </label>
            </div>
            <div class="flex mb-5">
                <span class="block border border-slate-300 py-4 pl-4 sm:text-sm bg-gray-100 w-[100px]">
                    日時
                </span>
                <label class="block border border-slate-300 py-4 pl-4 sm:text-sm w-[500px]">
                        {{ $blog->created_at }}
                </label>
            </div>
            <div>
                <span class="block w-full border border-slate-300 py-4 pl-4 sm:text-sm bg-gray-100">本文</span>
                <label class="block w-full border border-slate-300 py-4 pl-4 sm:text-sm h-[250px]">
                    {!! nl2br(e($blog->text)) !!}
                </label>
            </div>

            <div class="mt-8 w-full flex items-center gap-8">
                <div>
                    <a href="/blogs"
                        class="inline-block text-center py-4 w-20 underline underline-offset-2 transition-colors font-medium">←戻る</a>
                </div>
                <div>
                    <a href="/blogs/{{ $blog->id }}/edit/"
                        class="inline-block text-center py-4 w-20 bg-emerald-700 text-white md:hover:bg-emerald-800 transition-colors font-medium">編集</a>
                </div>
                <div>
                    <form onsubmit="return deleteTask();"
                        action="/blogs/{{ $blog->id }}" method="post"
                        class="inline-block text-white font-medium"
                        role="menuitem" tabindex="-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="py-4 w-20 md:hover:bg-slate-200 bg-gray-300 transition-colors">削除</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="py-4 text-center">
                <p class="text-white text-sm">Blogアプリ</p>
            </div>
        </div>
    </footer>

    <script>
        function deleteTask() {
            if (confirm('本当に削除しますか？')) {
                return true;
            } else {
                return false;
            }
        }
    </script>

</body>

</html>
