<?php


namespace Controllers;


use Core\CoreModel;
use Models\ArticlesModel;
use Views\BlogView;

class BlogController
{
    public $Articles;
    public $Categories;
    public $lastPosts = array();
    public $View;

    public function __construct ()
    {
        $this->Categories = new CoreModel('categories');
        $this->Articles = new ArticlesModel('articles');
        $this->lastPosts = $this->Articles->getLastPost ();
        $this->View = new BlogView();
    }

    public function ShowAllArticles()
    {
        $articles_list = $this->Articles->all ();
        $categories_list = $this->Categories->all ();
        $title = 'Все публикации';
        $last_posts = $this->Articles->lastPosts;
        $this->View->ShowAllArticles ($articles_list, $categories_list, $title, $last_posts);
    }

    public function ShowSingleArticle($id)
    {
        $article = $this->Articles->getById ($id);
        $categories_list = $this->Categories->all ();

        $this->View->ShowSingleArticle ($article, $categories_list);
    }
    public function ShowArticlesFromCategory($category_id)
    {

    }

}