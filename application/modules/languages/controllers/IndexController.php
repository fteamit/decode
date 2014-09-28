<?php
class Languages_IndexController extends FTeam_Controller_Action {
		
	public function init(){
		parent::init();
	}
		
	public function indexAction() {	
            $param = $this->getRequest()->getParam('lang');
            $lang = New Zend_Session_Namespace('languages');
            if(!empty($param)){
                $lang->lang = $param;
            }else{
                $lang->lang = DEFAULT_LANGUAGES;
            }
            if (!empty($lang->lang)) {
                $locale = $lang->lang;
            }
            $module = $this->_request->getModuleName();
            $file = APPLICATION_PATH . '/languages/' . $module . '/' . $locale . '/' . 'lang.tmx';die;
            $option = array(
                'adapter' => 'Tmx',
                'content'=> $file,
                'locale'=> $lang->lang
            );
            $translate = new Zend_Translate($option);
            Zend_Registry::set('Zend_Translate', $translate);
            //$this->_helper->viewRenderer->setNoRender();
            //$this->redirect('http://localhost:8080/decode/');
	}
}
