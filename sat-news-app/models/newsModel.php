<?php namespace SatNews\models;

class newsModel extends baseModel {

  public function kategorileriAl() {
    $sql = 'Select * From categories';
    return $this->multiSelectQuery($sql);
  }

  public function HaberDetay($haber_id) {
    $sql = 'Select *,(Select name from authors where id=n.author_id) as author_name from news n where id=?';
    return $this->singleSelectQuery($sql,[$haber_id]);
  }

  public function HaberTags($haber_id) {
    $sql = 'Select name from tags where id in (Select tag_id from news_tags where news_id=?)';
    return $this->multiSelectQuery($sql,[$haber_id]);
  }

}
