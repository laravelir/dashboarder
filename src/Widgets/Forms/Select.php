<?php

namespace Laravelir\Dashboarder\Widgets\Forms;

use Laravelir\Dashboarder\Widgets\Widget;

final class Select extends Widget
{
    public function render($name, $values, $action)
    {
        return "<select wire:model='$name' class=\"form-control @error('$name') is-invalid @enderror\" id='input$name'>
                @foreach(getCrudConfig('$action')->inputs()['$name']['select'] as " . '$key => $value' . ")
                    <option value='{{ " . '$key' . " }}'>{{ " . '$value' . " }}</option>
                @endforeach
            </select>";
    }
}
