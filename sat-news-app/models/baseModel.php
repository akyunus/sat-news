<?php namespace SatNews\models;

class baseModel {

// pdo nesnesi veri tabanı bağlantı nesnesi
  protected $_pdo;

  public function __construct($db) {

    $this->_pdo = $db;

  }

  // insert işlemi yapar kayıt başarılıysa son eklenen kayıt idsini döndürür
  protected function insertQuery($sql,$params) {
    $sth = $this->_pdo->prepare($sql);

	if ($sth->execute($params)) {
      return $this->_pdo->lastInsertId();
    } else {
      return false;
    }
  }

  // update işlemi yapar kayıt başarılıysa true döndürür
  protected function updateQuery($sql,$params) {
    $sth = $this->_pdo->prepare($sql);

	if ($sth->execute($params)) {
      return true;
    } else {
		//print_r( $sth->errorInfo());
      return false;
    }
  }

  // array tipinde dizi halinde sonuç döndürür
  protected function multiSelectQuery($sql, $params=null) {

	$pdo_statement = $this->_pdo->prepare($sql);

    if ($pdo_statement->execute($params)) {
      return $pdo_statement->fetchAll(\PDO::FETCH_ASSOC);
    } else {
     //var_dump($sth->errorInfo());
      return array();
    }
  }

  // array tipinde dizi halinde sonuç döndürür
  protected function singleSelectQuery($sql, $params=null) {

	$pdo_statement = $this->_pdo->prepare($sql);

    if ($pdo_statement->execute($params)) {
      return $pdo_statement->fetch(\PDO::FETCH_ASSOC);
    } else {
     //var_dump($sth->errorInfo());
      return array();
    }
  }

}
