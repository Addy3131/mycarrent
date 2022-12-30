<?php

class model{

    public $conn="";

    function __construct()
    {
        $this->conn=new mysqli('localhost','root','','mycarrental');
    }

    function select($tbl)
    {
        $sel="SELECT*FROM $tbl";
        $run=$this->conn->query($sel);
        while($fetch=$run->fetch_object())
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    function select_join2($tbl1,$tbl2,$on)
    {
        $sel="SELECT*FROM $tbl1 join $tbl2 on $on ";
        $run=$this->conn->query($sel);
        while($fetch=$run->fetch_object())
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    function select_join3($tbl1,$tbl2,$tbl3,$on,$on1)
    {
        $sel="SELECT*FROM $tbl1 join $tbl2 on $on join $tbl3 on $on1 ";
        $run=$this->conn->query($sel);
        while($fetch=$run->fetch_object())
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
}
$obj=new model;


?>