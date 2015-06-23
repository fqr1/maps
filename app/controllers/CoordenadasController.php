<?php

class CoordenadasController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        $this->view->disable();
        echo "aaaaa";
    }

    public function obtenerAction($id = -1) {
        if ($this->request->isPut()) {
            echo "ESto es un Put";
        } else {
            echo "esto no es un put";
        }
        $this->view->disable();
        header('Content-Type: application/json; charset=utf-8');
        if ($id == -1) {
            $resultado = Coordenadas::find();
        } else {
            $resultado = Coordenadas::findFirst($id);
        }

        $resultadoArray = $resultado->toArray();
        echo json_encode($resultadoArray);
    }

    public function insertarAction($x,$y,$user=1) {
        $nuevo = new Coordenadas();
        $nuevo->x=$x;
        $nuevo->y=$y;
        $nuevo->usuario=$user;
        $resultado=$nuevo->create();
        echo json_encode($resultado);
    }

}
