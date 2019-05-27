<?PHP
class users_model extends CI_Model
{
        public function register($enc_password)
		{
			// User data array
			$data = array(
              'UserName' => $this->input->post('username'),
              'Password' => $enc_password,
			);
/*			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                'zipcode' => $this->input->post('zipcode')
			);
*/
			// Insert user
			return $this->db->insert('user', $data);
		}
			public function login($username, $password){
			// Validate
			$this->db->where('UserName', $username);
			$this->db->where('Password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
					}
    public function valid_username($username){
        if(strlen ($username) < 3 || strlen ($username) > 20 ) return false;
        else return true;
    }
	}

?>