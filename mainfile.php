<?php 
$prefixos = [
    'Cyber', 'Cloud', 'Quantum', 'Virtual', 'Crypto', 'AI', 'Logic', 'Code', 
    'Digital', 'Stream', 'Sys', 'Dev', 'Net', 'Web', 'Techie', 'Bit', 'Data', 
    'InfoTech', 'Smart', 'Auto', 'Nano', 'Mega', 'Ultra', 'Inter', 'Hyper', 
    'Geo', 'Omni', 'Meta', 'Alpha', 'Beta', 'Gamma', 'Delta'
];
  
  $elementos_foneticos = [
    'sync', 'max', 'tech', 'netic', 'gen', 'nex', 'cube', 'flow', 'grid', 
    'sphere', 'logic', 'matic', 'node', 'base', 'space', 'frame', 'band', 
    'cell', 'globe', 'drive', 'port', 'cast', 'graph', 'wave', 'form', 
    'craft', 'link', 'mesh', 'flex', 'pulse', 'vault', 'breeze'
  ];

function verificarNome(){

}
  function  gerar_nomes($qnt_nomes, $prefixos, $elementos_foneticos){
    $arquivo = 'nomesgerados.txt';
    $nomes_gerados = array();
    $handle = fopen($arquivo, 'w');

    

    while (count($nomes_gerados)< $qnt_nomes) 
    {
      $chaveAleatoria = array_rand($prefixos);
      $prefixo = $prefixos[$chaveAleatoria];
      $chaveAleatoria2 = array_rand($elementos_foneticos);
      $elemento_fonetico = $elementos_foneticos[$chaveAleatoria2];
      $nomes = "{$prefixo}{$elemento_fonetico}";
  
      
      $condicao = true;
      
      foreach($nomes_gerados as $i){
        if ($i == $nomes){
          $condicao = false;
        }
      }
      if($condicao){
        array_push($nomes_gerados, $nomes);
        fwrite($handle, "{$nomes}\n");
      }
    }
      return $nomes_gerados;
}
$nomes_gerados = [];
$nomes_gerados = gerar_nomes(200, $prefixos, $elementos_foneticos);

foreach ($nomes_gerados as $i  ){
  echo "{$i}\n";
  
}






?>