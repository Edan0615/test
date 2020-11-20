<?php
//物件導向他只是一個概念or寫程式的方法
/*
Procedual Progrming Style -1
Functional Progrming Style-2
Object Oriented Progrming Style -3
*/
//php = loose type language 
/*
 Strong type= 你一定要先宣告給電腦變數的型態
 Loose type = 你不用宣告
*/
/*
型態別
int 
string 
bool
*/

class ClassRoom 
{
    private $studentName,$studentGender,$studentNum;
    public function __deconstruct()
    {

    }
    public function assignValue($Name,$Gender,$Num)
    {
        $this->studentName=$Name;
        $this->studentGender=$Gender;
        $this->studentNum=$Num;

    }
    public function getValue()
    {
        $returnValue=array($this->studentName, $this->studentGender, $this->studentNum,$this->sport);
        return $returnValue;
    }
}
$class222[0]=new ClassRoom;
$class222[0]->assignValue("Edan","Boy","13");
$class222[0]->assignValue("Boy","Hag","56");

var_dump($class222[0]->getValue());




