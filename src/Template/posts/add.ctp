<?= $this->Form->create(); ?>
  <fieldset>
    <legend>Add New Post</legend>
    <div class="form-group row">
      
       <div class="col-sm-8">
        <?php  echo $this->Form->input('title', ['class' => 'form-control', 'placeholder' => 'Enter Post Title here...']);   ?>
      </div>
       <div class="col-sm-8">
        <?php  echo $this->Form->input('description', ['class' => 'form-control', 'placeholder' => 'Enter Post Description here...']);   ?>
      </div>
    </div>
    
   
   
    <?php  echo $this->Form->button(__('Add Post'), ['type' => 'submit', 'class' => 'btn btn-primary']); ?>
    <?php  echo $this->Html->link('Cancel', ['action' => 'index'], ['type' => 'button', 'class' => 'btn btn-danger']); ?>
<?= $this->Form->end(); ?>