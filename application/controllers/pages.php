<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    

    public function index()
    {
        $page="home";
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // 页面不存在
         //   show_404();
        }
  
        $data['title'] = ucfirst($page); // 将title中的第一个字符大
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

	public function view($page = "11")
	{

		 if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
  		{
    		// 页面不存在
    		show_404();
  		}
  
  		$data['title'] = ucfirst($page); // 将title中的第一个字符大
  		$this->load->view('templates/header', $data);
  		$this->load->view('pages/'.$page, $data);
  		$this->load->view('templates/footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */