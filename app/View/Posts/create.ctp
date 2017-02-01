<?php echo $this->Form->create('Post', array('url' => array('action' => 'create'))); ?>

        ... form fields here ...

<?php echo $this->Form->end('Save'); ?>
<?php echo $this->Form->create('Post', array('url' => array('action' => 'create'), 'enctype' => 'multipart/form-data')); ?>
<?php echo $this->Form->input('image', array('type' => 'file')); ?>
<?php echo $this->Form->input('upload', array('type' => 'file')); ?>