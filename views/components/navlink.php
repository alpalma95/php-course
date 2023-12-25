<?php

use Leaf\UI;
use Leaf\UI\Component;

class HelloWorld extends Component
{
  public $name = 'Test';
  public $key = 'HelloWorld';

  public function updateName($name)
  {
    $this->name = $name;
  }

  public function render()
  {
    return UI::view('./views/components/navlink.html');
  }
}