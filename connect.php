<?php
/**................................................................
 * @package efac v 1.0
 * @author Faith Awolu
 * Hillsofts Technology Ltd.
 * (hillsofts@gmail.com)
 * ................................................................
 */

/* Database config 
Please edit the database info to yours
*/
/* $db_host		= "predictonomydbinstance.cfafrynqkkvu.eu-west-2.rds.amazonaws.com";
$db_user		= "predictonomydb1";
$db_pass		= "Predictonomy1";
$db_database	= "predictonomyDB"; */
/* $db_host		= "localhost";
$db_user		= "root";
$db_pass		= "";
$db_database	= "native"; */
include "idiorm.php";
/* End config */
/*  ORM::configure("mysql:host=".$db_host.";dbname=".$db_database);
 ORM::configure("username",$db_user);
 ORM::configure("password",$db_pass); */
/*  database functions  */



$servername = "predictonomydbinstance.cfafrynqkkvu.eu-west-2.rds.amazonaws.com";
 $username = "predictonomydb1";
 $password = "Predictonomy1";
 $database = "faradayroomDB";
 $dbport = 3306;

 try {
     $db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8;port=$dbport", $username, $password);
 }
 catch(PDOException $e) {
     echo $e->getMessage();
 }

/* $db = new PDO("mysql:host=".$db_host.";dbname=".$db_database, $db_user, $db_pass); */
/* $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn = mysql_connect($db_host, $db_user, $db_pass);
mysql_select_db($db_database); */
$mysqli = new mysqli;
 


class App {   
    public static function message($type,$message,$code=''){
        if($type=='error'){
            return '<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                               '.$message.' <a class="alert-link" href="#">'.$code.'</a>.
                            </div>';
        }else{
             return '<div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                               '.$message.' <a class="alert-link" href="#">'.$code.'</a>.
                            </div>';
        }
    }
}
function get($val){
    return @$_GET[$val];
    }
    

