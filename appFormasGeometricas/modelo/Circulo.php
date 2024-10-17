<?php
    require_once("IFormasGeometricas.php");
 class Circulo implements IFormasGeometricas{
    private float $raio;
    
    public function getArea() {

        $area = 3.14 * $this->raio * $this->raio; 
        return $area;
    }

    public function getDesenho() {
        $desenho = "";
        $raio = $this->raio;
    
        for ($y = -$raio; $y <= $raio; $y += 0.5) {
            for ($x = -$raio; $x <= $raio; $x += 0.5) {
                if (sqrt($x * $x + $y * $y) <= $raio) {
                    $desenho .= ".";
                } else {
                    $desenho .= " ";
                }
            }
            $desenho .= "\n";
        }
        return $desenho;
    }

    /**
     * Get the value of raio
     */
    public function getRaio(): float
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio(float $raio): self
    {
        $this->raio = $raio;

        return $this;
    }

    
 }