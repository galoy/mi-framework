<?php

abstract class controller
{
    protected $_View;
    public function __construct(){
        $this->_View= new View(new Request);
        
    }
    abstract public function index();
        
    protected function loadModel($modelo)
    {
        $modelo = $modelo . 'Model';
        $rutaModelo=ROOT.'Models' . DS . $modelo.'.php';   
        if (is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }
        else {
            throw new Exception('error de modelo');
        }
    }
    }
    

?>