<?php
Class indexController extends controller
{
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $post = $this->loadModel('post');
        $this->_view->posts = $post->getposts();
        $this ->_View->titulo='PORTADA';
        $this->_View->renderizar('index','inicio');
    }
}
?>