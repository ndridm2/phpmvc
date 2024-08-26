<?php
class Feature extends Controller
{
    public function index()
    {
        $data['title'] = 'Feature';

        $data['program'] = $this->model('Lang_model')->getAllData();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('feature/index', $data);
        $this->view('templates/footer');
    }
    public function create()
    {
        if ($this->model('Lang_model')->insertData($_POST) > 0) {
            Flasher::setFlash('Success', 'insert', 'success');
            header('Location:' . BASE_URL . '/feature');
            exit;
        } else {
            Flasher::setFlash('Failed', 'insert', 'danger');
            header('Location:' . BASE_URL . '/feature');
            exit;
        }
    }
    public function detail($id)
    {
        $data['title'] = 'Detail';

        $data['program'] = $this->model('Lang_model')->getDataById($id);
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('feature/detail', $data);
        $this->view('templates/footer');
    }
    public function getUpdate()
    {
       echo json_encode($this->model('Lang_model')->getDataById($_POST['id']));
    }
    public function update()
    {
        if ($this->model('Lang_model')->updateData($_POST) > 0) {
            Flasher::setFlash('Success', 'update', 'success');
            header('Location:' . BASE_URL . '/feature');
            exit;
        } else {
            Flasher::setFlash('Failed', 'update', 'danger');
            header('Location:' . BASE_URL . '/feature');
            exit;
        }
    }
    public function delete($id)
    {
        if ($this->model('Lang_model')->deleteData($id)) {
            Flasher::setFlash('Success', 'delete', 'success');
            header('Location:' . BASE_URL . '/feature');
            exit;
        } else {
            Flasher::setFlash('Failed', 'delete', 'danger');
            header('Location:' . BASE_URL . '/feature');
            exit;
        }
    }
    public function search()
    {
        $data['program'] = $this->model('Lang_model')->getSearchData();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('feature/index', $data);
        $this->view('templates/footer');
    }

}