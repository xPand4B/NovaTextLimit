<?php

namespace EricHeinzl\NovaTextLimit;

use Laravel\Nova\Fields\Field;

class NovaTextLimit extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-text-limit';

    public function max(int $value): NovaTextLimit
    {
        return $this->withMeta([
            'maxLength' => $value
        ]);
    }

    public function min(int $value): NovaTextLimit
    {
        return $this->withMeta([
            'minLength' => $value
        ]);
    }

    public function isLink(): NovaTextLimit
    {
        return $this->withMeta([
            'isLink' => true
        ]);
    }
}
