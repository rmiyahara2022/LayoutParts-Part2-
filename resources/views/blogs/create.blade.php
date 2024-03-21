<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Laravel追加演習</title>

    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-[100vh]">
    <header class="bg-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 py-6">
            <div class="flex items-center justify-between">
                <p class="text-white text-xl">ブログアプリ-記事作成画面</p>
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

    <main class="grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="py-[100px]">
                <form action="{{ route('blogs.store') }}" method="post" class="mt-10">
                    @csrf

                    <div class="flex flex-col items-center">
                        <label class="w-full max-w-3xl mx-auto mb-[50px]">
                            <p>タイトル</p>
                            <input
                            class="block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                            type="text" name="blog_title" />
                            @error('blog_title')
                                <div class="mt-3">
                                    <p class="text-red-500">
                                        {{ $message }}
                                    </p>
                                </div>
                            @enderror
                        </label>
                        <label class="w-full max-w-3xl mx-auto">
                            <p>本文</p>
                            <textarea
                            class="block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm resize-y"
                            type="text" name="blog_text" rows="7"></textarea>
                            @error('blog_text')
                                <div class="mt-3">
                                    <p class="text-red-500">
                                        {{ $message }}
                                    </p>
                                </div>
                            @enderror
                        </label>

                        <div class="mt-8 w-full flex items-center justify-center gap-10">
                            <a href="/blogs" class="block shrink-0 underline underline-offset-2">
                                ←戻る
                            </a>
                            <button type="submit"
                                class="p-4 bg-sky-800 text-white w-full max-w-xs hover:bg-sky-900 transition-colors">
                                追加する
                            </button>
                        </div>

                    </div>

                </form>
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
</body>

</html>
