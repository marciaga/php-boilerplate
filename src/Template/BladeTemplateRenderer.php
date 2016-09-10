<?php
namespace Arciaga\Template;

use Windwalker\Renderer\BladeRenderer;

class BladeTemplateRenderer implements Renderer
{
    private $engine;

    public function __construct(BladeRenderer $engine)
    {
        $paths = [
            '../templates'
        ];

        $this->engine = new BladeRenderer($paths, array('cache_path' => __DIR__ . '/cache'));

    }

    public function render($template, $data = [])
    {
        return $this->engine->render($template, $data);
    }
}
