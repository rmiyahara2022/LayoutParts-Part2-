<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <Title>Laravel追加演習</Title>

    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-[100vh]">
<header class="bg-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 py-6">
            <div class="flex items-center justify-between">
                <p class="text-white text-xl">ブログアプリ-編集画面</p>
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
            <form action="/blogs/{{ $blog->id }}" method="post" class="mt-10" style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0;">
                    @csrf
                    @method('PUT')
                    
                    <div class="flex mb-5">
                        <span class="block border border-slate-300 py-4 pl-4 sm:text-sm bg-gray-100 w-[100px]">
                            タイトル
                        </span>
                        <input
                            class="block border border-slate-300 py-4 pl-4 sm:text-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 w-[500px]"
                            type="text" name="blog_title" value="{{ $blog->title }}" />
                        @error('blog_title')
                            <div class="mt-3">
                                <p class="text-red-500">
                                    {{ $message }}
                                </p>
                            </div>
                        @enderror
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
                        <textarea
                            class="block w-full border border-slate-300 py-4 pl-4 sm:text-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 h-[250px]"
                            name="blog_text">{{ $blog->text }}</textarea>
                        @error('blog_text')
                            <p class="text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mt-8 w-full flex items-center gap-5">
                        <a href="/blogs/{{ $blog->id }}" class="block shrink-0 underline underline-offset-2">
                            ←戻る
                        </a>
                        <button type="submit"
                            class="inline-block text-center py-4 w-20 bg-emerald-700 text-white md:hover:bg-emerald-800 transition-colors font-medium">
                            完了
                        </button>
                    </div>

            </form>

        </div>
    </main>

    <footer class="bg-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="py-4 text-center">
                <p class="text-white text-sm">Blogアプリ</p>
            </div>
        </div>
    </footer>
</body>

</html>


