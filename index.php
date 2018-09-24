<?php

require_once("./conexao.php");

class Model_Studing
{

    public static function studing()
    {
        try {
            $stmt = Db::_conexao()->query("select * from tbestudante")->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $stmt;
    }

}

$estudantes = Model_Studing::studing();
foreach ($estudantes as $estudante) {
    echo $estudante['nome'];
}
