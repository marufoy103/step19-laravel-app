<x-app-layout>
   <h1 class="text-white text-2xl font-bold">記事作成</h1>
   <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="space-y-4">
            <x-input-label for="title">タイトル</x-input-label>
            <x-text-input type="text" name="title" placeholder="タイトル" />
        </div>

        <div class="space-y-4">
            <x-input-label for="content">内容</x-input-label>
            <x-text-input type="text" name="content" placeholder="内容" />
        </div>

        <div class="space-y-4">
            <x-primary-button type="submit">投稿</x-primary-button>
        </div>
    </form>

</x-app-layout>