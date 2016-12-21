<?php

/*
Plugin Name: Desabilitar Editor do Painel
Plugin URI: https://github.com/jakeliny/desabilitar_editor
Description: Desabilitar o editor de código no painel admin do WordPress
Version:    1.1.2
Author:      Jakeliny
Author URI: https://github.com/jakeliny
License:    GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

class DisableEditor{

  static function initial(){
    define('DISALLOW_FILE_EDIT', true);
  }



  static function disable_editor(){
    return false;
  }
}

DisableEditor::initial();
