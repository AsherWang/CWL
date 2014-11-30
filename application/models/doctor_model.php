<?php
	class Doctor_model extends CI_Model{

		var $ID='';
		var $Name='';
		var $Department='';
		var $Hospital='';
		var $Info='';
		var $Expert='';
		var Schedule_ID='';
		
		function _construct()
		{
			parent::_construct();
		}
	}
?>