<?php namespace App\Controllers;

use App\Models\EventModel;

class Home extends BaseController
{

    public function __construct(){
        $this->db = \Config\Database::connect();
    }
    
    // Page utama
    public function index(){
		return view('layout/main');
    }
    
    // Page tambah event
    public function addEvent() {
        echo view('layout/add');
    }

    // function delete event
    public function deleteEvent($id){

        $this->db = \Config\Database::connect();
        $builder = $this->db->table("ps_massa_event");
        
        $builder->delete(["id" => $id]); 

        $session = \Config\Services::session();
        $session->setFlashdata('delete','');//('name of session','value of the session')

        return redirect()->back();
    }


    //function update event
    public function updateEvent($id){
        echo view('layout/update');
    }

    //function display event
	//daripada route jadual akan papar file datatables dlm folder view 
	public function event()
	{

        

		$db      = \Config\Database::connect();
		$builder = $db->table('ps_massa_event');
		$query   = $builder->get();
		$data['program'] = $query->getResult();

		echo view('layout/event',$data);

    }

    // function berkaitan tambah event
	function create(){
        helper('form');
        $model = new EventModel();

            $model->save(
                [
                    'tajuk' => $this->request->getVar('tajuk'),
                    'mstkh' => $this->request->getVar('mstkh'),
                    'tkhtutup' => $this->request->getVar('tkhtutup'),
                    'sasaran' => $this->request->getVar('sasaran'),
                    'oleh' => $this->request->getVar('oleh'),
                    'tempat' => $this->request->getVar('tempat'),
                    'keterangan' => $this->request->getVar('keterangan'),
                ]);
            
                $session = \Config\Services::session();
                $session->setFlashdata('add','');//('name of session','value of the session')

            return redirect()->to('/projekbaru/public/event');
        }

    // function update event
    public function edit($id)
    {
        helper('form');
        $model = new EventModel();

        $data = [
            'tajuk' => $this->request->getVar('tajuk'),
        ];
        
        $model->update($id, $data);

        return redirect()->to('/projekbaru/public/event');
    }

    

    }
