<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        /* Set an alert to display in the view */
        $this->template->alert(
                'An alert set via template library.',
                'info'
            );
        
        /* Load the view using template */
		$this->template->view('home/index');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */