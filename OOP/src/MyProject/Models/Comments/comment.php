<?php 

namespace MyProject\Models\Comments;
use MyProject\Models\Users\User;
use MyProject\Models\Articles\Article;
use MyProject\Models\ActiveRecordEntity;
use MyProject\Services\Db;

class Comment extends ActiveRecordEntity {
  protected $authorId;
  protected $articleId;
  protected $text;
  protected $createdAt;

  public function getText(){
      return $this->text;
  }
  public function setText(string $text){
      $this->text = $text;
  }
  public function setAuthor(User $author){
      $this->authorId = $author->id;
  }
  public function setArticle(Article $article){
    $this->articleId = $article->id;
  }

  public static function getByArticleId(int $articleId) {
    $db = Db::getInstance();
    $entities = $db->query('SELECT * FROM `'.static::getTableName().'` WHERE article_id = :id', [':id' => $articleId], static::class);
    return $entities ? $entities : null;
  }

  public static function getTableName():string 
    {
        return 'comments';
    }
}

?>