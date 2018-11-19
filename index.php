<?php
    //Array com arvore em Json.
    $arr = array(
        array(
            "nome" => "Alicia Nery de Oliveira",
            "idade" => "84 anos",
            "parentesco" => "Avo Paterna",
            "filhos"=>array(
                "nome"=>"Adalicio Nery",
                "idade"=>"51",
                "parentesco"=>"Pai",
                "filhos"=>array(
                    "nome"=>"Lucas Nery",
                    "idade"=>"21",
                    "parentesco"=>"Filho"
                ),array(
                    "nome"=>"Gabriel Nery",
                    "idade"=>"15",
                    "parentesco"=>"Irmão"
                ),array(
                    "nome"=>"Thiago Nery",
                    "idade"=>"18",
                    "parentesco"=>"Irmão"
                ),
            ),
            array(
                "nome"=>"Joao Nery",
                "idade"=>"57",
                "parentesco"=>"Tio",
                "filhos"=>array(
                    "nome"=>"Daniel Novaes",
                    "idade"=>"27",
                    "parentesco"=>"Primo"
                ),array(
                    "nome"=>"Daniela Novaes",
                    "idade"=>"31",
                    "parentesco"=>"prima"
                )
            )
        ),

        array(
            "nome"=>"Maria Moraes",
            "idade"=>"60",
            "parentesco"=>"Avo Materna",
            "filhos"=>array(
                "nome:"=>"Maria Aparecida",
                "idade"=>"42",
                "parentesco"=>"Mom",
                "filhos"=>array(
                    "nome"=>"Lucas Nery",
                    "idade"=>"21",
                    "parentesco"=>"Filho"
                ),array(
                    "nome"=>"Gabriel Nery",
                    "idade"=>"15",
                    "parentesco"=>"Irmao"
                ),array(
                    "nome"=>"Thiago Nery",
                    "idade"=>"18",
                    "parentesco"=>"Irmao"
                ),
            ),array(
                "nome"=>"Naylda Moraes",
                "idade"=>"32",
                "parentesco"=>"Tia",
                "filhos"=>array(
                    "nome"=>"Breno Moraes",
                    "idade"=>"12",
                    "parentesco"=>"Primo"
                )
            ),
        )
    );

    //$name = "familytree.txt"; //nome do arquivo txt que vai receber o json

    //$file = fopen($name, 'a'); //informar arquivo que será aberto e abrí-lo
    //fwrite($file, json_encode($arr)); //escrever dados no arquivo
    //fclose($file); //fechar arquivo txt que está sendo utilizado
    //echo "Arquivo txt criado!";

    $json_data = file_get_contents("familytree.txt");
    $json = json_decode($json_data);

    echo "<table>";

    foreach($json as $tree){
        echo "<tr>
            <td>" . $tree->nome. "
        </tr>";
    }
?>