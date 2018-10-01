<?php

require_once("./conexao.php");

class Model_Student
{

    public static function catchStudents()
    {
        try {
            $stmt = Db::_conexao()->query("select * from tbestudante")->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $stmt;
    }

}

$estudantes = Model_Student::catchStudents();
foreach ($estudantes as $estudante) {
    echo $estudante['nome'];
}
