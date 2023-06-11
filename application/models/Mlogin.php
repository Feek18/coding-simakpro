<?php
	class Mlogin extends CI_Model
	{
		function proseslogin()
		{
			$Username=$this->input->post('username');
			$Password=$this->input->post('password');
			$sql="select * from tb_login where username='".$Username."' ";
			$sql.="and password='".$Password."'";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				//ada ada di database
				$data=$query->row();
				$Username=$data->Username;
				$Password=$data->Password;
				$array=array(
					'username'=>$Username,
					'password'=>$Password
				);
				$this->session->set_userdata($array);
				redirect('clogin/indexdashboard','refresh');
			}
			else
			{
				//tidak ada data
				$this->session->set_flashdata('pesan','Login Gagal.');
				redirect('clogin/formlogin','refresh');
			}
		}	
	}
?>