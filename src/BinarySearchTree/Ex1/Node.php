<?php
/**
 * Created by PhpStorm.
 * User: adebola
 * Date: 03/04/2018
 * Time: 12:05
 */

namespace Samcrosoft\LearnAlgorithms\BinarySearchTree\Ex1;

/**
 * Class Node
 * @package Samcrosoft\LearnAlgorithms\BinarySearchTree\Ex1
 */
class Node
{
    /**
     * @var Node|null
     */
    private $leftNode;
    /**
     * @var Node
     */
    private $rightNode;
    /**
     * @var int
     */
    private $nodeValue;

    /**
     * Node constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->nodeValue = $value;
    }

    /**
     * @param Node $newNode
     */
    public function insertNode(Node $newNode): void
    {
        if ($newNode->getValue() <= $this->nodeValue) {
            if ($this->leftNode) {

                $this->leftNode->insertNode($newNode);
            } else {
                $this->leftNode = $newNode;
            }
        } else if ($newNode->getValue() > $this->nodeValue) {
            if ($this->rightNode) {

                $this->rightNode->insertNode($newNode);
            } else {
                $this->rightNode = $newNode;
            }
        }
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->nodeValue;
    }

    /**
     * @param int $value
     * @return bool
     */
    public function contains(int $value): bool
    {
        $nodeValue = $this->getValue();
        if ($nodeValue === $value) {
            return true;
        }

        if ($this->leftNode && $value <= $nodeValue) {
            return $this->leftNode->contains($value);
        }

        if ($this->rightNode && $value > $nodeValue) {
            return $this->rightNode->contains($value);
        }

        return false;
    }
}