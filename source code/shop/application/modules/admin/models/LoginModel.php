<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LoginModel extends MY_Model{
    function validate( $admin ){
        $isExit =   $this->db->select()
                            ->where('username', $admin['username'])
                            ->where('password', $admin['password'])
                            ->get('tbl_admin')
                            ->row_array();
        if(count($isExit) > 0){
            return $isExit;
        } else {
            return false;
        }
    }
  
}