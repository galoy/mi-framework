<?php
Class holacontroller extends controller
{
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $this ->_View->titulo='Hola';
        $this->_View->renderizar('index','hola');
    }
}
?>
