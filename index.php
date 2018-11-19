<?php
    //Array com arvore em Json.
    $arr = array(
        "paterna"=>
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
        "materna"=>
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

    //$name = "familytree.json"; //nome do arquivo txt que vai receber o json

    
    $paterna = $jsonObj->paterna;

    print_r($paterna);
?>