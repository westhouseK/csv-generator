# csv-test-data-creater
CSVのテストデータを作成するためのコードです

# 使用技術
PHP >= 5.3.3  
composer  
[faker](https://github.com/fzaninotto/Faker)  

# インストール
```
git clone https://github.com/westhouseK/csv-generator.git
cd csv-generator
composer install
```

# 実行方法
```
php index.php
```

# 仕様
- header付きのCSVファイルが作成される
- text.csvのファイル名で10レコード出力される

```
例)
name,tel,mail,birthday
"Israel Grimes MD",04536890989,hester.stracke@douglas.com,1980-04-20
"Sheldon Larson Sr.",125-045-0511x083,vhickle@hotmail.com,2017-08-05
"Prof. Leonora Collier III",700.304.8582,nbode@bins.com,1972-08-05
```
