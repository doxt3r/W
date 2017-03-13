<?php
namespace Model\Db;
use ORM;
use PDO;

/* --
 * Le fait de déclarer des propriétés ou des méthodes comme
 * statiques vous permet d'y accéder sans avoir besoin d'instancier
 * la classe. On ne peut accéder é une propriété déclarée comme statique
 * avec l'objet instancié d'une classe (bien que ce soit possible pour
 * une méthode statique).
 * Docs : http://php.net/manual/fr/language.oop5.static.php
 */
class DBFactory
{
    public function start() {

      //recuperation des données de l'application
      $app = getApp();
      //initialisation de idiorm
      ORM::configure('mysql:host='.$app->getConfig('db_host').';dbname='.$app->getConfig('db_name'));
      ORM::configure('username', $app->getConfig('db_user'));
      ORM::configure('password', $app->getConfig('db_pass'));

      //configuration des clés primaires

      ORM::configure('id_column_overrides',array(
//e.g        'article' => 'IDARTICLE',
//e.g        'auteur' => 'IDAUTEUR'
      ));
    }


}
