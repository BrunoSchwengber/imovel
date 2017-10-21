<?php

        $con = new mysqli('localhost', 'root', '', 'IMOVEL');

        if($con->connect_errno){
                throw new Exception("Erro ao conectar ao Banco de Dados.", 1);
        }

        $con->set_charset('utf8');
