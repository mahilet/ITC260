<?php
/**
* Customer.php controller for a generic Customer
*
* Used to show how to do CRUD in CodeIgniter
* @package ITC260
* @subpackage Customer
* @author Mahilet Hiemeariam <mhalle02@seattlecentral.edu/http:>
* @version 1.0 2015/04/30
* @link http:/mahitletdan.com/itc260/sandbox/contact-mahilet/contact-mahilet.php
* @license http://www.apache.org/licenses/LICENSE-2.0
* @seeCustomer_model.php
* @see index.php
* @todo none
*/


/**
* Customer controller foe our CRUD demo
* @see Customer_model

* @todo none
*/
class Customer extends CI_Controller {
       /**
        * load default data into object
        *
        * @param none

        * @return void
        * @todo none
        */
        public function __construct()
        {//everything here is golobal to all method in the controller
                parent::__construct();
            /*
                 $this->load->model('news_model');
                 $this->config->set_item('banner','Global News Banner');
            */
        }// end constructor
           /**
            * shows initial Customer Database data
            * @param none

            * @return void
            * @todo none
            */

       public function index()
    {

           // $data['news'] = $this->rss_model->get_news();
            $data['title'] = 'Customer';
            $this->load->view('customer/index', $data);

    }// end index()


} # end Customer class/controller()
