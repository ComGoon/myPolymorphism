<?php
/**
 * Created by PhpStorm.
 * User: _comGoon
 * Date: 10/28/18
 * Time: 2:31 AM
 */

class forme{

    protected $nbrCote;

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

    public function formeObj(){
        echo "Je ne suis peut etre pas une figure :) <br> ";
    }
}