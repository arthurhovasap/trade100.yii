<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Table
 *
 * @author Arthur
 */
class Table {
    public static function user(){
        return app::params("prefix")."user";
    }
    
    public static function company(){
        return app::params("prefix")."company";
    }
}
