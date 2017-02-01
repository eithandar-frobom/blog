
<div class="users form">
<h1>Users</h1>
<table>
    <thead>
        <tr>
            <th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
            <th><?php echo $this->Html->link('username', 'Username');?>  </th>
            <th><?php echo $this->Html->link('email', 'E-Mail');?></th>
            <th><?php echo $this->Html->link('created', 'Created');?></th>
            <th><?php echo $this->Html->link('modified','Last Update');?></th>
            <th><?php echo $this->Html->link('role','Role');?></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>                       
        
        <?php foreach($users as $user): ?>                
            <td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
            <td><?php echo $this->Html->link( $user['User']['username'],array('action'=>'edit', $user['User']['id']));?></td>
            <td ><?php echo $user['User']['email']; ?></td>
            <td ><?php echo $user['User']['created']; ?></td>
            <td ><?php echo $user['User']['modified']; ?></td>
            <td ><?php echo $user['User']['role']; ?></td>
            <td >
            <?php echo $this->Html->link("Edit", array('action'=>'edit', $user['User']['id']) ); ?> 
            <?php echo $this->Form->postlink("Delete", array('action'=>'delete', $user['User']['id']),array('confirm'=>'Are you sure?')); ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php unset($user); ?>
    </tbody>
</table>

</div>                
    <?php echo $this->Html->link( "Add A New User.",   array('action'=>'add')); ?> <br/>
    <?php echo $this->Html->link( "Logout",   array('action'=>'logout') ); ?>   