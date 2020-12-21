<?php
const END_EDGE = 'endEdge';
class Grafo
{
    public $grafo = [];
    public $cantidadDeCentros = 0;

    public function __construct($arreglo){
        foreach ($arreglo as $fila) {
            if ($fila[0] == "C") {
                $this->cantidadDeCentros++;
                $columnas = explode(";", $fila);
                $this->grafo[] = ["O", $columnas[0].$columnas[1], $this->distanciaEntreDosPuntos("0,0",$columnas[2])];
            }
        }
    }
    
    private function distanciaEntreDosPuntos ($punto1, $punto2) {
        $puntoA = explode(",", $punto1);
        $puntoB = explode(",", $punto2);
        return round(sqrt(($puntoA[0] - $puntoB[0])**2 + ($puntoA[1] - $puntoB[1])**2), 5);
    }
    
    public function dijkstra($source, $target)
    {
        $vertices = [];
        $neighbours = [];
        $path = [];
    
        foreach ($this->grafo as $edge) {
            array_push($vertices, $edge[0], $edge[1]);
            $neighbours[$edge[0]][] = [END_EDGE => $edge[1], 'cost' => $edge[2]];
        }
    
        $vertices = array_unique($vertices);
    
        foreach ($vertices as $vertex) {
            $dist[$vertex]= INF;
            $previous[$vertex] = null;
        }
    
        $dist[$source] = 0;
        $g = $vertices;
        while (count($g) > 0) {
            $min = INF;
            foreach ($g as $vertex) {
                if ($dist[$vertex] < $min) {
                    $min = $dist[$vertex];
                    $u = $vertex;
                }
            }
        
            $g = array_diff($g, array($u));
            if ($dist[$u] == INF || $u == $target) {
                break;
            }
        
            if (isset($neighbours[$u])) {
                foreach ($neighbours[$u] as $arr) {
                    $alt = $dist[$u] + $arr["cost"];
                    if ($alt < $dist[$arr[END_EDGE]]) {
                        $dist[$arr[END_EDGE]] = $alt;
                        $previous[$arr[END_EDGE]] = $u;
                    }
                }
            }
        }
    
        $u = $target;
        while (isset($previous[$u])) {
            array_unshift($path, $u);
            $u = $previous[$u];
        }
        array_unshift($path, $u);
        return $path;
    }
}
?>