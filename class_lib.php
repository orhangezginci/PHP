<?php

// Show all information, defaults to INFO_ALL
class Stoff {
    var $name;
    var $artNr;
    var $farbe;
    var $link;
    var $preis;
    var $preisX;
    var $preisL;
    var $preisC;
    var $breite;
    var $lieferzeit;
    var $lieferbar;
    var $imageUrl;
    function __construct($_name,$_artNr,$_farbe,$_link,
    $_preis,$_preisX,$_preisXXV,$_preisL,$_preisC,$_breite,
    $_lieferzeit,$_lieferbar,$_imageUrl) 
    {		
        $this->name = $_name;
        $this->artNr= $_artNr;
        $this->farbe = $_farbe;
        $this->link = $_link;
        $this->preis = $_preis;
        $this->preisX = $_preisX;
        $this->preisXXV = $_preisXXV;
        $this->preisL = $_preisL;
        $this->preisC= $_preisC;
        $this->breite = $_breite;
        $this->lieferzeit = $_lieferzeit;	
        $this->lieferbar = $_lieferbar;
        $this->imageUrl = $_imageUrl;
    }	
    function setName($_name) {
        $this->name = $_name;
    }
    function getName() {return $this->name;}
    
    function SetArtNr($_artNr) {
        $this->artNr = $_artNr;
    }
    function getArtNr() {return $this->artNr;}

    function SetFarbe($_farbe) {
        $this->farbe = $_farbe;
    }
    function getFarbe() {return $this->farbe;}

    function setLink($_link) {
        $this->link = $_link;
    }
    function getLink() {return $this->link;}

    function setPreis($_preis) {
        $this->preis = $_preis;
    }
    function getPreis() {return $this->preis;}

    function setPreisX($_preisX) {
        $this->preisX = $_preisX;
    }
    function getPreisX() {return $this->preisX;}

    function setPreisXXV($_preisXXV) {
        $this->preisXXV = $_preisXXV;
    }
    function getPreisXXV() {return $this->preisXXV;}

    function setPreisL($preisL) {
        $this->preisXXV = $_preisL;
    }
    function getPreisL() {return $this->preisL;}

    function setPreisC($_preisC) {
        $this->preisC = $_preisC;
    }
    function setBreite($_breite) {
        $this->breite = $_breite;
    }
    function getBreite() {return $this->breite;}
    
    function setLieferzeit($_lieferzeit) {
        $this->lieferzeit= $_lieferzeit;
    }
    function getLieferzeit(){return $this->lieferzeit;}
    
    function setlieferbar($_lieferbar) {
        $this->lieferbar= $_lieferbar;
    }
    function isLieferbar(){return $this->lieferbar;}

    function setImageUrl($_imageUrl) {
        $this->imageUrl = $_imageUrl;
    }

}

?>