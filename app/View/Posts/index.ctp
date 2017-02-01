<html><head>
<title>Blog</title>
<body>
<h1>Welcome to my Blog</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<p><?php echo $this->Html->link('Logout', array('controller' =>'users' , 'action' =>'Logout' )); ?></p>

<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Image</th>

<th>Modified_Date</th>
<th>Created_Date</th>
<th></th>
<th></th>
</tr>
<?php foreach ($posts as $post): ?>
<tr>
<td><?php echo $post['Post']['id']; ?></td>

<td>
<?php
echo $this->Html->link(
$post['Post']['title'],
array('action' => 'view', $post['Post']['id'])
);
?>
</td>

<td><?php echo $this->Html->link($post['Post']['imagePath'],

array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>

<td>
<?php echo $post['Post']['modified']; ?>
</td>
<td>
<?php echo $post['Post']['created']; ?>
</td>



</td>
</tr>
<?php endforeach; ?>
</table>

<?php
echo $this->Form->button('Logout', array(
    'type' => 'button',
    'onclick' => 'location.href=\'http://192.168.33.12/users/login\';',
    ));
?>
    </body>
</html>