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
$node4 = new LinkedListNode(4);
$node5 = new LinkedListNode(5);
$node6 = new LinkedListNode(6);

$node1->setNextNode($node2);
$node2->setNextNode($node3);
$node3->setNextNode($node4);
$node4->setNextNode($node5);
$node5->setNextNode($node6);


function nth_to_last_node(int $num, LinkedListNode $node)
{

    $slow = $node;
    $fast = $node;

    while ($num > 0 && null !== $fast->getNextNode()) {
        $fast = $fast->getNextNode();
        --$num;
    }


    while (null !== $fast->getNextNode()) {
        $fast = $fast->getNextNode();
        $slow = $slow->getNextNode();
    }

    return $slow;
}


dd(nth_to_last_node(4, $node1));