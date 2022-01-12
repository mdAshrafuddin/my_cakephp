<table class="table">
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
        <th scope="row"><?= h($student->id)?></th>
        <td><?= h($student->name)?></td>
        <td><?= h($student->email)?></td>
        <td><?= h($student->phone)?></td>
        <td><a href="#">Edit</a> / <a href="#">Delete</a></td>
    </tr>
        
  </tbody>
</table>