<?php
abstract class animal{
    private $id;
    protected $product;
    function __construct($id){
        $this->id=$id;
    }
    public function getProduction()
    {
        return $this->product;
    }
    abstract function generateProduction();
}
class cow extends animal{
    public function generateProduction()
    {
        $this->product=rand(8,12);
    }
}
class chicken extends animal{
    public function generateProduction()
    {
        $this->product=rand(0,1);
    }
}
class barn{
    public $Barn;

    function addAnimals(int $count, string $className)
    {
        if(class_exists($className))
            for ($i=0; $i<$count; $i++) //добавляем в хлев животных
            {
                $id=uniqid(rand(), true);
                $this->Barn[$className][$id]=new $className($id);
            }
    }
    function getProduce()
    {
        foreach ($this->Barn as $animal)
        {
            foreach ($animal as $beast)
            $beast->generateProduction();
        }
    }
    function countAnimalProduce(string $className)
    {
        $r=null;
        foreach ($this->Barn[$className] as $animal)
        {
            $r+=$animal->getProduction();
        }
        return $r;
    }
}

