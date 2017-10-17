<?php
class Contato extends Model {
  protected static $Table = "clients_contatos";

  public static function countContatos(){
    $Query = "SELECT COUNT(id) AS Total FROM clients_contatos";
    Contato::FullRead($Query);
    return Contato::getResult()[0]['Total'];
  }
}

 ?>
