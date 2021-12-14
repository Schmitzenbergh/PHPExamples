<?php

class colour
{
    private $colour;
    private $type;

    /**
     * colour constructor.
     * @param $colour
     * @param $type
     */
    public function __construct($colour, $type)
    {
        $this->colour = $colour;
        $this->type = $type;
    }

    public function describeColour()
    {
        return "The colour is {$this->colour} and is of the following type: {$this->type}";
    }
}