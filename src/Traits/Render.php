<?php

namespace TysonLaravel\FormComponents\Traits;

use Illuminate\Support\Str;

trait Render
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('form-components::forms.' . Str::kebab(class_basename($this)));
    }
}
