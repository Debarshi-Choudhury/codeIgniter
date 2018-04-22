<?php

class Users extends CI_Controller{

	public function login(){

		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
		if($this->form_validation->run()==FALSE){
			$data=array(
				'errors'=>validation_errors()
				);
			$this->session->set_flashdata($data);
		}
		redirect('home');

		// echo $this->input->post('username');
		// echo $_POST['username']; 

	}

















	// public function show($user_id){

	// 	// $this->load->model('user_model');
	// 	$data['results']= $this->user_model->get_users($user_id);
		

	// 	$this->load->view('user_view',$data);


	// 	// foreach ($result as $object) {
	// 	// 	echo $object->username . "<br>";     
	// 	// }
	// }

	// public function insert(){

	// 	$username="dhiman";
	// 	$password="bigd";
	// 	$this->user_model->create_users([
	// 		'username'=>$username,
	// 		'password'=>$password
	// 	]);
	// }

	// public function update(){
	// 	$id=3;

	// 	$username="William";
	// 	$password="not so secret";
	// 	$this->user_model->update_users([
	// 		'username'=>$username,
	// 		'password'=>$password
	// 	],$id);
	// }

	// public function delete(){
	// 	$id=3;
	// 	$this->user_model->delete_users($id); 
	// }
}


?>