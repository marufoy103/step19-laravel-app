   <x-app-layout>
   <h1 class="text-white text-2xl font-bold">記事一覧</h1>
    <table class="text-white text-2xl font-bold">
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>内容</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td><a href="{{ route('posts.edit', $post->id) }}">編集</a></td>
                    <td><a href="{{ route('posts.destroy', $post->id) }}">削除</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>

</x-app-layout>