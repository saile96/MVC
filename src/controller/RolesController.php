<?php
namespace src\controller;
use libs\system\Controller;

class  RolesController extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
        
    }
    public function getAll()
    {
        $roles_dao = new RolesDb();
        $roles = $roles_dao->findAll();//array("ROLE_USER", "ROLE_ADMIN");
        return $this->view->load("roles/getAll");
        
    }
    public function delete($id)
    {
        echo $id;
        //return $this->view->load("roles/add");
        
    }

}


?>