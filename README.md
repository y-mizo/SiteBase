# SiteBase

## 概要

![概要](https://raw.githubusercontent.com/y-mizo/SiteBase/master/webroot/img/site_base.png)

コーポレートサイトの雛形サイト。  
XAMPP環境、CakePHP2.8.* で作成。

* お知らせの管理は管理者以外の一般登録ユーザーも行えるものとする。
* お問い合わせはフォームを使用、
  登録済アドレスと、利用者のアドレス双方に自動連絡メールが送信される。

## 要件
* PHP 5.6 以上
* MySQL 5 以上

## インストール方法
```
$ git clone https://github.com/y-mizo/SiteBase.git
$ cd SiteBase
$ composer install
```

## データベースのセットアップ
※ 事前に MySQL 内に空のデータベースを作成しておく。
  照合順序は utf8_general_ci 。

▼ database.php ファイルを作成
```
$ cp Config/database.php.default Config/database.php
```

▼ database.php ファイルを編集
```
<?php
// Config/database.php

class DATABASE_CONFIG {

	public $default = array(
		'datasource'  => 'Database/Mysql',
		'persistent'  => false,
		'host'        => 'YOUR_HOSTNAME',
		'login'       => 'YOUR_USERID',
		'password'    => 'YOUR_PASSWORD',
		'database'    => 'YOUR_DATABASE',
		'prefix'      => '',
		'encoding'    => 'utf8',
        // XAMPP の場合は以下をアクティブにする。
        // 'unix_socket' => '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock',
	);
        ... 
        ...
}
```

▼ データベースのテーブルを作成(マイグレーションの実行)
```
$ Console/cake Migrations.migration run all
```

## アプリケーションの起動
※ 事前に MySQL を起動しておく。
```
$ Console/cake server -p 8000
...
...
built-in server is running in http://YOUR_HOSTNAME:8000/
```



