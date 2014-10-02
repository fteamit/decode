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
        //Kiem tra chieu dai cua mot chuoi
        $input = "Happvcbdtgddyd";
        $validator = new Zend_Validate_StringLength(5, 10);

        $validator->setMessages(array(
            Zend_Validate_StringLength::TOO_SHORT => 'Chuoi nay thi qua ngan',
            Zend_Validate_StringLength::TOO_LONG => 'Chuoi nay thi qua dai'
                )
        );
        $v = New FTeam_Validate_MyValidate();
        $v->add_validate($validator);
        $arr_val = array(
            $validator => $input
        );
        $v->set_list_fields($arr_val);
        
        if ($v->isValid())
        {
            echo 'Thoa dieu kien dua vao';
        }
        else
        {
            $messages = $validator->getMessages();
            echo current($messages);
            /* echo '<pre>';
              print_r($messages);
              echo '</pre>'; */
        }
        die;



        if ($this->getRequest()->isPost())
        {
            $email = $this->getRequest()->getParam('email', '');
            $pass = $this->getRequest()->getParam('password', '');

            $validate = New Zend_Validate_EmailAddress();
            $validate->isValid($email);


            echo __FILE__;
            var_dump($validate->isValid($email));
            echo __LINE__;
            die;

            $remember = $this->getRequest()->getParam('remember_me', 0);
            $login = new Admin_Model_Login();
            $result = $login->login($email, $pass);
            if (count($result) > 0)
            {
                
            }
        }
    }

}
