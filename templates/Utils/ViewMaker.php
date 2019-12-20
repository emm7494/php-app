<?php

declare(strict_types=1);

namespace Templates\Utils;

use App\Controllers\AbstractController;

class ViewMaker extends AbstractController
{
    //private $_template_dir;

    public function __construct(string $template_dir = '../templates/pages')
    {
        //parent::__construct();
        $this->_template_dir = $template_dir;
    }

    public function __destruct()
    {
        //parent::__destruct();
    }

    public function render(string $page, array $data)
    {
        extract($data);
        require_once $this->_template_dir . '/' . $page . '.php';
    }
}
