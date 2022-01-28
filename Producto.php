<?php
class Producto{
    private int $id;
    private string $nombre;
    private int $unidades;
    private float $precio;
    private float $iva=1.21;

    public function __construct(int $id,string $nombre, int $unidades, float $precio){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->uniades=$unidades;
        $this->precio=$precio;
    }

    public function setId(int $id):void{
        $this->id=$id;
    }
    public function setNombre(string $nombre):void{
        $this->nombre=$nombre;
    }
    public function setPedidos(int $unidades):void{
        $this->unidades=$unidades;
    }
    public function setPrecio(float $precio):void{
        $this->precio=$precio;
    }


    public function getId():int{
        return $this->id;
    }
    public function getNombre():string{
        return $this->nombre;
    }
    public function getUnidades():int{
        return $this->unidades;
    }
    public function getPrecio():float{
        return $this->precio;
    }
    public function getIva():float{
        return $this->iva;
    }

    public function total(int $unidades, float $precio, float $iva):float{
    $total = $this->unidades*$this->precio*$this->iva;
    echo "El total es " .$total;
    }
}
