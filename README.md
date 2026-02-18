# アプリ名：fashionably-late-contact-form

## 1. 環境構築(Setup Guide)

-以下の手順に従って、ローカル環境でのビルドおよび初期設定を行ってください。

### **GitHubからリポジトリをクローン**

    ```git clone git@github.com:AliettaA/fashionably-late-contact-form.git```
    ```cd fashionably-late-contact-form```

#### **Dockerコンテナのビルドと起動**

    プロジェクトのルートディレクトリで実行します。
    ```docker-compose up -d --build```

### **Composerのインストール**

    PHPコンテナ内でライブラリをインストールします。
    ```bash
    docker-compose exec php composer install

### **環境変数の設定**

    .env.example をコピーして .env を作成し、アプリケーションキーを生成します。
    ```cp sec/.env.example src/.env```
    ```docker-compose exec php php artisan key:generate```

        ※ 注意: 使用する環境（Docker等）に合わせて、.env 内の DB_HOST,
        DB_DATABASE,DB_USERNAME, DB_PASSWORD を適宜修正してください

            DB_HOST=127.0.0.1 → mysql
            DB_DATABASE=laravel → laravel_db
            DB_USERNAME=root.   → laravel_user
            DB_PASSWORD=        → laravel_pass

### **データベースの構築とダミーデータの投入**

    マイグレーションの実行と、シーディングによる35件のテストデータの投入を行います。
    ```docker-compose exec php bash```
    ``` php artisan migrate:fresh --seed```

## 2. 使用技術（実行環境）

本プロジェクトで使用している主要な技術スタックは以下の通りです。

フレームワーク / 言語
・Laravel: 8.3
・PHP
・HTML / CSS
・JavaScript: Vanilla JS (Modal & Form control)

インフラ / 実行環境
・Docker / docker-compose
・Nginx: nginx:1.21.1 Webサーバー
・MySQL: 8.0.26 データベース

外部ライブラリ / フォント
・Google Fonts: Gideon Roman (Logo & Headings)
・Sanitize.css: スタイルリセット

## 3. ER図

![ER図](./src/docs/FashionablyLate.png)

## ４. URL

**ユーザー側（お問い合わせフォーム）**: (http://localhost/)
**管理者側（ログイン画面）**: (http://localhost/login)
**管理者側（ユーザー登録）**: (http://localhost/register)
**phpMyAdmin**: (http://localhost:8080/)
