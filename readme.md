## Laravel PHPフレームワーク 日本語スタートキット

### インストール方法

#### Laravel 5.1
```Console
$ composer create-project laravel-plus/laravel5 <directory>
```

#### Laravel 5.0
```Console
$ composer create-project laravel-plus/laravel5=5.0.* <directory>
```

### 本家版との違い

以下のものが標準で組み込まれています。
- パッケージ指定
	- [Extension Pack - laravel-plus/extension](http://github.com/jumilla/laravel-extension)
	- [Versionia - jumilla/laravel-versionia](http://github.com/jumilla/laravel-versionia)
	- [Socialite - laravel/socialite](http://github.com/laravel/socialite)
	- [Debugbar - barryvdh/laravel-debugbar](http://github.com/barryvdh/laravel-debugbar)
	- [PHP Coding Standards Fixer - fabpot/php-cs-fixer](https://github.com/friendsofphp/php-cs-fixer)
- アドオン
	- `auth` Laravel 5.1に添付されている標準認証MVCキット
	- `debug` デバッグ支援機能
- 追加コマンド (Extension)
	- make:addon
	- make:console
	- make:controller
	- make:event
	- make:job
	- make:lisener
	- make:middleware
	- make:migration
	- make:model
	- make:policy
	- make:provider
	- make:request
	- make:seeder
	- make:test
	- addon:setup
	- addon:list
	- addon:check
	- addon:remove
	- database:status
	- database:upgrade
	- database:clean
	- database:refresh
	- database:rollback
	- database:again
	- database:seed
	- app:container
	- hash:make
	- hash:check
	- tail (Laravel4互換、`app.log=daily`対応)
- 日本語リソース (resources/lang/ja)

## 著者

Laravel Tokyo

## ライセンス

MIT
