<?php
/**
 * Created by PhpStorm.
 * User: _comGoon
 * Date: 10/28/18
 * Time: 2:31 AM
 */

include_once 'forme.php';

class triangle extends forme
{
    private $cote1;
    private $cote2;
    private $cote3;

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
    public function getCote1()
    {
        return $this->cote1;
    }

    /**
     * @param mixed $cote1
     */
    public function setCote1($cote1): void
    {
        $this->cote1 = $cote1;
    }

    /**
     * @return mixed
     */
    public function getCote2()
    {
        return $this->cote2;
    }

    /**
     * @param mixed $cote2
     */
    public function setCote2($cote2): void
    {
        $this->cote2 = $cote2;
    }

    /**
     * @return mixed
     */
    public function getCote3()
    {
        return $this->cote3;
    }

    /**
     * @param mixed $cote3
     */
    public function setCote3($cote3): void
    {
        $this->cote3 = $cote3;
    }


    public function formeObj(){
        echo "je suis un triangle <br>";
        echo "j\'ai " . $this->getNbrCote() . "<br>";
        echo "Mon air est: " . $this->getCote1() . " * " . $this->getCote2() . " * " . $this->getCote3() . " = " . $this->getCote1() * $this->getCote2() * $this->getCote3();
    }
}