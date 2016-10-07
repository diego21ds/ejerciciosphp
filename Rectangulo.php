<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Rectangulo.php</title>
</head><body>
<?php

class Rectangulo
{

    private $_base;
    private $_altura;

    public function __construct($base,$altura)
    {
        $this->_base=$base;
        $this->_altura=$altura;
    }



    public function perimetro($base, $altura)
    {
        return (($this->_base + $this->_altura) * 2);
    }

    public function superficie($base, $altura)
    {
        return ($this->_base * $this->_altura);    
    }


    /**
     * Gets the value of _base.
     *
     * @return mixed
     */
    public function getBase()
    {
        return $this->_base;
    }

    /**
     * Sets the value of _base.
     *
     * @param mixed $_base the base
     *
     * @return self
     */
    public function setBase($base)
    {
        $this->_base = $base;

        return $this;
    }

    /**
     * Gets the value of _altura.
     *
     * @return mixed
     */
    public function getAltura()
    {
        return $this->_altura;
    }

    /**
     * Sets the value of _altura.
     *
     * @param mixed $_altura the altura
     *
     * @return self
     */
    public function setAltura($altura)
    {
        $this->_altura = $altura;

        return $this;
    }
}


/*

Ejercicio7.php y Rectangulo.php

Crea una clase Rectangulo con dos atributos.
base y altura. Debe incluir los métodos:
- constructor
-perimetro
-superficie
-añade tambien los getters y setters
En el fichero Ejercicio7 debes crear un
ejemplar de la clase anterior y usar los
métodos disponibles. La variedad de pruebas

*/











?> 


</body></html>