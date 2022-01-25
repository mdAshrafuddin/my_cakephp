<?= $this->Html->link('Add', '/students/add', ['class' => 'btn btn-outline-primary']);?>

<?= $this->Form->create(null, ['url' => ['action' => 'deleteAll']]) ?>
</br>
<button type="button" class="btn btn-danger">DeleteAll</button>
<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if (count($students) > 0) :?>
        <?php foreach($students as $student):?>
            <tr>
                <th scope="row"><?= $this->Form->checkbox('ids[]', ['value' => $student->id])?></th>
                <th scope="row"><?= h($student->id)?></th>
                <td><a href="<?= $this->Url->build(['controller' => 'Students', 'action' => 'view', $student->slug])?>"><?= h($student->name)?></a></td>
                <td><?= h($student->email)?></td>
                <td><?= h($student->phone)?></td>
                <td><a href="<?= $this->Url->build(['controller' => 'Students', 'action' => 'edit', $student->slug])?>">Edit</a> 
                / 
                <?= $this->Form->postLink('Delete', ['action' => 'delete', $student->slug], ['confirm' => 'Are you sure?'])?></td>
            </tr>
        <?php endforeach;?>
    <?php else:?>
        <h1 style="color:red;">Please Insert value</h1>
    <?php endif; ?>
  </tbody>
</table>
<?= $this->Form->end(); ?>

<nav aria-label="...">
  <ul class="pagination">
    <?= $this->Paginator->prev('Previous')?>
    <?=  $this->Paginator->numbers()?>
    <?=  $this->Paginator->next('Next')?>
  </ul>
</nav>
