<?php
	class Staff_M extends CI_Model{
		const TABLE = 'staff';

		public function input($data)
		{
            //$img = 'assets/img/'.$_FILES['cover']['name'];
			$data = array(
                    'nama' => $_POST['nama'],
                    'jabatan' => $_POST['jabatan'],
					'username' => $_POST['username'],
                    'password' => $_POST['pass'],
                    'jeniskelamin' => $_POST['jk'],
                    'umur' => $_POST['umur'], 
					'imageUrl' => ''
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
    }
?>