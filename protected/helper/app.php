<?php
class app {
    public static function getQuery($get){
        if (Yii::app()->request->getQuery($get))
            return Yii::app()->request->getQuery($get);
        else
            return NULL;
    }
    
    public static function time(){
        return time();
    }
    
    public static function date($format = "Y-m-d H:i:s", $seconds = NULL){
        if ($seconds == NULL)
            return date($format);
        else
            return date($format, $seconds);
    }
    
    public static function secondsDT($dt = NULL){
        if ($dt)
            $date = new DateTime($dt);
        else
            $date = new DateTime();
        return $date->getTimestamp();
    }
        
    public static function isGuest(){
        return Yii::app()->user->isGuest;
    }
    
    public static function params($param){
        return Yii::app()->params[$param];
    }
    
    public static function controllerID(){
        return Yii::app()->controller->id;
    }
    
    public static function actionID(){
        return Yii::app()->controller->action->id;
    }
    
    public static function arrayToDoubleAssocArray($array){
        foreach ($array as $key => $value){
            $arr[] = array('label' => $value, 'value'=>$key);
        }
        return $arr;
    }
}
