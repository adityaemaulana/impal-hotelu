<?php
	class Kamar_M extends CI_Model{
		const TABLE = 'kamar';

		public function inputKamar($data)
		{
			//$img = 'assets/img/'.$_FILES['cover']['name'];
			$data = array(
					//'imageurl' => $img,
					'nama' => $_POST['nama'],
					'tipe' => $_POST['tipe'],
					'status' => $_POST['status'],
					'harga' => $_POST['harga'],
					'imageUrl' => ''
			);

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
				//'imageurl' => $img,
				'nama' => $_POST['nama'],
				'tipe' => $_POST['tipe'],
				'status' => $_POST['status'],
				'harga' => $_POST['harga'],
				'imageUrl' => ''
			);

			$this->db->where('id', $id);
			$this->db->update(self::TABLE, $data);
		}
    }
?>