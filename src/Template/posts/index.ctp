<div class="container-fluid">
<div class="row">
<h2 style="color:white;">View all Posts</h2>
<br/>
<?php  echo $this->Html->link("Add New Post", ["action" => "add"], ["class" => "btn btn-primary"]) ; ?>
<?php  echo $this->Flash->render('message') ; ?>
<table class="table table-hover">
  <thead>
    <tr class="table-warning">
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    <tr >
      <?php foreach($posts as $post){



      ?>

      
      <td><?php  echo $post->id;   ?></td>
      <td><?php  echo $post->title;   ?></td>
      <td><?php  echo $post->description;   ?></td>
      <td>
     <?php  echo $this->Html->link("View", ['action' => 'view', $post->id], ["class" => "btn btn-info"]);    ?>
     <?php  echo $this->Html->link("Edit", ['action' => 'edit', $post->id], ["class" => "btn btn-success"]);    ?>
     <?php  echo $this->Html->link("Delete", ['action' => 'delete', $post->id], ["class" => "btn btn-danger"], ['confirm' => 'Are you sure?']);    ?>

      </td>
    </tr>

   
    <?php
    }
  	?>
  </tbody>
</table>
</div> 
</div> 