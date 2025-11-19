# Laravel シンプルブログアプリケーション

Laravel Sailを使用したシンプルなブログアプリケーションです。

## 機能一覧

### 認証機能
- **Laravel Breeze**による認証システム
  - ユーザー登録
  - ログイン・ログアウト
  - パスワードリセット
  - メール認証（オプション）

### ブログ機能
- **記事の閲覧**: 公開された記事の一覧表示と詳細表示
- **記事の投稿**: 認証済みユーザーによる新規記事の作成
- **記事の編集**: 作成者による記事の更新
- **記事の削除**: 作成者による記事の削除
- **ページネーション**: 記事一覧のページ分割表示

### 追加機能
- **PHPによるアレンジ**: カスタム機能の実装
- **JavaScriptによるアレンジ**: フロントエンドでの動的機能

## 必要な環境

- Docker Desktop
- Git

## セットアップ手順

### 1. リポジトリのクローン

```bash
git clone <repository-url>
cd step19-laravel-app
```

### 2. 環境変数の設定

```bash
cp .env.example .env
```

`.env`ファイルを開き、必要に応じてデータベース設定などを変更してください。

### 3. Laravel Sailの起動

初回起動時は、まずComposerの依存関係をインストールします：

```bash
composer install
```

その後、Sailを起動します：

```bash
./vendor/bin/sail up -d
```

または、Composerがインストールされていない場合は：

```bash
docker compose up -d
```

### 4. アプリケーションキーの生成

```bash
./vendor/bin/sail artisan key:generate
```

### 5. データベースマイグレーション

```bash
./vendor/bin/sail artisan migrate
```

### 6. フロントエンドのビルド（開発環境）

```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

### 7. アプリケーションへのアクセス

ブラウザで以下のURLにアクセスしてください：

```
http://localhost
```

## 使用方法

### ユーザー登録・ログイン

1. トップページから「Register」をクリックしてユーザー登録を行います
2. 登録後、自動的にログインされます
3. 既存ユーザーは「Login」からログインできます

### 記事の作成

1. ログイン後、「新規投稿」ボタンをクリック
2. タイトルと本文を入力して投稿

### 記事の編集・削除

1. 自分の投稿した記事の詳細ページから「編集」または「削除」ボタンをクリック
2. 編集の場合は内容を変更して保存
3. 削除の場合は確認後に削除されます

## 開発コマンド

### Laravel Sailコマンド

```bash
# コンテナの起動
./vendor/bin/sail up -d

# コンテナの停止
./vendor/bin/sail down

# Artisanコマンドの実行
./vendor/bin/sail artisan <command>

# Composerコマンドの実行
./vendor/bin/sail composer <command>

# NPMコマンドの実行
./vendor/bin/sail npm <command>
```

### よく使うコマンド

```bash
# マイグレーション実行
./vendor/bin/sail artisan migrate

# マイグレーションロールバック
./vendor/bin/sail artisan migrate:rollback

# シーダーの実行
./vendor/bin/sail artisan db:seed

# キャッシュクリア
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan config:clear
./vendor/bin/sail artisan view:clear
```

## 技術スタック

- **フレームワーク**: Laravel 12.x
- **認証**: Laravel Breeze
- **フロントエンド**:
  - Vite
  - Tailwind CSS
- **データベース**: MySQL（Docker経由）
- **開発環境**: Laravel Sail (Docker)

## プロジェクト構造

```
step19-laravel-app/
├── app/
│   ├── Http/
│   │   └── Controllers/    # コントローラー
│   └── Models/             # Eloquentモデル
├── database/
│   ├── migrations/         # データベースマイグレーション
│   └── seeders/            # シーダー
├── resources/
│   ├── views/              # Bladeテンプレート
│   └── js/                 # JavaScriptファイル
├── routes/
│   └── web.php             # Webルート定義
└── tests/                  # テストファイル
```

## 参考リンク

- [Laravel公式ドキュメント](https://laravel.com/docs)
- [Laravel Breeze](https://laravel.com/docs/breeze)
- [Laravel Sail](https://laravel.com/docs/sail)
```