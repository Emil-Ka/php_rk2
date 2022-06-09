<?php include __DIR__.'/../header.html';?> 
    <h2><?= $article->getName()?></h2>
    <p><?= $article->getText()?></p>
    <hr>
    <h2 class="subtitle">Добавить комментарий</h2>
    <form action="/211/321/OOP/www/article/<?=$article->getId();?>/comments" method="POST">
      <textarea name="text" cols="30" rows="10">

      </textarea>
      <button style="display: block" type="submit">Отправить</button>
    </form>
    <h2>Все комментарии: </h2>
    <ul>
      <?php foreach ($comments as $comment): ?>
        <li id="<?=$comment->getId()?>"><?=$comment->getText()?></li>
      <? endforeach; ?>
    </ul>
<?php include __DIR__.'/../footer.html';?> 
