<?php

namespace Ant\Widgets\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SlickServiceProvider extends ServiceProvider {
	public function boot() {
		$this->loadViewsFrom(dirname(dirname(__DIR__)).'/resources/views', 'widgets.slick');

        Blade::directive('slick', function ($expression) {
			//$expression = $this->parseExpression($expression);
			return "<?php ob_start() ?>";
        });

        Blade::directive('endslick', function ($expression) {
            if (trim($expression) == '') {
				$expression = '[]';
			}
            return "<?= app('rinvex.widgets')->make('Ant\Widgets\Slick', array_merge($expression, ['content' => ob_get_clean()])) ?>";
        });
	}
}