<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/materialize.min.css.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
<?php
/**
 *
 */
 // exercice 2
// class  City
// {
//
//   private $_nom;
//   private $_departement;
//
//
//
// public  function __construct($nom,$departement)
//   {
//   $this->setDetail($nom, $departement);
//   $this->getDétail();
//   }
//
//   public function setDetail($nom, $departement)
//   {
//   $this->_nom = $nom;
//   $this->_departement = $departement;
//
//   }
//
//   public function __destruct()
// {
//   echo 'Destruction de MaClasse';
// }
//
// public function getDétail()
// {
//   echo "la ville de " . $this->_nom . " est dans le département " . $this->_departement . "<br />";
// }
//
// }
//
// $ville1 = new City ("Lille", "Nord");
// $ville2 = new City ("Lens", "Pas-de-calais");

/**
 *
 */

//exercice 3

// class Personne
// {
// private $nom;
// private $adresse;
// private $prenom;
//
//
//   function __construct($newnom,$newprenom,$newadresse)
//   {
//   $this->setNom($newnom);
//   $this->setPrenom($newprenom);
//   $this->setAdresse($newadresse);
//   }
//
// function __destruct() {
// echo "C'est fini";
// }
//
// public function getAdresse()
// {
//   echo $this->_nom . "<br />";
//   echo $this->_prenom . "<br />";
//   echo $this->_adresse . "<br />";
// }
//
// public function setAdresse($newadresse)
// {
// $this->_adresse=$newadresse;
// }
//
// public function setNom($newnom)
// {
// $this->_nom=$newnom;
// }
// public function setPrenom($newprenom)
// {
// $this->_prenom=$newprenom;
// }
//
// }
//
// $clement = new Personne ("sanchez","Clément","31 rue Voltaire 59790 Ronchin");
// $clement -> setAdresse("10 rue du Chemin");
// $clement -> getAdresse();

/**
 *
 */
class Form
{

  private $form;
    public function __construct($adresse)
    {
        $this->_form = "<form action='$adresse' method='post'> <fieldset>";
    }



    public function setText($label)
    {
        $this->_form .=  "<label>" . $label . "</label>";
        $this->_form .= "<input type='text'>";
    }

    public function setSubmit()
    {
        $this->_form .= "<input type='submit'>";
        $this->_form .= "  </fieldset> </form>";
    }

    public function getForm()
    {
return $this->_form ;
    }
}

$form1= new Form('index.php');
$form1->setText('Nom');
$form1->setText('Prénom');
$form1->setSubmit();
echo $form1->getForm();


 ?>





        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
