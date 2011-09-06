	
<h2 class="title">Add Paste</h2>
<?php
echo $this->Form->create('Paste');
echo $this->Form->input('username', array('label' => 'Username (optional)'));
echo $this->Form->input('pastepass', array('label' => 'Password (optional)'));
echo $this->Form->input('paste', array('rows' => '8'));
echo $this->Form->end('Add Paste');
?>