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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-6">
            <div class="flex items-center justify-between">
                <p class="text-white text-xl">Laravel Practice</p>
                <nav>
                    <ul class="flex text-white text-m">
                        <li><a href="#" class="px-4">TOP</a></li>
                        <li><a href="/tasks" class="px-4">Todoアプリ</a></li>
                        <li><a href="/blogs" class="px-4">Blogアプリ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 mt-[4rem]">
            <div class="py-8">
                <p class="text-2xl font-bold text-center">ブログ一覧</p>
            </div>
        </div>

        @if ($blogs->isNotEmpty())
            <div class="max-w-7xl mx-auto">
                <div class="inline-block min-w-full py-2 align-middle">
                    <div class="overflow-hidden dhadow ring-1 ring-black ring-opacity-5">
                    
                        <table class="min-w-full">
                            <thead class="bg-gray-50 border border-gray-200">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-bold text-gray-900"
                                        width="100">
                                        記事番号
                                    </th>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-bold text-gray-900">
                                        タイトル
                                    </th>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-bold text-gray-900"
                                        width="450">
                                        日時
                                    </th>
                                </tr>
                           </thead>
                           <tbody class="bg-white">
                                @foreach ($blogs as $item)
                                    <tr class="border border-gray-200 py-6">
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <div>{{ $item->id }}</div>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <a href="/blogs/{{ $item->id }}"
                                                class="inline-block px-3 py-4 text-sky-600 transition-colors whitespace-nowrap"
                                            >{{ $item->title }}</a>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <div>{{ $item->created_at }}</div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        @endif

        <div class="flex flex-col items-center">
            <a href="{{ route('blogs.create') }}" class="text-center w-full mt-8 p-4 bg-slate-800 text-white max-w-xs hover:bg-slate-900 transition-colors">
                ブログ追加
            </a>
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