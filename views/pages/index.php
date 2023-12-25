<?php

use Leaf\UI;
use Leaf\UI\Component;

class IndexPage extends Component
{
    public $key = 'IndexPage';

    public function render()
    {
        return UI::view('./views/pages/index.html');
    }
}