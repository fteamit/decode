<?php
class IndexController extends FTeam_Controller_Action {
		
	public function init(){
		parent::init();
	}
		
	public function indexAction() {	
            $test = New Default_Model_Test();
            $test->test();
            echo '<br>' . __METHOD__;
	}	

	public function viewAction() {
		echo '<br>' . __METHOD__;
	}
	
	public function demoAction(){
		$this->_helper->viewRenderer->setNoRender();
	}
        public function langAction(){
            //$lang = $this->_request->getParam('lang');
            $this->changLanguages();
            $this->redirect('/');
        }
}
