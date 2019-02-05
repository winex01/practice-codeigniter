<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('csrf'))
{
    function csrf(){

        $ci =& get_instance();
                
        $csrf = array(
                'name' => $ci->security->get_csrf_token_name(),
                'hash' => $ci->security->get_csrf_hash()
        );

        echo '<input type="hidden" name="'.$csrf['name'].'" value="'.$csrf['hash'].'" />';

        
    }   
}


if ( ! function_exists('csrfName'))
{
    function csrfName(){

        $ci =& get_instance();

        echo $ci->security->get_csrf_token_name();
    }   
}

if ( ! function_exists('csrfHash'))
{
    function csrfHash(){

        $ci =& get_instance();

        echo $ci->security->get_csrf_hash();
    }   
}


if ( ! function_exists('confirm_delete'))
{
    function confirm_delete($var, $url)
    {
        return '<button onclick="confirm_delete('.$var.' ,\''.$url.'\')" data-toggle="modal" class="btn btn-default btn-danger btn-sm" data-toggle="tooltip" title="Delete">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </button>';        
    }   
}


if ( ! function_exists('dd'))
{
    function dd($dump)
    {
        echo '<pre>';
          var_dump($dump);
        echo '</pre>';

        die;
              
    }   
}


if ( ! function_exists('dump'))
{
    function dump($dump)
    {
        echo '<pre>';
          var_dump($dump);
        echo '</pre>';
              
    }   
}