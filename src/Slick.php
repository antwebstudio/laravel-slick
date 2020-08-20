<?php

namespace Ant\Widgets;

use Rinvex\Widgets\Models\AbstractWidget;

class Slick extends AbstractWidget
{
    /**
     * Treat this method as a normal PHP method, or a controller action.
     * You may return view() or other content to render and display.
     */
    public function make()
    {
        //
        return view('widgets.slick::slick', $this->params);
    }
}