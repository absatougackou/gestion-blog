<?php
    function est_vide($val){
        //$val==null equivalent a is_null($val)
        return empty($val);
    }
    function est_numerique($val){
        return is_numeric($val);
    }
    function est_email($val){
        return filter_var($val,FILTER_VALIDATE_EMAIL);
    }

    function valide_email($val,array &$arr_error,string $key, $sms="ce champ est obligatoire"){
        if(est_vide($val)){
            $arr_error[$key]=$sms;
        }elseif(!est_email($val)){
            $arr_error[$key]="ce champ doit etre un email";
        }
    }

    function valide_champ($val,array &$arr_error,string $key, $sms="ce champ est obligatoire"){
        if(est_vide($val)){
            $arr_error[$key]=$sms;
        }
    }

    function valide_password($val,array &$arr_error,string $key, $sms="ce champ est obligatoire"){
        if(est_vide($val)){
            $arr_error[$key]=$sms;
        }elseif(!(strlen($val)>=6 && strlen($val)<=10)){
            $arr_error[$key]="le password doit contenir au minimum 6 caracteres et au maximum 10 caracteres";
            
        }
    }


    function valide_number($val,array &$arr_error,string $key, $sms="ce champ est obligatoire"){
        if(est_vide($val)){
            $arr_error[$key]=$sms;
        }elseif(!est_numerique($val)){
            $arr_error[$key]="ce champ doit etre un numerique";
        }
    }

    function valide_form(array $arr_error):bool{
        return count($arr_error)==0;
    }
?>