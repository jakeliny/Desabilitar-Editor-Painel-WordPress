<?php

/*
Plugin Name: Desabilitar Editor do Painel
Plugin URI: https://github.com/jakeliny/desabilitar_editor
Description: Desabilitar o editor de código no painel admin
Version:    1.0.0
Author:      Jakeliny
Author URI: https://github.com/jakeliny
License:    GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

/*Escondendo a barra administrativa*/
function my_function_admin_bar(){
    return false;
}

class Ocultar_Barra_Admin{

  static function initial(){
    define('DISALLOW_FILE_EDIT', true);
  }



  static function ocultar_barra(){
    return false;
  }
}

Ocultar_Barra_Admin::initial();
