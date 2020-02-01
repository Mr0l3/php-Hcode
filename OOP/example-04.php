<?php

class Documento{
    protected $docNum;
    
    public function getDocNum():string{
        return $this -> docNum;
    }
}

class Cnpj extends Documento{
    public static function validaCnpj(string $cnpj):bool{
        if(empty($cnpj)){
            return false;
        }

        $cnpj = str_replace('.', '' , $cnpj);
        $cnpj = str_replace('/', '' , $cnpj);
        $cnpj = str_replace('-', '' , $cnpj);

        $cnpj = trim($cnpj); // remove espaços em branco no fim e início da string

        if(strlen($cnpj) != 14){
            return false;
        }

        if($cnpj === '00000000000000' || $cnpj === '11111111111111' ||
        $cnpj === '22222222222222' || $cnpj === '33333333333333' ||
        $cnpj === '44444444444444' || $cnpj === '55555555555555' ||
        $cnpj === '66666666666666' || $cnpj === '77777777777777' ||
        $cnpj === '88888888888888' || $cnpj === '99999999999999'){
            return false;
        }

        $mask = substr($cnpj, 0, -2);
        $vd = substr($cnpj, -2);  // números de validação do suposto cnpj válido
        $validMask = '543298765432';
        $tot = 0;

        // cálculo do primeiro número de validação
        for($i = 0; $i < strlen($mask); $i++){
            $tot += (int)$mask[$i] * (int)$validMask[$i];
        }
        if($tot % 11 < 2){
            $tot = 0;
        }else{
            $tot = 11 - $tot % 11;
        }
        // fim do cálculo do primeiro número de validação

        if((string)$tot !== $vd[0]){
            return false;
        }else{
            // cálculo do segundo número de validação
            $mask .= $vd[0];
            $validMask = '6' . $validMask;
            $tot = 0;

            for($i = 0; $i < strlen($mask); $i++){
                $tot += (int)$mask[$i] * (int)$validMask[$i];
            }
            if($tot % 11 < 2){
                $tot = 0;
            }else{
                $tot = 11 - $tot % 11;
            }
            // fim do cálculo do segundo número de validação

            if((string)$tot !== $vd[1]){
                return false;
            }
        }
        return true;
    }


    public function setDocNum(string $num){
        if($this::validaCnpj($num)){
            $num = str_replace('.', '' , $num);
            $num = str_replace('/', '' , $num);
            $num = str_replace('-', '' , $num);    
            $numDef = substr($num, 0, 2) . '.';
            $numDef .= substr($num, 2, 3) . '.';
            $numDef .= substr($num, 5, 3) . '/';
            $numDef .= substr($num, 8, 4) . '-';
            $numDef .= substr($num, 12) ;
            echo $num . "<br/>";
            $this -> docNum = $numDef;
        }else{
            throw new Exception("Número CNPJ inválido", 1);
        }
    }
}


$document = new Cnpj();
$document -> setDocNum('04.918.671/0001-97');
echo $document -> getDocNum();
