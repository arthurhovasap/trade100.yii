<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of url
 *
 * @author Arthur
 */
class url {
    public static function base_short($long_url = false, $dir = "", $file = ""){
            return Yii::app()->request->baseUrl.$dir.$file;
    }
    
    public static function base_long($long_url = false, $dir = "", $file = ""){
            return Yii::app()->request->getBaseUrl(true).$dir.$file;
    }
}
