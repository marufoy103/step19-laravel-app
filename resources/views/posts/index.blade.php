   <x-app-layout>
   <h1 class="text-white text-2xl font-bold">記事一覧</h1>
    <table class="text-white text-2xl font-bold">
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>内容</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>

</x-app-layout>