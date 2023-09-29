<?php

class RepositorioAviao{
    
    public function cadastrar(aviao $aviao, PDO $pdo){
       
        $codigoSql = "INSERT INTO AVIAO(cmaerea,cdp,velomax,autonomia,modelo) VALUES (:cm,:cdp,:v,:au:,:mo)";
        $modelo = $aviao->exibirmodelo();
        $cmaerea = $aviao->exibircmaerea();
        $cdp = $aviao->exibircdp();
        $velomax = $aviao->exibirvelomax();
        $autonomia = $aviao->exibirautonomia();

        
        $inserir = $pdo->prepare($codigoSql);
        
        $inserir->bindParam(":cm",$Cmaerea);
        $inserir->bindParam(":cdp",$cdp);
        $inserir->bindParam(":ve",$velomax);
        $inserir->bindParam(":au",$autonomia);
        $inserir->bindParam(":mo",$modelo);
       
        $inserir->execute();
    }
    
    public function listar(PDO $banco) {
        $sql = "SELECT * FROM PESSOA";

       
        $select = $banco->query($sql);

        
        return $select->fetchAll(PDO::FETCH_ASSOC); 
    }
}