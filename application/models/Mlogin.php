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
				$NamaLengkap=$data->NamaLengkap;
				$Level=$data->Level;
				$array=array(
					'NamaLengkap'=>$NamaLengkap,
					'Level'=>$Level
				);
				$this->session->set_userdata($array);
				redirect('cadmin/formadmin','refresh');
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