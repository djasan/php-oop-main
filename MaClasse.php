<?php

class MaClass
{
    public string $attributPublic;
    public string $couleur = 'vert';
    public int $age = 51;
    public string $prenom;
    public const PI = 3.14;
    static string $varStatic='je suis une variable statique';
    
    public function displayMethode($value)
    {
        return $this->prenom . ' aime la couleur ' . $this->couleur . ' ' . $value;
    }

    public function calculAire($rayon) : float | int
    {
        return self::PI * $rayon * $rayon;
    }

    public function calculAire2($rayonParam) : float | int
    {
        return self::PI * $rayonParam * $rayonParam;
    }
    public function __construct ()
    {
    echo'je suis une méthode magique de la '.__CLASS__ .'<br>';
    }

static function staticcFunc( )
    {
        return 'Methode statique qui affiche une variable statique'.self::$varStatic;
    }



   // public function __destruct ()
   // {
   // echo'je suis une méthode magique (__destruct) de la '.__CLASS__ .'<br>';
   // }
    

}
   
$obj = new MaClass();
$obj->prenom = 'Michel';

echo $obj->displayMethode('couleur') . '<br>';

$rayonParam = 5;
$rayon = 4;
echo 'L\'aire du cercle de rayon ' . $rayon . ' est : ' . $obj->calculAire($rayon) . '<br>';

$rayonParam = 3;
echo 'L\'aire du cercle de rayon ' . $rayonParam . ' est : ' . $obj->calculAire2($rayonParam).'<br>';

echo MaClass::$varStatic;
echo MaClass::staticcFunc()


?>