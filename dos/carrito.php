<?php

class Cliente
{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;

    public function __construct()
    {
        $this->descuento = 0.0;
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
    public function imprimir()
    {
        echo "<b>Datos del Cliente:</b><br>";
        echo "D.N.I.: $this->dni <br>";
        echo "Nombre: $this->nombre <br>";
        echo "Correo: $this->correo <br>";
        echo "Teléfono: $this->telefono <br>";
        echo "Descuento: $this->descuento <br>";
    }
}

class Carrito
{

    private $cliente;
    private $aProductos;
    private $subtotal;
    private $total;

    public function __construct()
    {
        $this->aProductos = array();
        $this->subtotal = 0.0;
        $this->total = 0.0;
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
        return $this;
    }
    public function imprimir(){
        echo "<table class='table table-hover'>";
        echo "<tr><th>Mercado de todo</th>";
        echo "<tr><td>Fecha</td><td> " . date("d/m/Y") . "</td></tr>";
        echo "<tr><td>D.N.I.:</td><td>" . $this->cliente->dni . "</td></tr>";
        echo "<tr><td>Cliente:</td><td><b>" . $this->cliente->nombre . "</b></tr></td>";
        echo "<tr><td>Productos:</td><td> </td></tr>";   
        foreach ($this->aProductos as $producto) {
            echo "<tr><td>" . $producto->nombre . "</td><td>$ " . number_format($producto->precio, 2, ".", ",") . "</tr></td>";
            $this->subtotal+=$producto->precio;
            $this->total+=($producto->precio / $producto->iva) + $producto->precio;
        }
        echo "<tr><td>Subtotal:</td><td>$" . number_format($this->subtotal, 2, ".", ",") .  "</td>";
        echo "<tr><td><b>TOTAL:</td><td>$" . number_format($this->total, 2, ".", ",") . "</td>";
        echo "</table>";
    }

    public function cargarProducto($producto)
    {
        $this->aProductos[] = $producto;
    }
}

class Producto
{

    private $cod;
    private $nombre;
    private $precio;
    private $descripcion;
    private $iva;

    public function __construct()
    {
        $this->precio = 0.0;
        $this->iva = 0.21;
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
    public function imprimir()
    {
        echo "<br><b>Datos del Producto:</b><br>";
        echo "Cliente: $this->cod <br>";
        echo "Producto: $this->nombre <br>";
        echo "Subtotal: $this->precio <br>";
        echo "Descripción $this->descripcion <br>";
        echo "Iva:" . $this->iva . "<br>";
    }
}

$cliente1 = new Cliente();
$cliente1->dni = "34765456";
$cliente1->nombre = "Bernabé";
$cliente1->correo = "bernabe@gmail.com";
$cliente1->telefono = "+541188598686";
$cliente1->descuento = 0.05;
//$cliente1->imprimir();

$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 1.105;
//$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera Whirlpool";
$producto2->descripcion = "Esta es una heladera no froze";
$producto2->precio = 76000;
$producto2->iva = 1.21;
//$producto2->imprimir();


$carrito = new Carrito();
$carrito->cliente = $cliente1;
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);



?>
<!DOCTYPE html>
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
            <div class="col-6">
                <?php $carrito->imprimir() ?>
            </div>
        </div>
    </div>
</body>

</html>