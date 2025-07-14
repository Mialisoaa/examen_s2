<?php
include("../../INC/fonction.php");
if (empty($_POST["retour"]) && $_POST["retour"]=='true') {
    retour($_POST['etat']);
}