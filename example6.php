<?php

function shortPath(object $obj, string $start, string $end)
{

    $costs[$start] = 0;
    $processed[] = $start;
    $neihgbors = array_keys($obj->$start);

    foreach ($obj as $name => $node) {
        if ($name !== $start) {
            if (in_array($name, $neihgbors)) {
                $costs[$name] = $obj->$start[$name];
            } else {
                $costs[$name] = 9999999999999999;
            }
        }
    }

    while (! empty($neihgbors)) {
        $currentNode = array_shift($neihgbors);
        $nextNodes = $obj->$currentNode;
        foreach($nextNodes as $name => $node){
            $cost = $costs[$currentNode] + $node;
            findLowestCost($costs, $name, $cost);
        }
        if(!in_array($currentNode, $processed)){
            $neihgbors = [...$neihgbors, ...array_keys($obj->$currentNode)];
        }
        $processed[] = $currentNode;
    }
    return $costs;
}

function findLowestCost(array &$costs, string $name, int $cost) {
    if($costs[$name] < $cost){
        return $costs[$name];
    }else{
        $costs[$name] = $cost;
        return $cost;
    }
}

$obj = new class {
    public $a = ['b' => 2, 'c' => 1];
    public $b = ['f' => 7];
    public $c = ['d' => 5, 'e' => 2];
    public $d = ['f' => 2];
    public $e = ['f' => 1];
    public $f = ['g' => 1];
    public $g = [];
};

print_r(shortPath($obj, 'a', 'g'));
print_r(shortPath($obj, 'b', 'd'));
print_r(shortPath($obj, 'c', 'g'));