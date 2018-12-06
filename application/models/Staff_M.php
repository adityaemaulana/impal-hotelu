<?php
	class Staff_M extends CI_Model{
		const TABLE = 'staff';

		public function input($data)
		{
			$img = base_url().'/assets/plugins/images/'.$_FILES['image']['name'];
			
			$data = array(
                    'nama' => $_POST['nama'],
                    'jabatan' => $_POST['jabatan'],
					'username' => $_POST['username'],
                    'password' => $_POST['pass'],
                    'jeniskelamin' => $_POST['jk'],
                    'umur' => $_POST['umur'], 
					'imageUrl' => '$img'
            );
            echo $data['nama'];

			$this->db->insert(self::TABLE, $data);
		}
		
		public function getData()
		{
			$query = $this->db->get(self::TABLE);
			return $query->result();
		}

		public function delData($id)
		{
			$this->db->where('id', $id);
			$this->db->delete(self::TABLE);
		}

		public function upData($data, $id)
		{
			$data = array(
                'nama' => $_POST['nama'],
                'jabatan' => $_POST['jabatan'],
                'username' => $_POST['username'],
                'password' => $_POST['pass'],
                'jeniskelamin' => $_POST['jk'],
                'umur' => $_POST['umur'],
                'imageUrl' => ''
			);

			$this->db->where('id', $id);
			$this->db->update(self::TABLE, $data);
		}

		public function isAdmin($data){
			$this->db->where('username', $data['email']);
			$this->db->where('password', $data['password']);
			$query = $this->db->get('staff');

			if($query->num_rows() == 1){
				return $query->row(0);
			}else{
				return false;
			}
		}
    }
?>