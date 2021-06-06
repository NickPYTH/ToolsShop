<?php
namespace App\Controllers;
use CodeIgniter\Model;
use IonAuth\Libraries\IonAuth;
use function MongoDB\BSON\toJSON;
use App\Models\ToolsModel;

class Pages extends BaseController
{   
    public function view($page = 'main')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        #echo json_encode($this->withIon());
        $data['ionAuth'] = new IonAuth();

        if (!is_null($this->request->getPost('per_page'))) 
        {
            session()->setFlashdata('per_page', $this->request->getPost('per_page'));
            $per_page = $this->request->getPost('per_page');
        }
        else {
            $per_page = session()->getFlashdata('per_page');
            session()->setFlashdata('per_page', $per_page); 
            if (is_null($per_page)) $per_page = '10';
        }
        $data['per_page'] = $per_page;

        if (!is_null($this->request->getPost('search')))
        {
            session()->setFlashdata('search', $this->request->getPost('search'));
            $search = $this->request->getPost('search');
        }
        else {
            $search = session()->getFlashdata('search');
            session()->setFlashdata('search', $search);
            if (is_null($search)) $search = '';
        }
        $data['search'] = $search;
        
        helper(['form','url']);
        $tools_model = new ToolsModel();
        $data ['tools'] = $tools_model->get_all_tools($search)->paginate($per_page, 'group1');
        $data ['pager'] = $tools_model->pager;

        helper(['form','url']);
        echo view('pages/'.$page, $data);

    }

    public function add(){
        echo "work";
    }

}