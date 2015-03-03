<?php

class GujaratiModule extends CWebModule
{
	
	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
        
       public static function inputGujaratiInteger($model) {
        $var = array();
        $var = $model->attributes;
        $array = array("૧" => "1", "૨" => "2", "૩" => "3", "૪" => "4", "૫" => "5", "૬" => "6", "૭" => "7", "૮" => "8", "૯" => "9", "૦" => "0");
        foreach ($array as $key => $value):
            $var = str_replace("$key", "$value", $var);
        endforeach;

        foreach ($var as $v):
            $model->attributes = $var;
        endforeach;
    }
    
    public static function outputGujaratiInteger($data) {
        $var = array();
        $resultVar=array();
        $var = $data;
        
        $array = array("1" => "૧", "2" => "૨", "3" => "૩", "4" => "૪", "5" => "૫", "6" => "૬", "7" => "૭", "8" => "૮", "9" => "૯", "0" => "૦", "am"=>"સવાર", "pm"=>"સાંજ");
        foreach ($array as $key => $value):
            $var = str_replace("$key", "$value", $var);
        endforeach;

        return $var;

    }
    
     public static function filterGujaratiInteger($model) {
        $var = array();
        $var = $model->attributes;
        $array = array("૧" => "1", "૨" => "2", "૩" => "3", "૪" => "4", "૫" => "5", "૬" => "6", "૭" => "7", "૮" => "8", "૯" => "9", "૦" => "0");
        foreach ($array as $key => $value):
            $var = str_replace("$key", "$value", $var);
        endforeach;

        foreach ($var as $v):
            $model->attributes = $var;
        endforeach;

    }
    
     public static function forUpdateGujaratiInteger($model) {
        $var = array();
        $rr=array();
        $var = $model->attributes;
       
        $array = array(
            "1" => "૧", "2" => "૨", "3" => "૩", "4" => "૪", "5" => "૫", "6" => "૬", "7" => "૭", "8" => "૮", "9" => "૯", "0" => "૦", "am"=>"સવાર", "pm"=>"સાંજ",
            
            );
        foreach ($array as $key => $value):
            $var = str_replace("$key", "$value", $var);
        endforeach;

        foreach ($var as $v):
           $model->attributes = $var;
        endforeach;
       
        

    }
    
 
        
}
