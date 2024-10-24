<?php

require_once("IFormasGeometricas.php");

class Quadrado implements IFormasGeometricas
{
    private int $altura;
    private int $base;
    public function getArea()
    {
        $area = $this->altura * $this->base;
        return $area;
    }
    public function getDesenho()
    {
        $desenho = "";
        for ($i = 0; $i < $this->altura; $i++) {
            for ($j = 0; $j < $this->base; $j++) {
                $desenho .= ".";
            }
            $desenho .= "\n";
        }
        return $desenho;
    }


    /**
     * Get the value of altura
     */
    public function getAltura(): int
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of base
     */
    public function getBase(): int
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase(int $base): self
    {
        $this->base = $base;

        return $this;
    }
}
