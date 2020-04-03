<?php

    /** 
 * @Entity 
 * **/
class Utilisateur{

    /**
 * @Id @Column(type="integer")
 * @GeneratedValue
 **/
protected $id;
/**
 * @Column(type="string", length=160)
 **/
protected $login;
/**
 * @Column(type="string", length=160)
 **/
protected $mdp;


public function getId(){
    return $this->id;

}
public function setId($x){
    $this->id=$x;
    return $this;

}
public function getLogin(){
    return $this->login;

}
public function setLogin($x){
    $this->login=$x;
    return $this;

}

public function getMdp(){
    return $this->mdp;
}

public function setMdp( $mdp){
    $this->mdp = $mdp;
    return $this;
}

}

?>