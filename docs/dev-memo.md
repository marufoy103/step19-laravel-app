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

##　制約
ログインユーザーのみ
 -記事の新規投稿画面
 -記事の新規投稿
 -記事の編集画面
 -記事の更新
 -記事の削除


##　TODO
 -記事一覧ビュー整える
    -編集/削除ボタン作成
    -投稿内容が１０文字超えたら「...」にする
 -記事作成ビュー整える
 -記事編集ビュー作成