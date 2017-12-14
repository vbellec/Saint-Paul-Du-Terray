<?php

namespace stpaul\Domain;


class Sejour {
    private $SEJNO;
    private $SEJINTITULE;
    private $SEJMONTANTMBI;
    private $SEJDTEDEB;
    private $SEJDUREE;
    
    public function getSEJNO() {
        return $this->SEJNO;
    }

    public function setSEJNO($val) {
        $this->SEJNO = $val;
        return $this;
    }

    public function getSEJINTITULE() {
        return $this->SEJINTITULE;
    }

    public function setSEJINTITULE($val) {
        $this->SEJINTITULE = $val;
        return $this;
    }

    public function getSEJMONTANTMBI() {
        return $this->SEJMONTANTMBI;
    }

    public function setSEJMONTANTMBI($val) {
        $this->SEJMONTANTMBI = $val;
        return $this;
    }

    public function getSEJDTEDEB() {
        return $this->SEJDTEDEB;
    }

    public function setSEJDTEDEB($val) {
        $this->SEJDTEDEB = $val;
        return $this;
    }

    public function getSEJDUREE() {
        return $this->SEJDUREE;
    }

    public function setSEJDUREE($val) {
        $this->SEJDUREE = $val;
        return $this;
    }
}

