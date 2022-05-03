<?php
    //Resposta da questão 4 "SequenciaCrescente"
    //Código criado por: Cristiano Simão dos Santos
    

    function VerificaRemove(&$tabelaB){
        
        //retorna 1 quando removeu um item ou 0 se nao removeu nenhum
        $quantidade = count($tabelaB);
        if($quantidade == 1){return 0;}
        for($x = 0; $x <$quantidade;$x++){        
            if (($x + 1) <= ($quantidade -1)){
                //estou no meio do array
                if ($tabelaB[$x]>= $tabelaB[$x +1]){            
                    
                    if($x +1 == $quantidade -1 && $quantidade > 2){
                        if($tabelaB[$x -1] > $tabelaB[$x] && $tabelaB[$x +1] > $tabelaB[$x -1]){
                            array_splice($tabelaB,$x,1);
                            return 1;
                        }else{
                            array_splice($tabelaB,$x +1,1);
                            return 1;
                        }
                    }else{
                        array_splice($tabelaB,$x,1);
                        return 1;
                    }
                } 
            }else{
                //Aqui estou no ultimo item do array
                if ($tabelaB[$x]<= $tabelaB[$x -1]){
                   array_splice($tabelaB,$x,1);
                   return 1;
                }
            }
        }
        return 0;
    }

    function SequenciaCrescente(array $tabela){
       
        $quantidade = count($tabela);
        if ($quantidade == 1){return "true";}
        if ($quantidade == 0){return "false";}
        //sort($tabela);
        $removido = 0;
        $resposta = -1;
        while($resposta != 0){
            if ($removido >1){return "false";}
            $resposta = VerificaRemove($tabela);
            if ($resposta == 1){
                $removido++;
            }
            
        }
        
        return "true";
    }
 
    //Testes de execução.---------------------------------------
    echo "[1,3,2,1] ".                  SequenciaCrescente(array(1,3,2,1))."\n";
    echo "[1,3,2] ".                    SequenciaCrescente(array(1,3,2))."\n";
    echo "[1,2,1,2] ".                  SequenciaCrescente(array(1,2,1,2))."\n";
    echo "[3,6,5,8,10,20,15] ".         SequenciaCrescente(array(3,6,5,8,10,20,15))."\n";
    echo "[1,1,2,3,4,4] ".              SequenciaCrescente(array(1,1,2,3,4,4))."\n";
    echo "[1,4,10,4,2] ".               SequenciaCrescente(array(1,4,10,4,2))."\n";
    echo "[10,1,2,3,4,5] ".             SequenciaCrescente(array(10,1,2,3,4,5))."\n";
    echo "[1,1,1,2,3] ".                SequenciaCrescente(array(1,1,1,2,3))."\n";
    echo "[0,-2,5,6] ".                 SequenciaCrescente(array(0,-2,5,6))."\n";
    echo "[1,2,3,4,5,3,5,6] ".          SequenciaCrescente(array(1,2,3,4,5,3,5,6))."\n";
    echo "[40,50,60,10,20,30] ".        SequenciaCrescente(array(40,50,60,10,20,30))."\n";
    echo "[1,1] ".                      SequenciaCrescente(array(1,1))."\n";
    echo "[1,2,5,3,5] ".                SequenciaCrescente(array(1,2,5,3,5))."\n";
    echo "[1,2,5,5,5] ".                SequenciaCrescente(array(1,2,5,5,5))."\n";
    echo "[10,1,2,3,4,5,6,1] ".         SequenciaCrescente(array(10,1,2,3,4,5,6,1))."\n";
    echo "[1,2,3,4,3,6] ".              SequenciaCrescente(array(1,2,3,4,3,6))."\n";
    echo "[1,2,3,4,99,5,6] ".           SequenciaCrescente(array(1,2,3,4,99,5,6))."\n";
    echo "[123,-17,-5,1,2,3,12,43,45] ".SequenciaCrescente(array(123,-17,-5,1,2,3,12,43,45))."\n";
    echo "[3,5,67,98,3] ".              SequenciaCrescente(array(3,5,67,98,3))."\n";
    
?>