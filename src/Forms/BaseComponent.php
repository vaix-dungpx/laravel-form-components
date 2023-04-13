<?php

namespace TysonLaravel\FormComponents\Forms;

use Illuminate\View\Component;
use TysonLaravel\FormComponents\Traits\Render;

abstract class BaseComponent extends Component
{
    use Render;

    /**
     * Need validate is required
     *
     * @return string
     */
    public function isRequired()
    {
        if (!$this->attributes->has('required') || ($this->attributes->get('required', 'false') === 'false') || !$this->attributes->get('required', 'false')) {
            return '';
        }

        return 'required=true';
    }
    /**
     * Check setting readonly and set attribute
     *
     * @return string
     */
    public function isReadonly()
    {
        if (!$this->attributes->has('readonly') || !$this->attributes->get('readonly')) {
            return null;
        }

        return 'readonly=""';
    }
}
