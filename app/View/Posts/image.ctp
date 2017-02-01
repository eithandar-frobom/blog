<?php
   echo $this->Form->create('Image', array('type' => 'file'));
?>
   <fieldset>
       <legend><?php echo __('Add Image'); ?></legend>
   <?php
       echo $this->Form->input('Image.submittedfile', array(
           'between' => '<br />',
           'type' => 'file',
           'label' => false
       ));
   ?>
   </fieldset>
<?php echo $this->Form->end(__('Send My Image')); ?>