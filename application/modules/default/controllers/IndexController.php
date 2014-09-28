<?php
class IndexController extends FTeam_Controller_Action {
		
	public function init(){
		parent::init();
	}
		
	public function indexAction() {	
             echo $this->getRequest()->getRequestUri();
		echo '<br>' . __METHOD__;
	}	

	public function viewAction() {
		echo '<br>' . __METHOD__;
	}
	
	public function demoAction(){
		$this->_helper->viewRenderer->setNoRender();
	}
        public function langAction(){
            $lang = $this->_request->getParam('lang');
            $this->changLanguages($lang);
            $this->redirect('/');
        }
}
