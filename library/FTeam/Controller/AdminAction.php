<?php
class FTeam_Controller_AdminAction extends FTeam_Controller_Action{
	
	public function init(){
            parent::init();
            $template_path = TEMPLATE_PATH . "/admin/default";
            $this->loadTemplate($template_path);
	}
	
}