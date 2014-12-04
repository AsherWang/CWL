<?php
class MyBase_model extends CI_Model {

  public function __construct()
  {
   
  }

  //根据表的id获得表中某个字段的值，无此ID则返回-1
  public function getAFiledByNameOfATable($ID,$filedname,$tablename)
  {
    $sql = "SELECT * FROM $tablename WHERE ID = ?"; 
    $query=$this->db->query($sql,array($id)); 
    if($query->num_rows()!=1)
        return -1;
    return $query->row()->$filedname;
  }


  //更新一个表的数据
    //$data是array
  public function updateTable($ID,$data,$tablename)
  {
     $where = "ID = $ID"; 
     $sql = $this->db->update_string($tablename, $data, $where); 
     $query=$this->db->query($sql); 
     return $this->db->affected_rows()!=1;
  }

  //删除某id的某表的字段
  public function deleteATable($ID,$tablename)
  {

  }

//-------------------------------
//
//
//分页部分
//
//比如 获得某一页的内容，参数是表名，第几页，每页多少项目，怎么排序，blabla
public function getPageContent($table,$pageIndex,$pagesum)
{

}


  
}
?>