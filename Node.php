<?php

class Node
{
    /**
     * @var Node[]
     */
    private $parents;
    /**
     * @var string
     */
    private $name;

    /**
     * @param Node[] $parents
     */
    public function __construct(array $parents, string $name)
    {
        $this->parents = $parents;
        $this->name = $name;
    }

    public function findDestination(string $destination): ?string
    {
        if ($this->name === $destination) {
            return $this->name;
        }
        foreach ($this->parents as $parent) {
            if ($path = $parent->findDestination($destination)) {
                return $this->name . "->" . $path;
            }
        }
        return null;
    }
}
