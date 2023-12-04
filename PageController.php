<?php

class PageController
{
    public function home()
    {
        $this->loadView('I\'m in the homepage');
    }

    public function folder1()
    {
        $this->loadView('I\'m in folder1');
    }

    public function folder2()
    {
        $this->loadView('I\'m in folder2');
    }

    private function loadView($content)
    {
        require __DIR__ . '/view.php';
    }
}
