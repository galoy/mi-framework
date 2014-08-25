<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bootstrap
{
    public static function run(Request $peticion)
    {
      $Controller = $peticion->getControlador().'Controller' ;
      $rutaControlador = ROOT. 'controllers'. DS. $Controller. '.php' ;
      $Metodo = $peticion->getMetodo();
      $args = $peticion->getArgs();
      
      if(is_readable($rutaControlador)){
          
          require_once $rutaControlador;
          $Controller = new $Controller;
      
          if(is_callable(array($Controller, $Metodo))){
            $Metodo = $peticion->getMetodo();  
          }
          else{
            $Metodo =('index');  
          }
          if(isset($args)){
              call_user_func_array(array($Controller,$Metodo), $args);  
          }
          else{
              call_user_func(array($Controller,$Metodo));
          }
      }else{
          throw new Exception('no encontrado');
      }
    
    }
}
?>