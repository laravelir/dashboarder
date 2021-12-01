<?php

namespace Laravelir\Dashboarder\Widgets;

use Laravelir\Dashboarder\Widgets\Forms\Input;
use Laravelir\Dashboarder\Widgets\Forms\Select;
use Laravelir\Dashboarder\Widgets\Forms\Checkbox;
use Laravelir\Dashboarder\Widgets\Forms\Textarea;

abstract class Widget
{
    const WIDGETS = [
        'input' => Input::class,
        'textarea' => Textarea::class,
        'checkbox' => Checkbox::class,
        'select' => Select::class,
    ];

    public function __construct(
        protected $name,
        protected $type,
        protected $input_type = null,
        protected $options = [],
    ) {}

    abstract public function render();
}
