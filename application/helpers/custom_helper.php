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


