<?php
/**
* Customer.php controller for a generic Customer
*
* Used to show how to do CRUD in CodeIgniter
* @package ITC260
* @subpackage Customer
* @author Mahilet Hiemeariam <mhalle02@seattlecentral.edu/http:>
* @version 1.0 2015/05/5
* @link http:/mahitletdan.com/itc260/sandbox/contact-mahilet/contact-mahilet.php
* @license http://www.apache.org/licenses/LICENSE-2.0
* @seeCustomer.php
* @see index.php
* @todo none
*/

/**
* Customer model for our CRUD demo
* @see Customer

* @todo none
*/

class Customer_model extends CI_Model {
    /**
     * load default data into object
     *
     * @param none

     * @return void
     * @todo none
     */

        public function __construct()
        {
                $this->load->database();
        }#end constructor

        public function get_customers()
        {

          //return "Hello from the Customer model !";
          return$this->db->get('test_Customers');

        }#end get_customers()

/*
        public function get_news($slug = FALSE)
    {
            if ($slug === FALSE)
            {
                    $query = $this->db->get('news');
                    return $query->result_array();
            }

            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row_array();
    }# end get_model()

*/

}#end Customer_Model
