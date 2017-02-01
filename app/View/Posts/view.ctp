<html>
    <head><title>View</title></head>
    <body>
    <p><?php echo $this->Html->link('Manage', array('action' => 'manage')); ?></p>
    <table>
    <tr>
    <th></th>
    <th></th>
    </tr>
   

    <h1><?php echo ($post['Post']['title']); ?></h1>
   
    
       	<p><?php echo $this->Html->image('./posts/'. $post['Post']['imagePath']); ?></p>
       

    <?php foreach ($post['Comment'] as $comment): ?>


	<div class="comment" style="margin-left:50px;">
		<?php echo h($comment['name'])?>:
       <?php echo h($comment['body'])?>
       <?php
      echo $this->Form->postLink(
      'Delete',
      array('action' => 'delete', $comment['id'],'controller'=>'Comments',
      'confirm' => 'Are you sure?'))
      ?>
        
    </div>
	<?php endforeach; ?>

	<?php
     echo $this->Form->create('Comment',array('url'=>array('controller'=>'Posts','action'=>'view',$post['Post']['id'])));
    
     echo $this->Form->input('Comment.body');
	?>

    
	<?php echo $this->Form->end('Submit');?>


    </body>
</html>