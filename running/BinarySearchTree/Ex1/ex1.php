<?php
/**
 * Created by PhpStorm.
 * User: adebola
 * Date: 03/04/2018
 * Time: 12:54
 */

use Samcrosoft\LearnAlgorithms\BinarySearchTree\Ex1\Node;

require_once __DIR__ . '/../../../vendor/autoload.php';


$node = new Node(10);
$node1Left = new Node(9);
$node1Right = new Node(11);
// level2 [1]
$node1Left1Left = new Node(6);
$node1Left1Right = new Node(12);

// level2 [2]
$node1Right1Left = new Node(4);
$node1Right1Right = new Node(33);

// insert level 1
$node->insertNode($node1Left);
$node->insertNode($node1Right);

// insert level [2]-1
$node1Left->insertNode($node1Left1Left);
$node1Left->insertNode($node1Left1Right);
// insert level [2]-2
$node1Right->insertNode($node1Right1Right);
$node1Right->insertNode($node1Right1Left);

$collection = new \Illuminate\Support\Collection([$node]);
//$collection->dump();

// do the checks
var_dump($node->contains(9));
var_dump($node->contains(5));
var_dump($node->contains(11));
var_dump($node->contains(12));