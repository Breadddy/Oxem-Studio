<?php
class cow {
    private $milk;
    private $id;
    public function generateMilk()
    {
        $this->milk=rand(8,12);
    }
    function __construct($id){
        $this->id=$id;
    }
    public function getMilk()
    {
        return $this->milk;
    }
}
class chicken {
    private $egg;
    private $id;
    public function generateEggs()
    {
        $this->egg=rand(0,1);
    }
    function __construct($id){
        $this->id=$id;
    }
    public function getEggs()
    {
        return $this->egg;
    }
}
class barn{
    public $Barn, $kMilk, $kEggs;
    function __construct(){
        for ($i=0; $i<10; $i++) //добавляем в хлев коров
        {
            $id=uniqid(rand(), true);
            $this->Barn['Cows'][$id]=new cow($id);
        }
        for ($i=0; $i<20; $i++) //добавляем в хлев куриц
        {
            $id=uniqid(rand(), true);
            $this->Barn['Chickens'][$id]=new chicken($id);
        }
    }
    function getProduce()
    {
        foreach ($this->Barn['Cows'] as $animal)
        {
            $animal->generateMilk();
        }
        foreach ($this->Barn['Chickens'] as $animal)
        {
            $animal->generateEggs();
        }
    }
    function countProduce(){
        foreach ($this->Barn['Cows'] as $animal)
        {
            $this->kMilk+=$animal->getMilk();
        }
        foreach ($this->Barn['Chickens'] as $animal)
        {
            $this->kEggs+=$animal->getEggs();
        }
    }
    function getAllMilk()
    {
        return $this->kMilk;
    }
    function getAllEggs()
    {
        return $this->kEggs;
    }
}

