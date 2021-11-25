<?php
class F_CONNECT{

  protected static $dbOVH;

  private function __construct() {

    try 
    {
      self::$dbOVH = new PDO('mysql:host=localhost;dbname=hrw', 'prim', 'Adam0908!!');
      self::$dbOVH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }

    catch (PDOException $e) 
    {
      echo "Erreur de connexion: " . $e->getMessage();
    }
  }

  public static function getConnexionOVH() {
    if (!self::$dbOVH) 
    {
      new F_CONNECT();
    }
    return self::$dbOVH;
  }


}


?>