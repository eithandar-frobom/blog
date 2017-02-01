<?php

class CommentsController extends AppController

{
	public function delete($id = null){
  $user_id = $this->Auth->user('id');
  $comment_field= $this->Comment->findById($id);
  $commend_id= $comment_field['Comment']['id'];
  debug($commend_id);
  if($user_id){
    $result = $this->Comment->delete($commend_id);
    if($result){
      $this->Flash->success(
        __('This comment with id %s has been delete.', h($id))
        );
    }else {
      $this->Flash->error(
        __('This comment with id %s has not been delete.', h($id))
        );
    }
    return $this->redirect(array('action' => 'index','controller'=>'Posts'));
    
  }
}
}
?>