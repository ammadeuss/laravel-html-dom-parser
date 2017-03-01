<?php

namespace Ammadeuss\LaravelHtmlDomParser;

class Facade extends \Illuminate\Support\Facades\Facade {

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor() {
        return 'HTML2DomParser';
    }
}
