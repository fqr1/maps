<?php

class Coordenadas2 extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $x;

    /**
     *
     * @var string
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
