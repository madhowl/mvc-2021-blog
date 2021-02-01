<?php


namespace Core;

use Twig;

class CoreView
{
    public $loader;     // место где будут хранятся шаблоны Twig
    public $twig;       // инициализация самого движка

    public function __construct()
    {
        $this->loader = new \Twig\Loader\FilesystemLoader('template');
        $this->twig = new \Twig\Environment($this->loader, ['autoescape' => false]);

    }

    public function index()
    {
    }
}

