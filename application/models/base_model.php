<?php
class MyBase_model extends CI_Model {
   var $tablename;  //表名字，貌似没必要呢

  public function __construct()
  {
    $this->load->database();//这样子类都不用写这一句了
  }





  //增
  public function insertToTable($data,$tablename)
  {

  }

  //删除某id的某表的字段
  public function deleteATable($ID,$tablename)
  {
    $this->db->where('ID', $ID);
    $this->db->delete($tablename);
  }


  //更新一个表的数据,改
    //$data是array
  public function updateTable($ID,$data,$tablename)
  {
     $where = "ID = $ID"; 
     $sql = $this->db->update_string($tablename, $data, $where); 
     $query=$this->db->query($sql); 
     return $this->db->affected_rows()!=1;
  }



  //根据表的id获得表中某个字段的值，无此ID则返回-1，查询
  public function getAFiledByNameOfATable($ID,$filedname,$tablename)
  {
    $sql = "SELECT * FROM $tablename WHERE ID = ?"; 
    $query=$this->db->query($sql,array($id)); 
    if($query->num_rows()!=1)
        return -1;
    return $query->row()->$filedname;
  }

  //$data ，data表示筛选条件，返回array，各条件之间是&&连接
  public function getTable($tablename,$data)
  {
    $this->db->select('url','name','clientid','people.surname AS client');

    //将data数组遍历，取出名字和值,加进where中
    foreach ($data as $key => $value) 
    { 
        $this->db->where($key,$value);
    }
    //$this->db->limit(5);
    $this->db->from($tablename);
    //$this->db->join('people', 'sites.clientid = people.id'); ///联表暂时不用
    //$this->db->orderby("name", "desc");
    $query = $this->db->get();
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