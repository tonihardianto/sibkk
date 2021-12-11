<?php
class M_user extends CI_Model{
	function get_user(){
		$hsl=$this->db->query("SELECT * FROM tb_user");
		return $hsl;
	}
  function save_user($username, $password, $fullname, $address, $phone, $email, $level){
    $hsl=$this->db->query("insert into tb_user(user_username, user_password, user_fullname, user_alamat, user_phone, user_mail, user_level)
    values ('$username', md5('$password'), '$fullname', '$address', '$phone', '$email', '$level')");
    return $hsl;
    }
  function edit_user($id, $user, $pass, $name, $address, $phone, $mail, $level){
    $res=$this->db->query("update tb_user set user_username='$user', user_password=md5('$pass'), user_fullname='$name', user_alamat='$address',
    user_phone='$phone', user_mail='$mail', user_level='$level' where user_id='$id'");
    return $res;
  }
  function del_user($id){
    $res=$this->db->query("Delete From tb_user where user_id='$id'");
    return $res;
  }
	public function count_user(){
		$res = $this->db->get('tb_user');
		if($res->num_rows()>0)
     {
       return $res->num_rows();
     }
     else
     {
       return 0;
     }
	}

}

 ?>
