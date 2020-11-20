<?php
class classMem
{
    private $className, $StuNam, $StuGender, $StuNum;
     function setMem($className, $StuNam, $StuGender, $StuNum)
    {
        $this->className=$className;
        $this->StuNam=$StuNam;
        $this->StuGender=$StuGender;
        $this->StuNum=$StuNum;
    }
    function getMem()
    {
        return  "<br>".$this->className."<br>".$this->StuNam."<br>".$this->StuGender."<br>".$this->StuNum."<br>";
    }
}
$newMem=new classMem();
$newMem->setMem("222","edan","B","13");
echo "輸入".$newMem->className;

