<?php
namespace src\model; 

use libs\system\Model; 
	
class GestionRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->getRepository('Client')->findAll();
		// if($this->db != null)
		// {
			
		// }
	}
	
	
	
}