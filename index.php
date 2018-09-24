<?php

require_once("./conexao.php");

class Model_Studing
{

    public static function studing()
    {
        try {
            $stmt = Db::_conexao()->query("select * from tbcliente")->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $stmt;
    }

}

$clientes = Model_Studing::studing();
foreach ($clientes as $cliente) {
    echo $cliente['nome_cliente'];
}
