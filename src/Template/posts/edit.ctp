<?= $this->Form->create(); ?>
  <fieldset>
    <legend>Add New Post</legend>
    <div class="form-group row">
      
       <div class="col-sm-8">
        <?php  echo $this->Form->input('title', ['class' => 'form-control', 'value' =>  $post->title]);   ?>
      </div>
       <div class="col-sm-8">
        <?php  echo $this->Form->input('description', ['class' => 'form-control', 'placeholder' => 'Enter Post Description here...', 'value' => $post->description]);   ?>
      </div>
    </div>
    
   
   
    <?php  echo $this->Form->button(__('Update Post'), ['type' => 'submit', 'class' => 'btn btn-primary']); ?>
    <?php  echo $this->Html->link('Cancel', ['action' => 'index'], ['type' => 'button', 'class' => 'btn btn-danger']); ?>
<?= $this->Form->end(); ?>