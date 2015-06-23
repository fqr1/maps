<?php

class Coordenadas extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var double
     */
    public $x;

    /**
     *
     * @var double
     */
    public $y;

    /**
     *
     * @var string
     */
    public $usuario;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'x' => 'x', 
            'y' => 'y', 
            'usuario' => 'usuario'
        );
    }

}
