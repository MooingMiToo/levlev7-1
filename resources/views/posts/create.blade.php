<x-app-layout>
    <x-slot name="header">
    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
        </head>
    </x-slot>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="store"/>
            <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </html>
</x-app-layout>