##　ページ設計
 -投稿一覧画面
 -投稿作成画面・編集画面

##　データベース
 -id int
 -title string
 -content text
 -create_at timestamps
 -updated_at timestamps

##　ルーティング
記事の一覧表示画面	GET	/admin/post
記事の新規投稿画面	GET	/admin/post/add
記事の新規投稿	POST	/admin/post/add
記事の編集画面	GET	/admin/post/edit
記事の編集（更新）	POST	/admin/post/edit
記事の削除	GET	/admin/post/delete_one