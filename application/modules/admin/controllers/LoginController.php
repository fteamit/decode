<?php

class Admin_LoginController extends FTeam_Controller_Action
{

    public function init()
    {
        parent::init();
        $template_path = TEMPLATE_PATH . "/admin/login";
        $this->loadTemplate($template_path);
    }

    public function indexAction()
    {
        if ($this->getRequest()->isPost())
        {
            $email_validate = array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_EmailAddress()
            );

            $arr_messages = array(
                'email' => array(
                    Zend_Validate_NotEmpty::IS_EMPTY => 'email not empty',
                    Zend_Validate_EmailAddress::INVALID_FORMAT => 'email is not a valid email address'
                ),
                'password' => array(
                    Zend_Validate_NotEmpty::IS_EMPTY => 'password not empty'
                )
            );
            $arr_validate = array(
                'email' => $email_validate,
                'password' => new Zend_Validate_NotEmpty()
            );

            $validate = new FTeam_Validate_MyValidate();
            if ($validate->isValid($arr_validate, $arr_messages))
            {
                $remember = $this->getRequest()->getParam('remember_me', 0);
                $login = new Admin_Model_Login();
                $arr_value = $validate->getValue();
                $result = $login->login($arr_value['email'], $arr_value['password']);
                if (!empty($result))
                {
                    echo "<pre>";
                    print_r($result);
                    echo "</pre>";die;
                    $login = new Zend_Session_Namespace('login_admin');
                    $login->user_info = '';
                }else{
                     $this->view->messages = __('email or password not correct');
                }
            }
            else
            {
                $this->view->messages = $validate->getMessages();
                $this->view->value = $validate->getValue();
            }
        }
    }

}
