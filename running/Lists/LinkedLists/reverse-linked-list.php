<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 14/04/2018
 * Time: 20:23
 */
require_once __DIR__ . '/../../../vendor/autoload.php';

use Samcrosoft\LearnAlgorithms\Lists\LinkedLists\LinkedListNode;

$node1 = new LinkedListNode(1);
$node2 = new LinkedListNode(2);
$node3 = new LinkedListNode(3);

$node1->setNextNode($node2);
$node2->setNextNode($node3);


function reverse_node(LinkedListNode $node)
{

    $current = $node;
    $nextNode = $node->getNextNode();
    while (null !== $nextNode) {
        $tempNextNode = $nextNode->getNextNode();
        $nextNode->setNextNode($current);
        $current = $nextNode;
        $nextNode = $tempNextNode;
    }

    return $current;
}


dd(reverse_node($node1));