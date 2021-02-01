<?php


namespace Views;


use Core\CoreView;

class BlogView extends CoreView
{
    public function ShowAllArticles($articles, $categories, $title, $lastposts)
    {
       echo $this->twig->render ('front-end/blog-list.twig',['articles'=>$articles, 'categories'=>$categories, 'title'=>$title,'lastposts'=>$lastposts]);
    }

    public function ShowSingleArticle($article, $categories)
    {
        echo $this->twig->render ('front-end/blog-single.twig',['article'=>$article, 'categories'=>$categories]);
    }
}