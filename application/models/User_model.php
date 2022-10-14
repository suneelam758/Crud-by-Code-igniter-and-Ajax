<?php 

class User_model extends CI_Model {
    function create($formArray){
      $this->db->insert('users', $formArray); //insert into users
    
    }
    function all(){
        return $Users =  $this->db->get('users')->result_array(); //select * from users
    }
    function getUser($userId){
        $this->db->where('Id',$userId);
        return $user =  $this->db->get('users')->row_array(); //select * from users where Id = ?;
    }
    function updateUser($userId,$formArray){
        $this->db->where('Id',$userId);
        $this->db->update('users', $formArray); // update users set name =? , wemail= ? where Id = ?;
    }
    function deleteUser($userId){   
        $this->db->where('Id',$userId);
        $this->db->delete('users'); //delete from users where Id = ?;

    }

}

?>