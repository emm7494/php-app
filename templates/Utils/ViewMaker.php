<?php

declare(strict_types=1);

namespace Templates\Utils;

class ViewMaker
{
    public function __construct(string $template_dir = '../templates/pages')
    {
        $this->_template_dir = $template_dir;
    }

    public function render(string $page, array $data)
    {
        extract($data);
        echo $this->_template_dir;
        require_once $this->_template_dir . '/' . $page . '.php';
    }

    public function __destruct()
    {
        echo 'hello';
    }
}
