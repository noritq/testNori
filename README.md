お問い合わせフォーム
環境構築
Dockerビルド

1. docker-compose up -d --build
2. composer install
3. composer create-project "laravel/laravel=8.*" . --prefer-dist
4. config/app.phpで時間の設定
5. .envで環境変数を変更
