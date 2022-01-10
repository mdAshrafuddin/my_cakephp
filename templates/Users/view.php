<table class="table">
<?= $this->Html->link('Users', '/users',['class' => 'btn btn-outline-primary'])?>

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <tr>
        <th scope="row"><?= h($user->id)?></th>
        <td><?= h($user->name)?></td>
        <td><?= h($user->email)?></td>
        <td><?= h($user->phone)?></td>   
        </td>
            <td>
            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'edit', $user->id])?>">Edit</a>  
              
              / <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'delete', $user->id])?>">Delete</a>  </td>
        </tr>
    </tr>
  </tbody>
</table>