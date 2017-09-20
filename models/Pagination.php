<?php
// TODO: Classe de Paginação geral.
class Pagination extends Model {
  private static $table;
  private static $maxPerPage = 2;
  private static $page = 'page';
  private static $startPage;
  private static $maxLinks;
  private static $query = "SELECT * FROM ";
  private static $queryCount = null;
  private static $places = array();

// Seters e Geters da classe Pagination.
  public static function setTable(string $setTable){
    if(!is_string($setTable)){
      throw new Exception("<< O NOME DA TABELA DEVE SER DO TIPO STRING >>");
    }else{
      self::$table = $setTable;
    }
  }

  private static function getTable(){
    return self::$table;
  }

  public static function setMaxPerPage(int $max){
    if(!is_int($max)){
      throw new Exception("<< O VALOR PARA O MAXIMO POR PAGINA DEVE SER UM INTEIRO >>");
    }else{
      self::$maxPerPage = $max;
    }
  }

  private static function getMaxPerPage(){
    return self::$maxPerPage;
  }

  public static function setPage(string $namePage){
    if(!is_string($namePage)){
      throw new Exception("<< O NOME DO PAGINADOR DEVE SER DO TIPO STRING >>");
    }else{
      self::$page = $namePage;
    }
  }

  private static function getPage(){
    return self::$page;
  }

  public static function setMaxLinks(int $max){
    if(!is_int($max)){
      throw new Exception("<< O VALOR PARA O MÁXIMO DE LINKS DEVE SER UM INTEIRO >>");
    }else{
      self::$maxLinks = $max;
    }
  }

  private static function getMaxLinks(){
    return self::$maxLinks;
  }

  private static function getPager() {
    $pager = filter_input(INPUT_GET, self::getPage());
    return (isset($pager)?(int)$pager:1);
  }

  public static function setPlaces(array $placesValues){
    self::$places = $placesValues;
  }

  private static function getPlaces(){
    return self::$places;
  }

// Funções gerais da classe Pagination

  public static function createPagination($where = null, $orderBy = null){
    // $inicio = (($max_pag * $pagina) - $max_pag);
    self::$startPage = ((self::getMaxPerPage() * self::getPager()) - self::getMaxPerPage());
    self::$startPage = (self::$startPage >= 1 ? self::$startPage : 1);

    if($where == null && $orderBy == null){
      //  "SELECT * FROM tab_clients ORDER BY id_client ASC LIMIT $inicio,$max_pag";
      self::$query .= self::getTable()." LIMIT ".self::$startPage.",".self::getMaxPerPage();
      Pagination::FullRead(self::$query);
    }elseif($where == null && $orderBy != null){
      self::$query .= self::getTable()." {$orderBy} LIMIT ".self::$startPage.",".self::getMaxPerPage();
      Pagination::FullRead(self::$query);
    }elseif($where != null && $orderBy == null){
      self::$query .= self::getTable()." {$where} LIMIT ".self::$startPage.",".self::getMaxPerPage();
      Pagination::FullRead(self::$query,self::getPlaces());
    }elseif($where != null && $orderBy != null){
      self::$query .= self::getTable()." {$where} {$orderBy} LIMIT ".self::$startPage.",".self::getMaxPerPage();
      Pagination::FullRead(self::$query,self::getPlaces());
    }
    return Pagination::getResult();

  }


}
