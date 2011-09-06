<?php
App::import('Sanitize');
class PastesController extends AppController {

	var $name = 'Pastes';
    
    function beforeFilter() {
        $this->set('latestpastes', $this->_latest_pastes());
    }
    
    function index() {
        $this->redirect(array('controller' => 'pastes', 'action' => 'add_paste'));
    }
    
    function add_paste() {
        $this->set('title_for_layout', 'Add Paste');
        if (!empty($this->data)) {
            $this->data['Paste']['baseid'] = base_convert(time(), 12, 32); // very clever!

            $this->data = Sanitize::clean($this->data);
            $this->data['Paste']['paste'] = str_replace(array('\n', '\r'), '<br />', $this->data['Paste']['paste']);
            if ($this->Paste->save($this->data)) {
            $this->redirect(array('controller' => 'pastes', 'action' => 'view_paste', $this->data['Paste']['baseid'], $this->data['Paste']['pastepass']));
            }
        }
    }
    
    function view_paste($id, $pass = null) {
        $this->set('title_for_layout', 'Viewing Paste :: '.$id.'');
        $paste = $this->Paste->findByBaseid($id);
        if (empty($paste['Paste']['pastepass'])) {
            $this->set('paste', $this->Paste->findByBaseid($id));
        } else {
            if ($pass == $paste['Paste']['pastepass']) {
                $this->set('paste', $this->Paste->findByBaseid($id));
            } else {
                $this->Session->setFlash('YO DAWG YOU NOT ALLOWED HERE INIT! MY BRAS GIRLS DOGS SISTER SAID SO INIT!'); // blame wags!
                $this->redirect($this->referer());
            }
        }
    }
    
    function view_paste_diff($id) {
        $this->set('title_for_layout', 'Viewing Paste Diff :: '.$id.'');
    }
    
    function edit_paste($id) {
        $this->set('title_for_layout', 'Editting Paste :: '.$id.'');
    }
    
    function delete_paste($id) {
        $this->set('title_for_layout', 'Deleting Paste :: '.$id.'');
    }
    
    private function _latest_pastes() {
        $pastes = $this->Paste->find('all', array('conditions' => array('pastepass' => ''), 'limit' => '10'));
        return $pastes;
    }
}
?>