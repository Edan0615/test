<?php
class classMem
{
    private $className, $StuNam, $StuGender, $StuNum;
    private $userdata=array("className","StuNam","StuGender","StuNum");
    function setMem($className, $StuNam, $StuGender, $StuNum)
    {
       $i=0;
       while(count($userdata)<4)
       {
        $this->{$this->userdata[$i]}=$_POST["{$this->userdata[$i]}"];
        $i++;
       }
    }
    function getMem()
    {
        return  "<br>".$this->className."<br>".$this->StuNam."<br>".$this->StuGender."<br>".$this->StuNum."<br>";
    }
}
$newMem=new classMem();
$newMem->setMem("222","edan","B","13");
echo "輸入".$newMem->className;

