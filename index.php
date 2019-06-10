<?php

require_once("./conexao.php");

class Model_Student
{

    public static function catchStudents()
    {
      return $stmt = Db::_conexao()->query("select * from tbestudante")->fetchAll(PDO::FETCH_ASSOC);
    }

}

$estudantes = Model_Student::catchStudents();
foreach ($estudantes as $estudante) {
    echo $estudante['nome'];
}
