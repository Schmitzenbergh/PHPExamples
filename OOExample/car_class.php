<?php

class car
{
    private $engine;
    private $wheels;
    private $model;
    private $brand;
    private $colour;
    private $radio;

    /**
     * car constructor.
     * @param $engine
     * @param $wheels
     * @param $model
     * @param $brand
     * @param $colour
     */
    public function __construct($engine, $wheels, $model, $brand, $colour)
    {
        $this->engine = $engine;
        $this->wheels = $wheels;
        $this->model = $model;
        $this->brand = $brand;
        $this->colour = $colour;
        $this->radio = $radio;
    }

    /**
     * @return string
     */
    public function describeCar()
    {
        $return = "===Car===<br>";
        $return .= "Engine: {$this->engine} <br>";
        $return .= "Wheels: {$this->wheels} <br>";
        $return .= "Model: {$this->model} <br>";
        $return .= "Brand: {$this->brand} <br>";
        $return .= "Colour: {$this->colour->describeColour()} <br>";
        $return .= "The radio is {$this->radio} <br>";

        return $return;
    }

    /**
     * @param string $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @param string $wheels
     */
    public function setWheels(string $wheels)
    {
        if($wheels == "winter" || $wheels =="summer")
            $this->wheels = $wheels;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @param colour $colour
     */
    public function setColour(colour $colour)
    {
        $this->colour = $colour;
    }
}