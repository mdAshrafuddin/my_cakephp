<table class="table">
  <thead>
    <tr>
      <th scope="col"><?=$this->Paginator->sort('#')?></th>
      <th scope="col"><?=$this->Paginator->sort('User')?></th>
      <th scope="col"><?=$this->Paginator->sort('title')?></th>
      <th scope="col"><?=$this->Paginator->sort('body')?></th>
      <th scope="col"><?=$this->Paginator->sort('Action')?></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($articles as $article):?>
    <tr>
      <th scope="row"><?= h($article->id)?></th>
      <td><?= h($article->user->name)?></td>
      <td><?= h($article->title)?></td>
      <td><?= h($article->body)?></td>
      <td>Edit / View</td>
    </tr>
    <?php endforeach;?>
    
  </tbody>
</table>


<nav aria-label="...">
  <ul class="pagination">
    <?= $this->Paginator->prev('Previous')?>
    <?=  $this->Paginator->numbers()?>
    <?=  $this->Paginator->next('Next')?>
  </ul>
</nav>
