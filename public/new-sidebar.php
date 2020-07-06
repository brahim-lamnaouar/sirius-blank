<?php
function json_path($file)
{
    $json = json_decode(file_get_contents(
        'assets/manifest.json'
    ));
    if (!empty($json->$file)) {
        return $json->$file;
    }
    return '';
}
?>

<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <title>Tableau de bord - MOPRO</title>
    <link type="image/x-icon" rel="shortcut icon" href="http://localhost:6069/web/static/src/img/favicon.ico">


    <script type="text/javascript">
        var odoo = {
            csrf_token: "3d67adb4eafc17ca6aa1da83b544a806178e0452o",
        };
    </script>


    <script type="text/javascript">
        odoo.session_info = {"username": "sa_1", "max_time_between_keys_in_ms": 55, "currencies": {"112": {"digits": [69, 2], "position": "after", "symbol": "DH"}, "1": {"digits": [69, 2], "position": "after", "symbol": "\u20ac"}, "3": {"digits": [69, 2], "position": "before", "symbol": "$"}}, "uid": 1, "db": "base_test", "is_admin": true, "server_version_info": [10, 0, 0, "final", 0, ""], "server_version": "10.0-20190914", "user_context": {"lang": "fr_FR", "tz": false, "uid": 1}, "web.base.url": "http://localhost:6069", "name": "Administrator", "partner_id": 3, "web_tours": [], "company_id": 1, "session_id": "96ceb2167afb08a774b3151d1d56ee7b0aa97c33", "is_superuser": true, "user_companies": false};
    </script>


    <link href="./Mopro_files/web.assets_common.0.css" rel="stylesheet">

    <link href="./Mopro_files/web.assets_backend.0.css" rel="stylesheet">
    <link href="./Mopro_files/web.assets_backend.1.css" rel="stylesheet">

    <link href="./Mopro_files/web_editor.summernote.0.css" rel="stylesheet">

    <link href="./Mopro_files/web_editor.assets_editor.0.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="responsive-menu.css">


    <script type="text/javascript" src="./Mopro_files/web.assets_common.js.téléchargement"></script>

    <script type="text/javascript" src="./Mopro_files/web.assets_backend.js.téléchargement"></script>


    <!--[if lt IE 10]>
        <body class="ie9">
    <![endif]-->



    <script type="text/javascript" src="./Mopro_files/web_editor.summernote.js.téléchargement"></script>

    <script type="text/javascript" src="./Mopro_files/web_editor.assets_editor.js.téléchargement"></script>

    <script type="text/javascript">
        odoo.define('web.web_client', function (require) {
            var WebClient = require('web.WebClient');
            var web_client = new WebClient();
            $(function() {
                web_client.setElement($(document.body));
                web_client.start();
            });
            return web_client;
        });
    </script>


    <link rel="stylesheet" href="<?= json_path('main.css') ?>">

    <script type="text/javascript" src="./Mopro_files/fr_FR"></script>
</head>
<body class="drawer drawer--left o_web_client">
    <header role="banner">
                                <nav class="navbar navbar-default main-nav" role="navigation">
                                    <div class="container-fluid">
                                        <div class="navbar-header">

                                            <a class="drawer-toggle navbar-collapse collapse btn btn-default app-drawer-toggle" accesskey="A">
                                                <span class="sr-only">Toggle App Drawer</span>
                                                <i class="fa fa-th fa-lg app-drawer-icon-open" aria-hidden="true"></i>
                                            </a>

                                            <button type="button" class="app-drawer-toggle drawer-toggle pull-left navbar-toggle collapsed">
                                                <span class="sr-only">Toggle App Drawer</span>
                                                <div class="fa fa-th fa-lg app-drawer-icon-open"></div>
                                            </button>

                                            <button type="button" id="odooMenuBarToggle" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#odooMenuBarNav">
                                                <span class="sr-only">Toggle Navigation</span>
                                                <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                                            </button>

                                        </div>

                                        <div class="collapse navbar-collapse" id="odooMenuBarNav" data-parent="#odooMenuBarToggle" aria-expanded="false">
                                            <div class="o_sub_menu">

                        <a class="o_sub_menu_logo" href="http://localhost:6069/web">
                            <span class="oe_logo_edit oe_logo_edit_admin">Edit Company data</span>
                            <img src="./Mopro_files/company_logo(1)">
                        </a>
                        <div class="o_sub_menu_content">

                                <ul style="" class="oe_secondary_menu nav navbar-nav" data-menu-parent="130">
                                    <li class="app-name">
                                        <span class="oe_menu_text">
                                            Ventes
                                        </span>
                                    </li>
                                    <li>




                                    </li><li class="active">


                        <a href="http://localhost:6069/web#menu_id=144&amp;action=191" class="oe_menu_leaf" data-menu="144" data-action-model="ir.actions.act_window" data-action-id="191" data-menu-name="Tableau de bord">


                                <span class="oe_menu_text">
                                    Tableau de bord
                                </span>

                        </a>

                                    </li>



                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Ventes
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=132&amp;action=55" class="oe_menu_leaf" data-menu="132" data-action-model="ir.actions.act_window" data-action-id="55" data-menu-name="Clients">


                                <span class="oe_menu_text">
                                    Clients
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=221&amp;action=302" class="oe_menu_leaf" data-menu="221" data-action-model="ir.actions.act_window" data-action-id="302" data-menu-name="Devis">


                                <span class="oe_menu_text">
                                    Devis
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=217&amp;action=299" class="oe_menu_leaf" data-menu="217" data-action-model="ir.actions.act_window" data-action-id="299" data-menu-name="Bons de commandes">


                                <span class="oe_menu_text">
                                    Bons de commandes
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=206&amp;action=116" class="oe_menu_leaf" data-menu="206" data-action-model="ir.actions.act_window" data-action-id="116" data-menu-name="Articles">


                                <span class="oe_menu_text">
                                    Articles
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Facturation
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=219&amp;action=300" class="oe_menu_leaf" data-menu="219" data-action-model="ir.actions.act_window" data-action-id="300" data-menu-name="Commandes à facturer">


                                <span class="oe_menu_text">
                                    Commandes à facturer
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=220&amp;action=301" class="oe_menu_leaf" data-menu="220" data-action-model="ir.actions.act_window" data-action-id="301" data-menu-name="Quantités à modifier">


                                <span class="oe_menu_text">
                                    Quantités à modifier
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Rapports
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=203&amp;action=297" class="oe_menu_leaf" data-menu="203" data-action-model="ir.actions.act_window" data-action-id="297" data-menu-name="Ventes">


                                <span class="oe_menu_text">
                                    Ventes
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Configuration
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=133&amp;action=190" class="oe_menu_leaf" data-menu="133" data-action-model="ir.actions.act_window" data-action-id="190" data-menu-name="Configuration">


                                <span class="oe_menu_text">
                                    Configuration
                                </span>

                        </a>

                                    </li>



                                    <li class="dropdown-header">

                                            Articles




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=247&amp;action=334" class="oe_menu_leaf" data-menu="247" data-action-model="ir.actions.act_window" data-action-id="334" data-menu-name="Type de produit">


                                <span class="oe_menu_text">
                                    Type de produit
                                </span>

                        </a>

                                    </li>












                                    <li>


                        <a href="http://localhost:6069/web#menu_id=146&amp;action=193" class="oe_menu_leaf" data-menu="146" data-action-model="ir.actions.act_window" data-action-id="193" data-menu-name="Équipes commerciales">


                                <span class="oe_menu_text">
                                    Équipes commerciales
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>






                                </ul>

                                <ul style="display: none" class="oe_secondary_menu nav navbar-nav" data-menu-parent="227">
                                    <li class="app-name">
                                        <span class="oe_menu_text">
                                            Achats
                                        </span>
                                    </li>
                                    <li>



                                    </li><li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Achats
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=242&amp;action=325" class="oe_menu_leaf" data-menu="242" data-action-model="ir.actions.act_window" data-action-id="325" data-menu-name="Demande de prix">


                                <span class="oe_menu_text">
                                    Demande de prix
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=243&amp;action=326" class="oe_menu_leaf" data-menu="243" data-action-model="ir.actions.act_window" data-action-id="326" data-menu-name="Bon de commande">


                                <span class="oe_menu_text">
                                    Bon de commande
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=229&amp;action=57" class="oe_menu_leaf" data-menu="229" data-action-model="ir.actions.act_window" data-action-id="57" data-menu-name="Fournisseurs">


                                <span class="oe_menu_text">
                                    Fournisseurs
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=239&amp;action=321" class="oe_menu_leaf" data-menu="239" data-action-model="ir.actions.act_window" data-action-id="321" data-menu-name="Articles">


                                <span class="oe_menu_text">
                                    Articles
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Contrôle
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=237&amp;action=178" class="oe_menu_leaf" data-menu="237" data-action-model="ir.actions.act_window" data-action-id="178" data-menu-name="Articles entrants">


                                <span class="oe_menu_text">
                                    Articles entrants
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=238&amp;action=317" class="oe_menu_leaf" data-menu="238" data-action-model="ir.actions.act_window" data-action-id="317" data-menu-name="Factures fournisseur">


                                <span class="oe_menu_text">
                                    Factures fournisseur
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>





                                    <li>


                        <a href="http://localhost:6069/web#menu_id=244&amp;action=330" class="oe_menu_leaf" data-menu="244" data-action-model="ir.actions.act_window" data-action-id="330" data-menu-name="Rapports">


                                <span class="oe_menu_text">
                                    Rapports
                                </span>

                        </a>

                                    </li>



                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Configuration
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=245&amp;action=331" class="oe_menu_leaf" data-menu="245" data-action-model="ir.actions.act_window" data-action-id="331" data-menu-name="Configuration">


                                <span class="oe_menu_text">
                                    Configuration
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>






                                </ul>

                                <ul style="display: none" class="oe_secondary_menu nav navbar-nav" data-menu-parent="86">
                                    <li class="app-name">
                                        <span class="oe_menu_text">
                                            Inventaire
                                        </span>
                                    </li>
                                    <li>




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=107&amp;action=149" class="oe_menu_leaf" data-menu="107" data-action-model="ir.actions.act_window" data-action-id="149" data-menu-name="Tableau de bord">


                                <span class="oe_menu_text">
                                    Tableau de bord
                                </span>

                        </a>

                                    </li>



                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Opérations
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=109&amp;action=151" class="oe_menu_leaf" data-menu="109" data-action-model="ir.actions.act_window" data-action-id="151" data-menu-name="Tous les transferts">


                                <span class="oe_menu_text">
                                    Tous les transferts
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Contrôle d'Inventaire
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=125&amp;action=183" class="oe_menu_leaf" data-menu="125" data-action-model="ir.actions.act_window" data-action-id="183" data-menu-name="Articles">


                                <span class="oe_menu_text">
                                    Articles
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=123&amp;action=174" class="oe_menu_leaf" data-menu="123" data-action-model="ir.actions.act_window" data-action-id="174" data-menu-name="Règles de réapprovisionnement">


                                <span class="oe_menu_text">
                                    Règles de réapprovisionnement
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=104&amp;action=144" class="oe_menu_leaf" data-menu="104" data-action-model="ir.actions.act_window" data-action-id="144" data-menu-name="Ajustements de stock">


                                <span class="oe_menu_text">
                                    Ajustements de stock
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=103&amp;action=143" class="oe_menu_leaf" data-menu="103" data-action-model="ir.actions.act_window" data-action-id="143" data-menu-name="Rebut">


                                <span class="oe_menu_text">
                                    Rebut
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Planificateurs
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=118&amp;action=121" class="oe_menu_leaf" data-menu="118" data-action-model="ir.actions.act_window" data-action-id="121" data-menu-name="Lancer les planificateurs">


                                <span class="oe_menu_text">
                                    Lancer les planificateurs
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Rapports
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=110&amp;action=162" class="oe_menu_leaf" data-menu="110" data-action-model="ir.actions.act_window" data-action-id="162" data-menu-name="Valorisation de l&#39;inventaire">


                                <span class="oe_menu_text">
                                    Valorisation de l'inventaire
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=124&amp;action=177" class="oe_menu_leaf" data-menu="124" data-action-model="ir.actions.act_window" data-action-id="177" data-menu-name="Mouvements de stocks">


                                <span class="oe_menu_text">
                                    Mouvements de stocks
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=120&amp;action=123" class="oe_menu_leaf" data-menu="120" data-action-model="ir.actions.act_window" data-action-id="123" data-menu-name="Approvisionnements en exception">


                                <span class="oe_menu_text">
                                    Approvisionnements en exception
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Configuration
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=127&amp;action=184" class="oe_menu_leaf" data-menu="127" data-action-model="ir.actions.act_window" data-action-id="184" data-menu-name="Configuration">


                                <span class="oe_menu_text">
                                    Configuration
                                </span>

                        </a>

                                    </li>



                                    <li class="dropdown-header">

                                            Articles




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=94&amp;action=113" class="oe_menu_leaf" data-menu="94" data-action-model="ir.actions.act_window" data-action-id="113" data-menu-name="Catégories d&#39;articles">


                                <span class="oe_menu_text">
                                    Catégories d'articles
                                </span>

                        </a>

                                    </li>












                                            </ul>

                                    </li>






                                </ul>

                                <ul style="display: none" class="oe_secondary_menu nav navbar-nav" data-menu-parent="147">
                                    <li class="app-name">
                                        <span class="oe_menu_text">
                                            Comptabilité
                                        </span>
                                    </li>
                                    <li>




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=189&amp;action=279" class="oe_menu_leaf" data-menu="189" data-action-model="ir.actions.act_window" data-action-id="279" data-menu-name="Tableau de bord">


                                <span class="oe_menu_text">
                                    Tableau de bord
                                </span>

                        </a>

                                    </li>



                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Ventes
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=179&amp;action=268" class="oe_menu_leaf" data-menu="179" data-action-model="ir.actions.act_window" data-action-id="268" data-menu-name="Factures clients">


                                <span class="oe_menu_text">
                                    Factures clients
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=162&amp;action=194" class="oe_menu_leaf" data-menu="162" data-action-model="ir.actions.act_window" data-action-id="194" data-menu-name="Paiements">


                                <span class="oe_menu_text">
                                    Paiements
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=173&amp;action=56" class="oe_menu_leaf" data-menu="173" data-action-model="ir.actions.act_window" data-action-id="56" data-menu-name="Clients">


                                <span class="oe_menu_text">
                                    Clients
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=174&amp;action=116" class="oe_menu_leaf" data-menu="174" data-action-model="ir.actions.act_window" data-action-id="116" data-menu-name="Articles en vente">


                                <span class="oe_menu_text">
                                    Articles en vente
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Achats
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=180&amp;action=269" class="oe_menu_leaf" data-menu="180" data-action-model="ir.actions.act_window" data-action-id="269" data-menu-name="Factures fournisseur">


                                <span class="oe_menu_text">
                                    Factures fournisseur
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=163&amp;action=195" class="oe_menu_leaf" data-menu="163" data-action-model="ir.actions.act_window" data-action-id="195" data-menu-name="Paiements">


                                <span class="oe_menu_text">
                                    Paiements
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=175&amp;action=57" class="oe_menu_leaf" data-menu="175" data-action-model="ir.actions.act_window" data-action-id="57" data-menu-name="Fournisseurs">


                                <span class="oe_menu_text">
                                    Fournisseurs
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=240&amp;action=321" class="oe_menu_leaf" data-menu="240" data-action-model="ir.actions.act_window" data-action-id="321" data-menu-name="Produits pouvant être achetés">


                                <span class="oe_menu_text">
                                    Produits pouvant être achetés
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Conseiller
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=171&amp;action=237" class="oe_menu_leaf" data-menu="171" data-action-model="ir.actions.act_window" data-action-id="237" data-menu-name="Pièces comptables">


                                <span class="oe_menu_text">
                                    Pièces comptables
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=164&amp;action=201" class="oe_menu_leaf" data-menu="164" data-action-model="ir.actions.act_window" data-action-id="201" data-menu-name="Plan comptable">


                                <span class="oe_menu_text">
                                    Plan comptable
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=178&amp;action=249" class="oe_menu_leaf" data-menu="178" data-action-model="ir.actions.client" data-action-id="249" data-menu-name="Correspondance des paiements manuels et des factures">


                                <span class="oe_menu_text">
                                    Correspondance des paiements manuels et des factures
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=198&amp;action=289" class="oe_menu_leaf" data-menu="198" data-action-model="ir.actions.act_window" data-action-id="289" data-menu-name="Effectuer des ajustements fiscaux manuels">


                                <span class="oe_menu_text">
                                    Effectuer des ajustements fiscaux manuels
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Rapports
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">



                                    <li class="dropdown-header">

                                            Analyse statistique




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=188&amp;action=277" class="oe_menu_leaf" data-menu="188" data-action-model="ir.actions.act_window" data-action-id="277" data-menu-name="Factures">


                                <span class="oe_menu_text">
                                    Factures
                                </span>

                        </a>

                                    </li>











                                    <li class="dropdown-header">

                                            Rapports PDF




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=190&amp;action=281" class="oe_menu_leaf" data-menu="190" data-action-model="ir.actions.act_window" data-action-id="281" data-menu-name="Journal ventes/achats">


                                <span class="oe_menu_text">
                                    Journal ventes/achats
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=191&amp;action=282" class="oe_menu_leaf" data-menu="191" data-action-model="ir.actions.act_window" data-action-id="282" data-menu-name="Livre des tiers">


                                <span class="oe_menu_text">
                                    Livre des tiers
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=192&amp;action=283" class="oe_menu_leaf" data-menu="192" data-action-model="ir.actions.act_window" data-action-id="283" data-menu-name="Grand livre">


                                <span class="oe_menu_text">
                                    Grand livre
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=193&amp;action=284" class="oe_menu_leaf" data-menu="193" data-action-model="ir.actions.act_window" data-action-id="284" data-menu-name="Balance générale">


                                <span class="oe_menu_text">
                                    Balance générale
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=194&amp;action=285" class="oe_menu_leaf" data-menu="194" data-action-model="ir.actions.act_window" data-action-id="285" data-menu-name="Bilan">


                                <span class="oe_menu_text">
                                    Bilan
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=195&amp;action=286" class="oe_menu_leaf" data-menu="195" data-action-model="ir.actions.act_window" data-action-id="286" data-menu-name="Compte de résultat">


                                <span class="oe_menu_text">
                                    Compte de résultat
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=197&amp;action=288" class="oe_menu_leaf" data-menu="197" data-action-model="ir.actions.act_window" data-action-id="288" data-menu-name="Balance agée des tiers">


                                <span class="oe_menu_text">
                                    Balance agée des tiers
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=196&amp;action=287" class="oe_menu_leaf" data-menu="196" data-action-model="ir.actions.act_window" data-action-id="287" data-menu-name="Rapports financiers">


                                <span class="oe_menu_text">
                                    Rapports financiers
                                </span>

                        </a>

                                    </li>












                                            </ul>

                                    </li>




                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Configuration
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=187&amp;action=275" class="oe_menu_leaf" data-menu="187" data-action-model="ir.actions.act_window" data-action-id="275" data-menu-name="Configuration">


                                <span class="oe_menu_text">
                                    Configuration
                                </span>

                        </a>

                                    </li>



                                    <li class="dropdown-header">

                                            Comptabilité




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=169&amp;action=230" class="oe_menu_leaf" data-menu="169" data-action-model="ir.actions.act_window" data-action-id="230" data-menu-name="Taxes">


                                <span class="oe_menu_text">
                                    Taxes
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=181&amp;action=272" class="oe_menu_leaf" data-menu="181" data-action-model="ir.actions.act_window" data-action-id="272" data-menu-name="Positions fiscales">


                                <span class="oe_menu_text">
                                    Positions fiscales
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=165&amp;action=215" class="oe_menu_leaf" data-menu="165" data-action-model="ir.actions.act_window" data-action-id="215" data-menu-name="Comptes bancaires">


                                <span class="oe_menu_text">
                                    Comptes bancaires
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=166&amp;action=216" class="oe_menu_leaf" data-menu="166" data-action-model="ir.actions.act_window" data-action-id="216" data-menu-name="Journaux">


                                <span class="oe_menu_text">
                                    Journaux
                                </span>

                        </a>

                                    </li>











                                    <li class="dropdown-header">

                                            Gestion




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=172&amp;action=240" class="oe_menu_leaf" data-menu="172" data-action-model="ir.actions.act_window" data-action-id="240" data-menu-name="Conditions de règlement">


                                <span class="oe_menu_text">
                                    Conditions de règlement
                                </span>

                        </a>

                                    </li>











                                    <li class="dropdown-header">

                                            Rapports financiers




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=176&amp;action=247" class="oe_menu_leaf" data-menu="176" data-action-model="ir.actions.act_window" data-action-id="247" data-menu-name="Rapports de comptes">


                                <span class="oe_menu_text">
                                    Rapports de comptes
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=177&amp;action=248" class="oe_menu_leaf" data-menu="177" data-action-model="ir.actions.act_window" data-action-id="248" data-menu-name="Hiérarchie des rapports comptables">


                                <span class="oe_menu_text">
                                    Hiérarchie des rapports comptables
                                </span>

                        </a>

                                    </li>











                                    <li class="dropdown-header">

                                            Paiements




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=200&amp;action=292" class="oe_menu_leaf" data-menu="200" data-action-model="ir.actions.act_window" data-action-id="292" data-menu-name="Intermédiaires de paiement">


                                <span class="oe_menu_text">
                                    Intermédiaires de paiement
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=201&amp;action=293" class="oe_menu_leaf" data-menu="201" data-action-model="ir.actions.act_window" data-action-id="293" data-menu-name="Transactions de paiement">


                                <span class="oe_menu_text">
                                    Transactions de paiement
                                </span>

                        </a>

                                    </li>












                                            </ul>

                                    </li>






                                </ul>

                                <ul style="display: none" class="oe_secondary_menu nav navbar-nav" data-menu-parent="5">
                                    <li class="app-name">
                                        <span class="oe_menu_text">
                                            Applications
                                        </span>
                                    </li>
                                    <li>




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=52&amp;action=37" class="oe_menu_leaf" data-menu="52" data-action-model="ir.actions.act_window" data-action-id="37" data-menu-name="Applications">


                                <span class="oe_menu_text">
                                    Applications
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=54&amp;action=39" class="oe_menu_leaf" data-menu="54" data-action-model="ir.actions.client" data-action-id="39" data-menu-name="Mises à jour">


                                <span class="oe_menu_text">
                                    Mises à jour
                                </span>

                        </a>

                                    </li>





                                </ul>

                                <ul style="display: none" class="oe_secondary_menu nav navbar-nav" data-menu-parent="4">
                                    <li class="app-name">
                                        <span class="oe_menu_text">
                                            Configuration
                                        </span>
                                    </li>
                                    <li>




                                    </li><li>


                        <a href="http://localhost:6069/web#menu_id=69&amp;action=76" class="oe_menu_leaf" data-menu="69" data-action-model="ir.actions.client" data-action-id="76" data-menu-name="Tableau de bord">


                                <span class="oe_menu_text">
                                    Tableau de bord
                                </span>

                        </a>

                                    </li>



                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Utilisateurs
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=65&amp;action=71" class="oe_menu_leaf" data-menu="65" data-action-model="ir.actions.act_window" data-action-id="71" data-menu-name="Utilisateurs">


                                <span class="oe_menu_text">
                                    Utilisateurs
                                </span>

                        </a>

                                    </li>




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=61&amp;action=51" class="oe_menu_leaf" data-menu="61" data-action-model="ir.actions.act_window" data-action-id="51" data-menu-name="Sociétés">


                                <span class="oe_menu_text">
                                    Sociétés
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>





                                    <li>


                        <a href="http://localhost:6069/web#menu_id=71&amp;action=82" class="oe_menu_leaf" data-menu="71" data-action-model="ir.actions.act_window" data-action-id="82" data-menu-name="Paramètres généraux">


                                <span class="oe_menu_text">
                                    Paramètres généraux
                                </span>

                        </a>

                                    </li>



                                    <li class="">


                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Traductions
                                                <span class="caret"></span>
                                             </a>
                                            <ul class="dropdown-menu oe_secondary_submenu dropdown-scrollable">




                                    <li>


                        <a href="http://localhost:6069/web#menu_id=56&amp;action=42" class="oe_menu_leaf" data-menu="56" data-action-model="ir.actions.act_window" data-action-id="42" data-menu-name="Charger une traduction">


                                <span class="oe_menu_text">
                                    Charger une traduction
                                </span>

                        </a>

                                    </li>




                                            </ul>

                                    </li>






                                </ul>


                        </div>
                        <div class="o_sub_menu_footer">
                            Powered by <a href="http://www.itom.ma/" target="_blank"><span>ITOM</span></a>
                        </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav navbar-nav navbar-right navbar-systray o_menu_systray">
                                        <ul class="nav navbar-nav navbar-right navbar-systray-item oe_user_menu_placeholder"><li class="o_user_menu">
                        <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="http://localhost:6069/web#">
                            <img class="img-circle oe_topbar_avatar" src="./Mopro_files/image">
                            <span class="oe_topbar_name">Administrator</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a data-menu="profile" href="http://localhost:6069/web#">Profile</a></li>
                            <li><a data-menu="password" href="http://localhost:6069/web#">Changer le mot de passe</a></li>
                            <li><a data-menu="settings" href="http://localhost:6069/web#">Préférences</a></li>
                            <li class="divider"></li>
                            <li><a data-menu="doc" href="http://localhost:6069/web#">Documentation</a></li>
                            <li><a data-menu="support1" href="http://localhost:6069/web#">Assistance</a></li>
                            <li><a data-menu="compte" href="http://localhost:6069/web#"> À propos</a></li>
                            <li class="divider"></li>
                            <li><a data-menu="logout1" href="http://localhost:6069/web#">Déconnecter</a></li>
                        </ul>
                    </li></ul>
                                        <ul class="nav navbar-nav navbar-right navbar-systray-item oe_systray"><li class="o_planner_systray hidden-xs">
                            <div class="progress" data-original-title="" title=""><div class="progress-bar"></div></div>
                        </li></ul>
                                    </div>
                                </nav>

            </header>
        <div class="o_main">
                <div id="app-sidebar" class="app-sidebar-panel colapsed">
                <div class="app-sidebar navbar-collapse collapse">
                    <ul id="sidebar" class="app-sidebar-menu">
                        <li class="nav-item">

                            <a href="http://localhost:6069/web#menu_id=130&amp;action=" class="nav-link nav-toggle" data-menu="130" data-menu-xmlid="sales_team.menu_base_partner" esc="Ventes">
                                <img class="nav-item-icon" alt="Tes image 2" src="./Mopro_files/icon.png">
                                <span class="nav-item-text">Ventes</span>
                            </a>
                        </li><li class="nav-item">

                            <a href="http://localhost:6069/web#menu_id=227&amp;action=" class="nav-link nav-toggle" data-menu="227" esc="Achats">
                                <img class="nav-item-icon" alt="Tes image 2" src="./Mopro_files/icon.png">
                                <span class="nav-item-text">Achats</span>
                            </a>
                        </li><li class="nav-item">

                            <a href="http://localhost:6069/web#menu_id=86&amp;action=" class="nav-link nav-toggle" data-menu="86" esc="Inventaire">
                                <img class="nav-item-icon" alt="Tes image 2" src="./Mopro_files/icon.png">
                                <span class="nav-item-text">Inventaire</span>
                            </a>
                        </li><li class="nav-item">

                            <a href="http://localhost:6069/web#menu_id=147&amp;action=" class="nav-link nav-toggle" data-menu="147" data-menu-xmlid="account.menu_finance" esc="Comptabilité">
                                <img class="nav-item-icon" alt="Tes image 2" src="./Mopro_files/icon.png">
                                <span class="nav-item-text">Comptabilité</span>
                            </a>
                        </li><li class="nav-item">

                            <a href="http://localhost:6069/web#menu_id=5&amp;action=" class="nav-link nav-toggle" data-menu="5" esc="Applications">
                                <img class="nav-item-icon" alt="Tes image 2" src="./Mopro_files/icon.png">
                                <span class="nav-item-text">Applications</span>
                            </a>
                        </li><li class="nav-item">

                            <a href="http://localhost:6069/web#menu_id=4&amp;action=" class="nav-link nav-toggle" data-menu="4" data-menu-xmlid="base.menu_administration" esc="Configuration">
                                <img class="nav-item-icon" alt="Tes image 2" src="./Mopro_files/icon.png">
                                <span class="nav-item-text">Configuration</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="o_main_content navbar-colapsed"><div class="o_control_panel o_breadcrumb_full">
        <ol class="breadcrumb"><li class="active">Tableau de bord</li></ol>
        <div class="o_cp_searchview" style="display: none;"><div class="o_searchview o_hidden">
    <span class="o_searchview_more fa fa-search-minus" title="Recherche avancée..."></span>
<ul class="dropdown-menu o_searchview_autocomplete" role="menu"></ul><input class="o_searchview_input" placeholder="Recherche…" type="text"></div></div>
        <div class="o_cp_left">
            <div class="o_cp_buttons"></div>
            <div class="o_cp_sidebar"></div>
        </div>
        <div class="o_cp_right">
            <div class="btn-group o_search_options" style="display: none;"><div class="btn-group o_dropdown">
    <button class="o_dropdown_toggler_btn btn btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fa fa-filter"></span> Filtres <span class="caret"></span>
    </button>
    <ul class="dropdown-menu o_filters_menu" role="menu">
        <li data-index="0">
        <a href="http://localhost:6069/web#">My Salesteams</a>
    </li><li class="divider"></li><li data-index="0">
        <a href="http://localhost:6069/web#">Archived</a>
    </li><li class="divider"></li><li class="o_add_filter o_closed_menu">
            <a href="http://localhost:6069/web#">Ajouter un filtre personnalisé</a>
        </li>
        <li class="o_add_filter_menu">
            <button class="btn btn-primary btn-sm o_apply_filter" type="button">Appliquer</button>
            <button class="btn btn-default btn-sm o_add_condition" type="button"><span class="fa fa-plus-circle"></span> Ajouter une condition</button>
        </li>
    </ul>
</div><div class="btn-group hidden-xs o_dropdown">
    <button class="o_dropdown_toggler_btn btn btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fa fa-bars"></span> Grouper par <span class="caret"></span>
    </button>
    <ul class="dropdown-menu o_group_by_menu" role="menu">
        <li data-index="0">
        <a href="http://localhost:6069/web#">Team Leader</a>
    </li><li class="divider" style="display: list-item;"></li>
        <li class="o_add_custom_group o_closed_menu">
            <a href="http://localhost:6069/web#">Ajouter un groupe personnalisé</a>
        </li>
    </ul>
</div><div class="btn-group o_dropdown">
    <button class="o_dropdown_toggler_btn btn btn-sm dropdown-toggle" data-toggle="dropdown">
        <span class="fa fa-star"></span> Favoris <span class="caret"></span>
    </button>
    <ul class="dropdown-menu o_favorites_menu" role="menu">
        <li class="divider"></li>
        <li class="o_save_search o_closed_menu">
            <a href="http://localhost:6069/web#">Enregistrer la recherche actuelle</a>
        </li>
        <li class="o_save_name">
            <input type="text">
        </li>
        <li class="o_save_name">
            <span><div class="o_checkbox"><input type="checkbox"><span></span></div> Utiliser par défaut</span>
        </li>
        <li class="o_save_name">
            <span><div class="o_checkbox"><input type="checkbox"><span></span></div> Partager avec tous les utilisateurs </span><span class="fa fa-users"></span>
        </li>
        <li class="o_save_name">
            <button class="btn btn-primary btn-sm" type="button">Sauvegarder</button>
        </li>
    </ul>
</div></div>
            <div class="o_cp_pager"><div>
    <span class="o_pager_value">1-2</span> / <span class="o_pager_limit">2</span>
    <span class="btn-group btn-group-sm">





        <button class="fa fa-chevron-left btn btn-icon o_pager_previous" type="button" accesskey="p" disabled=""></button>
        <button class="fa fa-chevron-right btn btn-icon o_pager_next" type="button" accesskey="n" disabled=""></button>
    </span>
</div></div>
            <div class="btn-group btn-group-sm o_cp_switch_buttons"></div>
        </div>
    </div><div class="o_content"><div class="o_view_manager_content"><div class="o_kanban_view oe_background_grey o_kanban_dashboard o_salesteam_kanban o_cannot_create o_kanban_ungrouped" style="display: flex;"><div class="oe_kanban_color_0 o_kanban_record">
                            <div class="o_kanban_card_header">
                                <div class="o_kanban_card_header_title">
                                    <div class="o_primary">Vente directe</div>
                                </div>
                                <div class="o_kanban_manage_button_section">
                                    <a class="o_kanban_manage_toggle_button" href="http://localhost:6069/web#">More <i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                            <div class="container o_kanban_card_content o_visible">
                                <div class="row">
                                    <div class="col-xs-6 o_kanban_primary_left" name="to_replace_in_sale_crm">
                                    <button class="btn btn-primary oe_kanban_action oe_kanban_action_button" data-name="306" data-type="action" type="button">Quotations</button>
            </div>
                                    <div class="col-xs-6 o_kanban_primary_right">

            </div><div class="col-xs-12 o_kanban_primary_bottom text-center">
                    <a href="http://localhost:6069/web#" class="sales_team_target_definition o_inline_link">Click to define a team target</a>
                </div>


                                </div>
                            </div><div class="container o_kanban_card_manage_pane o_invisible">
                                <div class="row">
                                    <div class="col-xs-4 o_kanban_card_manage_section o_kanban_manage_view">
                                        <div class="o_kanban_card_manage_title">
                                            <span>View</span>
                                        </div>

                    <div>
                        <a class="o_quotation_view_button oe_kanban_action oe_kanban_action_a" data-name="306" data-type="action" href="http://localhost:6069/web#">Quotations</a>
                    </div>
                    <div>
                        <a data-name="304" data-type="action" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">Sales Orders</a>
                    </div>


            </div>
                                    <div class="col-xs-4 o_kanban_card_manage_section o_kanban_manage_new">
                                        <div class="o_kanban_card_manage_title">
                                            <span>New</span>
                                        </div>
                                    <div>
                    <a data-name="311" data-type="action" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">
                        Quotation
                    </a>
                </div>
            </div>
                                    <div class="col-xs-4 o_kanban_card_manage_section o_kanban_manage_reports">
                                        <div class="o_kanban_card_manage_title">
                                            <span>Reports</span>
                                        </div>

                    <div>
                        <a data-name="308" data-type="action" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">
                            Quotation
                        </a>
                    </div>
                    <div>
                        <a data-name="309" data-type="action" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">
                            Sales
                        </a>
                    </div>


            </div>
                                </div>

                                <div class="o_kanban_card_manage_settings row">
                                    <div class="col-xs-8">
                                        <ul class="oe_kanban_colorpicker" data-field="color">
    <li>
        <a href="http://localhost:6069/web#" data-color="0" class="oe_kanban_color_0"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="1" class="oe_kanban_color_1"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="2" class="oe_kanban_color_2"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="3" class="oe_kanban_color_3"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="4" class="oe_kanban_color_4"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="5" class="oe_kanban_color_5"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="6" class="oe_kanban_color_6"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="7" class="oe_kanban_color_7"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="8" class="oe_kanban_color_8"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="9" class="oe_kanban_color_9"></a>
    </li>
</ul>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <a data-type="edit" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="oe_kanban_color_0 o_kanban_record">
                            <div class="o_kanban_card_header">
                                <div class="o_kanban_card_header_title">
                                    <div class="o_primary">Ventes en ligne</div>
                                </div>
                                <div class="o_kanban_manage_button_section">
                                    <a class="o_kanban_manage_toggle_button" href="http://localhost:6069/web#">More <i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                            <div class="container o_kanban_card_content o_visible">
                                <div class="row">
                                    <div class="col-xs-6 o_kanban_primary_left" name="to_replace_in_sale_crm">
                                    <button class="btn btn-primary oe_kanban_action oe_kanban_action_button" data-name="306" data-type="action" type="button">Quotations</button>
            </div>
                                    <div class="col-xs-6 o_kanban_primary_right">

            </div><div class="col-xs-12 o_kanban_primary_bottom text-center">
                    <a href="http://localhost:6069/web#" class="sales_team_target_definition o_inline_link">Click to define a team target</a>
                </div>


                                </div>
                            </div><div class="container o_kanban_card_manage_pane o_invisible">
                                <div class="row">
                                    <div class="col-xs-4 o_kanban_card_manage_section o_kanban_manage_view">
                                        <div class="o_kanban_card_manage_title">
                                            <span>View</span>
                                        </div>

                    <div>
                        <a class="o_quotation_view_button oe_kanban_action oe_kanban_action_a" data-name="306" data-type="action" href="http://localhost:6069/web#">Quotations</a>
                    </div>
                    <div>
                        <a data-name="304" data-type="action" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">Sales Orders</a>
                    </div>


            </div>
                                    <div class="col-xs-4 o_kanban_card_manage_section o_kanban_manage_new">
                                        <div class="o_kanban_card_manage_title">
                                            <span>New</span>
                                        </div>
                                    <div>
                    <a data-name="311" data-type="action" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">
                        Quotation
                    </a>
                </div>
            </div>
                                    <div class="col-xs-4 o_kanban_card_manage_section o_kanban_manage_reports">
                                        <div class="o_kanban_card_manage_title">
                                            <span>Reports</span>
                                        </div>

                    <div>
                        <a data-name="308" data-type="action" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">
                            Quotation
                        </a>
                    </div>
                    <div>
                        <a data-name="309" data-type="action" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">
                            Sales
                        </a>
                    </div>


            </div>
                                </div>

                                <div class="o_kanban_card_manage_settings row">
                                    <div class="col-xs-8">
                                        <ul class="oe_kanban_colorpicker" data-field="color">
    <li>
        <a href="http://localhost:6069/web#" data-color="0" class="oe_kanban_color_0"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="1" class="oe_kanban_color_1"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="2" class="oe_kanban_color_2"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="3" class="oe_kanban_color_3"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="4" class="oe_kanban_color_4"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="5" class="oe_kanban_color_5"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="6" class="oe_kanban_color_6"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="7" class="oe_kanban_color_7"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="8" class="oe_kanban_color_8"></a>
    </li><li>
        <a href="http://localhost:6069/web#" data-color="9" class="oe_kanban_color_9"></a>
    </li>
</ul>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <a data-type="edit" href="http://localhost:6069/web#" class=" oe_kanban_action oe_kanban_action_a">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="o_kanban_record o_kanban_ghost"></div><div class="o_kanban_record o_kanban_ghost"></div><div class="o_kanban_record o_kanban_ghost"></div><div class="o_kanban_record o_kanban_ghost"></div><div class="o_kanban_record o_kanban_ghost"></div><div class="o_kanban_record o_kanban_ghost"></div></div></div></div></div>
            </div>




    <div class="o_notification_manager"></div><div class="o_loading" style="display: none;">Chargement</div></body>

<script type="text/javascript" src="<?= json_path('main.js') ?>"></script>
    </html>
