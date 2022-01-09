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
            <td><?= h($user->name)?></td>
            <td><?= h($user->email)?></td>
            <td><?= h($user->phone)?></td>
            <td><?= h($user->status)?></td>
            <td>edit / delete</td>
        </tr>
    <?php endforeach;?>
      
      
    
  </tbody>
</table>