## 初期設定

1. 最初にライブラリをインストール
  
  `composer install`

2. 共有サーバの .env をコピー

2. テーブルの雛形をデータベースに登録

 `php artisan serve`
 
3. サンプルデータを投入
   
 `php artisan db:seed`
 `php artisan db:seed --class=StaffSeeder`

5. ローカルサーバをたてて動作確認
   
  `php artisan serve`
