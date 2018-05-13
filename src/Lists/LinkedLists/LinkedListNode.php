<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 14/04/2018
 * Time: 20:04
 */

namespace Samcrosoft\LearnAlgorithms\Lists\LinkedLists;

/**
 * Class LinkedListNode
 *
 * @package Samcrosoft\LearnAlgorithms\Lists\LinkedLists
 */
class LinkedListNode
{
    /**
     * @var null|LinkedListNode
     */
    private $nextNode;

    /**
     * @var
     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }


    public function getNextNode(): ?LinkedListNode
    {
        return $this->nextNode;
    }

    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param LinkedListNode $node
     */
    public function setNextNode(LinkedListNode $node)
    {
        $this->nextNode = $node;
    }
}