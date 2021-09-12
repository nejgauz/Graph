<?php
require_once "Node.php";

$nodes = [
    [[], 'a'],
    [['a'], 'b'],
    [['a'], 'c'],
    [['b'], 'd'],
    [['b'], 'e'],
    [['c'], 'f'],
    [['d', 'e', 'f'], 'g']
];

foreach ($nodes as $node) {
    $parents = [];
    foreach ($node[0] as $parent) {
        $parents[] = ${"$parent"};
    }
    ${"$node[1]"} = new Node($parents, $node[1]);
}

echo $g->findDestination('c') ?? "Destination not found";


