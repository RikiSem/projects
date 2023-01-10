<?php
class Tree{
    public $number,$countFriuts,$typeTree;
}

$garden = [];
$garden = inicializationGarden($garden);
collectFruits($garden);

function collectFruits($garden){
    $countApples = 0;
    $countPears = 0;
    
    for($a = 0;$a != count($garden); $a ++){
        if($garden[$a]->typeTree == "apple"){
            $countApples += $garden[$a]->countFriuts;
        }else{
            $countPears += $garden[$a]->countFriuts;
        }
    }
    echo("Яблок собрано {$countApples}, а груш - {$countPears}");
}

function inicializationGarden($garden){
    for($i = 0; $i != 25; $i ++){
        $tree = new Tree();
        $tree->number = $i;
        if($i <= 10){
            $tree->countFriuts = rand(40,51);
            $tree->typeTree = "apple";
        }else{
            $tree->countFriuts = rand(0,21);
            $tree->typeTree = "pear";
        }
        array_push($garden,$tree);
    }
    return $garden;
}
?>