<?php
//rss.php

class Rss extends CI_Controller {

    public function __construct(){
  //this echos the controller
        parent::__construct();
        $this->load->model('rss_model');
                                        //'banner' references custom_config. 2nd parameter is what it should be
        $this->config->set_item('banner', 'RSS');
        $this->config->set_item('title', 'RSS feed');
      }//end constructor

       public function index()
{
        $data['rss'] = $this->rss_model->get_rss();
        $data['title'] = 'RSS feed';
        $this->load->view('rss/index', $data);
    }//end index()

    public function view($slug = NULL)
    {
        $data['rss_item'] = $this->rss_model->get_rss($slug);

        if(empty($data['rss_item'])){
            show_404();
        }

        $data['rss'] = $this->rss_model->get_rss();
        $data['title'] = 'RSS feed';
        $this->load->view('rss/view', $data);
 }// end view()
}//end Rss
