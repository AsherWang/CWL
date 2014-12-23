<?php
class Base_model extends CI_Model {
   var $tablename;  //表名字，貌似没必要呢

  public function __construct()
  {
    $this->load->database();//这样子类都不用写这一句了
  }

	//CHECKED,获取某表所有字段的数目
	protected function getTableSum($tablename)
	{
	    return $this->db->count_all($tablename);
	}
	
     //checked
    //参数data数组应该包括除了id之外的所有字段,嗯，不包括表中有默认值的字段
    //出错的返回值是-1
    public function insertToTable($data,$tablename)
    {
        $this->db->insert($tablename, $data);
        if($this->db->affected_rows()!=1)
        {
            return -1;
        }
        else
        {
            return $this->db->insert_id();
        }  
        
    }


  //删除某id的某表的字段，checked
  protected function deleteATable($ID,$tablename)
  {
    $this->db->where('ID', $ID);
    $this->db->delete($tablename);
  }


  //更新一个表的数据,改
    //$data是array
  protected function updateTable($ID,$data,$tablename)
  {
     $where = "ID = $ID"; 
     $sql = $this->db->update_string($tablename, $data, $where); 
     $query=$this->db->query($sql); 
     return $this->db->affected_rows()!=1;
  }

	//checked
  //根据表的id获得表中某个字段的值，无此ID则返回-1，查询
  protected function getAFiledByNameOfATable($ID,$filedname,$tablename)
  {
    $sql = "SELECT * FROM $tablename WHERE ID = ?"; 
    $query=$this->db->query($sql,array($ID)); 
    if($query->num_rows()!=1)
        return -1;
    return $query->row()->$filedname;
  }

  //$data ，data表示筛选条件，返回array，各条件之间是&&连接,返回的是数组的数组array([0]=>array("ID"=>"value",..),[1]=>...)
  protected function getTable($tablename,$data)
  {
    //将data数组遍历，取出名字和值,加进where中
    if(!empty($data))
    foreach ($data as $key => $value) 
    { 
        $this->db->where($key,$value);
    }
    //$this->db->limit(5);
    $this->db->from($tablename);
    //$this->db->join('people', 'sites.clientid = people.id'); ///联表暂时不用
    //$this->db->orderby("name", "desc");
  $query = $this->db->get();
  if($query->num_rows()<0)return -1;
  return $query->result_array();
  }
  
  
  
  public  function getTableByOrderLimit($tablename,$data,$order,$index,$length)
  {
    //将data数组遍历，取出名字和值,加进where中
	 $this->db->from($tablename);
    foreach ($data as $key => $value) 
        $this->db->where($key,$value);
	foreach ($order as $key => $value) 
        $this->db->order_by($key,$value);
    $this->db->limit($length,$index);
 	 $query = $this->db->get();
 	 if($query->num_rows()<=0)return -1;
 		 return $query->result_array();
  }

//-------------------------------
//
//
//分页部分
//没写完
//比如 从$tablename表取出符合array $data中的条件的数据，从第$firstindex(可以是0)开始返回$length个
protected function getPageContent($tablename,$data,$firstindex,$length)
{
    $this->db->select('*');
    //将data数组遍历，取出名字和值,加进where中
    foreach ($data as $key => $value) 
    {
        $this->db->where($key,$value);
    }
    $this->db->limit($length,$firstindex);
    $this->db->from($tablename);
    //$this->db->join('people', 'sites.clientid = people.id'); ///联表暂时不用
    //$this->db->orderby("name", "desc");
    return $query = $this->db->get()->result_array();
}

public function getResultFromSqlString($sql)
{
	$query=$this->db->query($sql);
	if($query->num_rows()<=0)return -1;
  	return $query->result_array();
}
}
?>