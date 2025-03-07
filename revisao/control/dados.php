<?php

class Dados {
    private $nome = "padrao";
    private $password = "123456";

    private $adm = "Ancelmo";
    private $passwordAdm = "123";

    public function getNome() {
        return $this->nome;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAdm() {
        return $this->adm;
    }

    public function getPasswordAdm() {
        return $this->passwordAdm;
    }
}

?>