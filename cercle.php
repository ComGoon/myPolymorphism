<?php
/**
 * Created by PhpStorm.
 * User: _comGoon
 * Date: 10/28/18
 * Time: 2:31 AM
 */

include_once 'forme.php';

class cercle extends forme
{
    private $rayon;
    private const PI = 3.14;

    public function formeObj(){
        echo "je suis un cercle <br>";
        echo "j'ai " . $this->getNbrCote() . " coté<br>";
        echo "Mon air est: " . $this->getRayon() . " * " . self::PI . " * " . 2  . " = " . $this->getRayon() * self::PI * 2;
    }

    /**
     * @return mixed
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * @param mixed $rayon
     */
    public function setRayon($rayon): void
    {
        $this->rayon = $rayon;
    }


    /**
     * @return mixed
     */
    public function getNbrCote()
    {
        return $this->nbrCote;
    }

    /**
     * @param mixed $nbrCote
     */
    public function setNbrCote($nbrCote): void
    {
        $this->nbrCote = $nbrCote;
    }




}