<?php

abstract class Persona{
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
        return $this;
    }
    public function __construct($dni, $nombre, $correo, $celular){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->celular = $celular;
    }
}

class Alumno extends Persona{
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;

    public function __construct($dni, $nombre, $correo, $celular, $fechaNac){
        parent::__construct($dni, $nombre, $correo, $celular);
        $this->fechaNac = $fechaNac;
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
        return $this;
    }
    public function setFichaMedica($peso, $altura, $aptoFisico){
        $this->peso = $peso;
        $this->altura = $altura;
        $this->aptoFisico = $aptoFisico;
    }
}

class Entrenador extends Persona{
    private $aClase;

    public function __construct($dni, $nombre, $correo, $celular){
        parent::__construct($dni, $nombre, $correo, $celular);
        $this->aClase = array();
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

class Clase{
    private $nombre;
    private $entrenador;
    private $aAlumnos;

    public function __construct(){
        $this->aAlumnos = array();
    }
    
    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
        return $this;
    }


    public function asignarEntrenador($entrenador){
        $this->entrenador = $entrenador;
    }

    public function inscribirAlumno($alumno){
        $this->aAlumnos[] = $alumno;
    }

    public function imprimirListado(){
        echo "<table class='table table-hover'>";
        echo "<tr><th colspan='2' class='text-center'>Datos de la Clase</th>";
        echo "<tr><td>Clase de: </td><td><b>" . $this->nombre . "</b></td></tr>";
        echo "<tr><td>Entrenador a cargo:</td><td>" . $this->entrenador->nombre . "</td></tr>";
        echo "<tr><td colspan='2'>Asistentes:</td>";
        foreach ($this->aAlumnos as $alumno) {
            echo "<tr><td colspan='2' class='text-right'>" . $alumno->nombre . "</td>";
        }
        echo "</table>";
    }
}

$entrenador1 = new Entrenador("34987789", "Miguel Ocampo", "miguel@mail.com", "11678634");
$entrenador2 = new Entrenador("28987589", "Andrea Zarate", "andrea@mail.com", "11768654");

$alumno1 = new Alumno("40787657", "Dante Montera", "dante@mail.com", "1145632457", "1997-08-28");
$alumno1->setFichaMedica("90", "178", "1");
$alumno1->presentismo = 78;

$alumno2 = new Alumno("46766547", "Darío Turchi", "dante@mail.com", "1145632457", "1986-11-21");
$alumno2->setFichaMedica("73", "1.68", "0");
$alumno2->presentismo = 68;

$alumno3 = new Alumno("39765454", "Facundo Fagnano", "facundo@mail.com", "1145632457", "1993-02-06");
$alumno3->setFichaMedica("90", "1.87", "1");
$alumno3->presentismo = 88;

$alumno4 = new Alumno("41687536", "Gastón Aguilar", "gaston@mail.com", "1145632457", "1999-11-02");
$alumno4->setFichaMedica("70", "1.69", "0");
$alumno4->presentismo = 98;

$clase1 = new Clase();
$clase1->nombre = "Funcional";
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);

$clase2 = new Clase();
$clase2->nombre = "Zumba";
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);

?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php $clase1->imprimirListado(); ?>
                <br>
                <?php $clase2->imprimirListado(); ?>
            </div>
        </div>
    </div>
</body>

</html>