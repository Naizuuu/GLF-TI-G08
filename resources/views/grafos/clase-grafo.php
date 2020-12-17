<?php
function dijkstra ($graphs, $source, $target) {
    $vertices = [];
    $neighbours = [];
    $path = [];
    
    foreach ($graphs as $edge) {
        array_push($vertices, $edge[0], $edge[1]);
        $neighbours[$edge[0]][] = ['endEdge' => $edge[1], 'cost' => $edge[2]];
    }
    
    $vertices = array_unique($vertices);
    
    foreach($vertices as $vertex) {
        $dist[$vertex]= INF;
        $previous[$vertex] = NULL;
    }
    
    $dist[$source] = 0;
    $g = $vertices;
    while(count($g) > 0) {
        $min = INF;
        foreach($g as $vertex){
            if($dist[$vertex] < $min){
                $min = $dist[$vertex];
                $u = $vertex;
            }
        }
        
        $g = array_diff($g, array($u));
        if($dist[$u] == INF or $u == $target){
            break;
        }
        
        if(isset($neighbours[$u])){
            foreach($neighbours[$u] as $arr){
                $alt = $dist[$u] + $arr["cost"];
                if($alt < $dist[$arr["endEdge"]]){
                    $dist[$arr["endEdge"]] = $alt;
                    $previous[$arr["endEdge"]] = $u;
                }
            }
        }
    }
    
    $u = $target;
    while(isset($previous[$u])) {
        array_unshift($path, $u);
        $u = $previous[$u];
    }
    array_unshift($path, $u);
    return $path;
}