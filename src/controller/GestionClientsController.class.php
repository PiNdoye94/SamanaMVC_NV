<?php

use libs\system\Controller; 
use src\model\GestionRepository;

class GestionClientsController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/samanemvc/Client/
     */

    public function index(){

        return $this->view->load("gestion/gestionclients");
    }

    public function liste(){
        $clientdb = new GestionRepository();
        
        $data['listeClients'] = $clientdb->getAll();
        return $this->view->load("gestion/gestionclients", $data);
    }
    
}
