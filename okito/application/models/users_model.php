<?PHP
class users_model extends CI_Model{
		public function register($enc_password)
		{
			// User data array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                'zipcode' => $this->input->post('zipcode')
			);

			// Insert user
			return true;
			//return $this->db->insert('users', $data);
		}
			public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			//$result = $this->db->get('users');

			/*if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}*/
			return true;
		}

	}
?>