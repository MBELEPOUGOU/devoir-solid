<?php
class Service {
    private $id;
    private $code;
    private $nom;

    public function __construct($id, $code, $nom) {
        $this->id = $id;
        $this->code = $code;
        $this->nom = $nom;
    }

    public function getId() {
        return $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function getNom() {
        return $this->nom;
    }
    




}
