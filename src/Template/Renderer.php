<?php

namespace Arciaga\Template;

interface Renderer
{
    public function render($template, $data = []);
}
