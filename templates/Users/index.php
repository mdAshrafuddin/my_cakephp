<table class="table">
    <?= $this->Html->link('Add', '/users/add', ['class' => 'btn btn-outline-primary']);?>

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($users as $user):?>
        <tr>
            <th scope="row"><?= h($user->id)?></th>
            <td><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'view', $user->id])?>"><?= h($user->name)?></a></td>
            <td><?= h($user->email)?></td>
            <td><?= h($user->phone)?></td>
            <td>
              <?php if($user->status == 'InActive'): ?>
               <?= $this->Form->postLink(__('Active'), ['action' => 'userStatus', $user->id, $user->status], ['confirm' => 'Are you sure?'])?> 
              <?php  else: ?>
               <?= $this->Form->postLink(__('InActive'), ['action' => 'userStatus', $user->id, $user->status], ['confirm' => 'Are you sure?'])?> 
              <?php endif;?>
               
        
        </td>
            <td>
            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'edit', $user->id])?>">Edit</a>  
              
              / <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'delete', $user->id])?>">Delete</a>  </td>
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
