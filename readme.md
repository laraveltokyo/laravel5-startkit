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
	- [Socialite - laravel/socialite](http://github.com/laravel/socialite)
	- [Illuminate/html - illuminate/html](http://github.com/illuminate/html)
	- [Extension Pack - laravel-plus/extension](http://github.com/jumilla/laravel-extension)
	- [Debugbar - barryvdh/laravel-debugbar](http://github.com/barryvdh/laravel-debugbar)
	- [PHP Coding Standards Fixer - fabpot/php-cs-fixer](https://github.com/friendsofphp/php-cs-fixer)
	- [Extended Generators - laracasts/generatos](https://github.com/laracasts/Laravel-5-Generators-Extended)
- アドオン
	- `auth` Laravel 5.1に添付されている標準認証MVCキット
	- `debug` デバッグ支援機能
	- `generators` ソースコード生成機能
- 追加コマンド (Extension)
	- addon:setup
	- addon:list
	- addon:check
	- addon:make
	- addon:remove
	- app:container
	- hash:make
	- hash:check
	- route (Laravel4互換)
	- tail (Laravel4互換、`app.log=daily`対応)
- 日本語リソース (resources/lang/ja)

### ライセンス

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
