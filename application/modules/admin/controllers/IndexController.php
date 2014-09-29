<?php
class Admin_IndexController extends FTeam_Controller_AdminAction {
		
	public function init(){
		parent::init();
	}
		
	public function indexAction() {	
		$t = new Admin_Model_Test();
                $t->getItem();
		echo '<br>' . __METHOD__;
	}	

	public function viewAction() {
		echo '<br>' . __METHOD__;
	}
}
