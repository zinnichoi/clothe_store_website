<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LoginModel extends MY_Model{
    private $_name = 'tbl_customer';
    
    function __construct(){
        parent::__construct();
    } 
    
    function a_fCheckUser( $a_UserInfo ){
        $a_User =   $this->db->select()
                            ->where('username', $a_UserInfo['username'])
                            ->where('password', $a_UserInfo['password'])
                            ->get($this->_name)
                            ->row_array();
        if(count($a_User) >0){
            return $a_User;
        } else {
            return false;
        }
    }
  
}