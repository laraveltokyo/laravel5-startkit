const drinkbar = require('gulp-drinkbar');

/*
 |--------------------------------------------------------------------------
 | Gulp Drinkbar
 |--------------------------------------------------------------------------
 |
 */

drinkbar.task('style:app')
	.sass({
		input: 'resources/assets/sass/app.scss',
		output: 'public/css',
		config: {
		},
	})
	.watch('resources/assets/css/**/*.scss')

drinkbar.task('script:app')
	.webpack({
		input: 'resources/assets/js/app.js',
		output: 'public/js/app.js',
		config: {
		},
	})
	.watch('resources/assets/js/**/*.js')

drinkbar.taskGroups();

drinkbar.task('default', ['style', 'script'])
	.define()
