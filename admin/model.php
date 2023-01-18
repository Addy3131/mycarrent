<?php

class model
{
	public $conn="";
	
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','mydb');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl"; 
		$run=$this->conn->query($sel);  
		while($fetch=$run->fetch_object()) 
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	function select_join2($tbl1,$tbl2,$on)
	{
		$sel="select * from $tbl1 join $tbl2 on $on"; 
		$run=$this->conn->query($sel);  
		while($fetch=$run->fetch_object()) 
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	function select_join3($tbl1,$tbl2,$on,$tbl3,$on1)
	{
		$sel="select * from $tbl1 join $tbl2 on $on join $tbl3 on $on1"; 
		$run=$this->conn->query($sel);  
		while($fetch=$run->fetch_object()) 
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	
	function insert($tbl,$arr)
	{
		$arr_key=array_keys($arr);
		$key=implode(",",$arr_key);
		$arr_value=array_values($arr);
		$value=implode("','",$arr_value); 
		
		 $ins="insert into $tbl($key) value('$value')"; 
		$run=$this->conn->query($ins);
		return $run;	
	}
	
	
	function select_where($tbl,$arr)
	{
		$sel="select * from $tbl where 1=1";
        $i=0;
        $arr_key=array_keys($arr);
        $arr_value=array_values($arr);
        foreach($arr as $d)
        {
            $sel.=" and $arr_key[$i]='$arr_value[$i]'";
			$i++;
        }
	$run=$this->conn->query($sel);
	return $run;
	}
	
	function select_where_join($tbl1,$tbl2,$on,$arr)
	{
		$sel="select * from $tbl1 join $tbl2 on $on where 1=1"; 
		$i=0;
		$arr_key=array_keys($arr);
		$arr_value=array_values($arr);
		foreach($arr as $w)
		{
			$sel.=" and $arr_key[$i]='$arr_value[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  
		return $run;
	}
	
	function update($tbl,$data,$where)
	{
		$upd="update $tbl set"; 
		$i=0;
		$arr_key=array_keys($data);
		$arr_value=array_values($data);

		$count=count($data);
		foreach($data as $w)
		{
			if($count==$i+1)
			{
				$upd.=" $arr_key[$i]='$arr_value[$i]'";
			}
			else
			{
				$upd.=" $arr_key[$i]='$arr_value[$i]',";
				$i++;
			}	
			
		}
		$upd.=" where 1=1"; 
		$j=0;
		$warr_key=array_keys($where);
		$warr_value=array_values($where);
		foreach($where as $w)
		{
			$upd.=" and $warr_key[$j]='$warr_value[$j]'";
			$j++;
		}
		$run=$this->conn->query($upd); 
		return $run;
	}
	
	function delete($tbl,$where)
	{
		$del="delete from $tbl where 1=1"; 
		$i=0;
		$arr_key=array_keys($where);
		$arr_value=array_values($where);
		foreach($where as $w)
		{
			$del.=" and $arr_key[$i]='$arr_value[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);  
		return $run;
	}
	
}
$obj=new model;


?>