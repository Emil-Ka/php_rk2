<?php

namespace MyProject\Controllers;
use MyProject\Models\Users\User;
use MyProject\Models\Articles\Article;
use MyProject\Models\Comments\Comment;
use MyProject\Controllers\ArticleController;

class CommentController {

  public function add(int $idArticle){
    // $articleController = new ArticleController();
    // $articleController->view($idArticle);

    $author = User::getById(1);
    $article = Article::getById($idArticle);
    $comment = new Comment();
    $comment->setAuthor($author);
    $comment->setArticle($article);
    $comment->setText($_POST['text']);
    $entities = $comment->save();

    header('Location: /211/321/OOP/www/article/'.$idArticle.'#'.$comment->getId());
  }
}

?>