<?php
	class Hospital_model extends CI_Model{

		var $ID='';
		var $Name='';
		var $Level='';
		var $Adress='';
		var $Phone='';
		var $Info='';
		var $Website='';
		var $Type='';
		
		function _construct()
		{
			parent::_construct();
		}
	}
?>