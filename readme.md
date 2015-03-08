## Laravel PHPフレームワーク 日本語スケルトン版

### インストール方法

#### Laravel5.0 (リリース版)
```Console
$ composer create-project laravel-plus/laravel5 <directory>
```

### 本家版との違い

以下のものが標準で組み込まれています。
- パッケージ指定
	- [Socialite - laravel/socialite](http://github.com/laravel/socialite)
	- [Illuminate/html - illuminate/html](http://github.com/illuminate/html)
	- [Extension Pack - laravel-plus/extension](http://github.com/jumilla/laravel-extension)
	- [Debugbar - barryvdh/laravel-debugbar](http://github.com/barryvdh/laravel-debugbar)
- 追加コマンド (Extension)
	- addon:setup
	- addon:make
	- addon:check
	- app:container
	- hash:make
	- hash:check
	- route (Laravel4互換)
	- tail (Laravel4互換、`app.log=daily`対応)
- (予定)日本語リソース (lang/ja)

### ライセンス

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
