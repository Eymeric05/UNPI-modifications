<?php


namespace App;

class Controller
{

    public static function Controller()
    {

        if (empty($_GET['p'])) {
            require "views/index.php";
        } else {
            $url = explode("/", $_GET['p'], FILTER_SANITIZE_URL);
            switch ($url[0]) {
                case 'accueil':
                    require "views/index.php";
                    break;
                case 'services':
                    require "views/services.php";
                    break;
                case 'rejoindre':
                    require "views/rejoindre.php";
                    break;
                case 'partenaire':
                    require "views/partenaire.php";
                    break;
                case 'contact':
                    require "views/contact.php";
                    break;
                case 'formulaire':
                    require "views/formulaire.php";
                    break;
                case 'assemblee-generale':
                    require "views/assemblee-generale.php";
                    break;
                case 'actualites':
                    require "views/actualites.php";
                    break;
                case 'qui-sommes-nous':
                    require "views/qui-sommes-nous.php";
                    break;
                case 'vote-correspondance':
                    require "views/vote-correspondance.php";
                    break;
                case 'vote-correspondance-test':
                    require "views/vote-correspondance-test.php";
                    break;
                case 'assemblee-generale-2025':
                    require "views/assemblee-generale-2025.php";
                    break;
                default:
                    require "views/index.php";
            }
        }
    }

    public static function returnURL()
    {
        if ($_GET['p'] == '') {
            return URL . 'accueil';
        } else {
            return URL . $_GET['page'];
        }
    }
}
