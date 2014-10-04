<?php

class Admin_OptionsController extends FTeam_Controller_AdminAction
{

    protected $model_options ;
    public function init()
    {
        parent::init();
        $this->model_options = new Admin_Model_Options();
    }

    public function indexAction()
    {
        $str_group_code = "'".GLOBAL_MENU_TOP."','".GLOBAL_LOGO."'";
        $general_settings = $this->model_options->get_options_by_group_code($str_group_code);
        
        $str_group_code = "'".HOME_BANNER."','".HOME_VIDEO."','".HOME_DECODE."'";
        $home_settings = $this->model_options->get_options_by_group_code($str_group_code);
        
        $str_group_code = "'".GAMES_SLIDESHOW_IMG."','".GAMES_RULE."'";
        $game_settings = $this->model_options->get_options_by_group_code($str_group_code);
        
        $str_group_code = "'".CONTACT_EMAIL."','".CONTACT_PHONE."','".CONTACT_ADDRESS."','".CONTACT_FACEBOOK."'";
        $contact_settings = $this->model_options->get_options_by_group_code($str_group_code);
        $this->view->general_settings = $general_settings;
        $this->view->home_setting = $home_settings;
        $this->view->game_setting = $game_settings;
        $this->view->contact_setting = $contact_settings;
    }

}
