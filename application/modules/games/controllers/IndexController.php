<?php

class Games_IndexController extends FTeam_Controller_Action
{

    protected $class_body = 'the-game';

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        $option = new Admin_Model_Options();
        $this->view->options_game_slideshow = $option->get_options_fontend(GAMES_SLIDESHOW_IMG);
        $this->view->options_game_rule = $option->get_options_fontend(GAMES_RULE);
    }

}
