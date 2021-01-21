<?php


namespace App\core;

use Twig;

class CoreView
{
    public $loader;     // место где будут хранятся шаблоны Twig
    public $twig;       // инициализация самого движка

    public function __construct()
    {
        $this->loader = new \Twig\Loader\FilesystemLoader('templates');
        $this->twig = new \Twig\Environment($this->loader, ['autoescape' => false]);

    }

    public function index()
    {
    }
}

