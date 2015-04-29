<?php
//rss.php controller
class Rss extends CI_Controller {


        public function __construct()
        {
                parent::__construct();
                 $this->load->model('news_model');
                 $this->config->set_item('banner','Global News Banner');
        }// end constructor

       public function index()
    {
           
           
//            $data['news'] = $this->news_model->get_news();
//            $data['title'] = 'News archive';
//             $this->load->view('news/index', $data);

  $request = "http://rss.news.yahoo.com/rss/software";// model
  $response = file_get_contents($request);//model
   $data['xml'] = simplexml_load_string($response);//model
                
           // $data['news'] = $this->rss_model->get_news();
            $data['title'] = 'RSS fedd';
            $this->load->view('rss/index', $data);

       
    }// end index()
    
    
} # end Rss class/controller