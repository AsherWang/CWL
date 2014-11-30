<?php
	class Notice_model extends CI_Model{

		var $ID='';
		var $Title='';
		var $Content='';
		var $Date='';
		var $AUthor_ID='';
		
		function _construct()
		{
			parent::_construct();
		}
	}
?>