<?php


class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function __construct(){
        echo "Instancia de la clase persona<br>";
    }

    function __destruct()
    {
        print "<br>Destruyendo el objeto " . $this->nombre . "<br>";
    }

    function setDni($dni){ $this->dni = $dni;}
    function getDni(){return $dni;}

    function setNombre($nombre){ $this->nombre = $nombre;}
    function getNombre(){return $nombre;}

    function setEdad($edad){ $this->edad = $edad;}
    function getEdad(){return $edad;}

    function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad;}
    function getNacionalidad(){return $nacionalidad;}

    public function imprimir(){
        echo "Datos de la persona <br>";
        echo "D.N.I.: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
    }
    
}

class Alumno extends Persona{
    private $legajo;
    private $notaPortfolio;
    private $notaPhp; 
    private $notaProyecto;
    
    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }
    public function imprimir(){
        echo "<br>Datos del alumno <br>";
        echo "D.N.I.: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Legajo: " . $this->legajo . ";<br>";
        echo "Nota del Portfolio: " . $this->notaPortfolio . ";<br>";
        echo "Nota PHP: " . $this->notaPhp . ";<br>";
        echo "Nota del Proyecto: " . $this->notaProyecto . ";<br>";
        echo "Promedio: " . $this->promediar() . "<br>";
    }

    public function promediar(){
        $suma = $this->notaPortfolio + $this->notaPhp + $this->notaProyecto;
        return ($suma/3);
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
        return $this;
    }

    
}


class Docente extends Persona{
    private $especialidad;
    const ESPECIALIDAD_WP = "Wordprees";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";

    public function __construct($nom1, $esp){
        $this->nombre = $nom1;
        $this->especialidad = $esp;
    }

    public function imprimir(){
        echo "<br>El docente $this->nombre tiene la especialidad $this->especialidad <br>";
    }

    public function imrpirmirEspecialidadesHabilitadas(){
        echo "<br>Las especialidades disponibles son:<br>";
        echo self::ESPECIALIDAD_WP . "<br>";
        echo self::ESPECIALIDAD_ECO . "<br>";
        echo self::ESPECIALIDAD_BBDD . "<br>";
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
        return $this;
    }


}

$persona1 = new Persona();
$persona1->setDni("33300012");
$persona1->setNombre("Nelson Daniel Tarche");
echo $persona1->getNombre() . "<br>";
$persona1->imprimir();



$alumno = new Alumno();
$alumno->legajo = "M38191145";
$alumno->notaPortfolio = 9;
$alumno->notaPhp = 8;
$alumno->notaProyecto = 9;
$alumno->imprimir();

//$docente = new Docente();
//$docente->nombre = "Ana Valle";
//$docente->especialidad = Docente::ESPECIALIDAD_ECO;
//$docente->imprimir();
//$docente->imrpirmirEspecialidadesHabilitadas();

$docente1 = new Docente("Araceli Múñoz", Docente::ESPECIALIDAD_WP);
$docente1->imprimir();
$docente1->imrpirmirEspecialidadesHabilitadas();
?>