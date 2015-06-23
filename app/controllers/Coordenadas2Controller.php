<?php

class Coordenadas2Controller extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    
     public function holaAction(){
        echo "Hola";
    }
    
     public function insertarAction($x,$y,$user=1) {
        $nuevo = new Coordenadas2();
        $nuevo->x=$x;
        $nuevo->y=$y;
        $nuevo->usuario=$user;
        $resultado=$nuevo->create();
        echo json_encode($resultado);
    }
    
    public function obtenerAction($id = -1) {
        if ($this->request->isPut()) {
//            echo "ESto es un Put";
        } else {
//            echo "esto no es un put";
        }
        $this->view->disable();
        header('Content-Type: application/json; charset=utf-8');
        if ($id == -1) {
            $resultado = Coordenadas2::find();
        } else {
            $resultado = Coordenadas2::findFirst($id);
        }

        $resultadoArray = $resultado->toArray();
        echo json_encode($resultadoArray);
    }
    

}

