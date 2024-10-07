お問い合わせフォーム
環境構築
Dockerビルド

1. docker-compose up -d --build
2. composer create-project "laravel/laravel=8.*" . --prefer-dist
3. config/app.phpで時間の設定
4. .envで環境変数を変更
5. php artisan key:generate
6. php artisan migrate
7. php artisan make:factory
8. php artisan make:seeder ContactsTableSeeder
9. php artisan db:seed
10. php artisan make:seeder CategoriesTableSeeder
11. php artisan db:seed