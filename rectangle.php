<?php
/**
 * Created by PhpStorm.
 * User: _comGoon
 * Date: 10/28/18
 * Time: 2:31 AM
 */

include_once 'forme.php';

class rectangle extends forme
{

    private $long;
    private $larg;


    public function formeObj(){
        echo "je suis un rectangle <br>";
        echo "j\'ai " . $this->getNbrCote() . " cotés<br>";
        echo "Mon air est: " . $this->getLong() . " * " . $this->getLarg() . " = " . $this->getLong() * $this->getLarg() ;
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

    /**
     * @return mixed
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long): void
    {
        $this->long = $long;
    }

    /**
     * @return mixed
     */
    public function getLarg()
    {
        return $this->larg;
    }

    /**
     * @param mixed $larg
     */
    public function setLarg($larg): void
    {
        $this->larg = $larg;
    }




}