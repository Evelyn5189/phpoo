<?php
require ("carro.php");
//Nome da classe
class Fruit{
  //Nome dos atributos
  public $nome; //public significa que qualquer outra classe pod ter acesso a essa vaiável
  public $cor;


//Aqui estão os métodos, que são praticamente funções
  function __construct($nome, $cor){
    $this->nome = $nome;
    $this->cor = $cor;
  }
  function set_name($nome){
    $this->nome = $nome;
  }
  function set_cor($cor){
    $this->cor = $cor;
  }
  function get_nome() {
    return $this->nome;
  }
  function get_cor() {
    return $this->cor;
  }
}

//$maca = new Fruit(); //Cria um novo objeto para a classe
$maca = new Fruit("maca_ifsp", "vermelha");
//$maca->ser_("maca_isfp", "vermelha");//Setinha serve para acessar o método desse objeto
//Atribuindo um nome para o meu objeto através do método set_name
//$maca->set_cor("cor = vermelha e verde");
//echo $maca->nome;
//echo $maca->nome;
//o comando abaico imprime se o atributo for public
//o comando abaixo imprime se o atributo for public ou private
echo "</br>". $maca->get_nome();
echo "</br>". $maca->get_cor();

$carro = new Carro("Hyndai", "hb20", "2015");
echo "</br>".$carro->get_marca();
echo "</br>".$carro->get_modelo();
echo "</br>".$carro->get_ano();

$retangulo_ifsp = new Retangulo(2,4);
echo "</br>".$retangulo_ifsp->calcular_area();
echo "</br>".$retangulo_ifsp->calcular_perimetro();
?> 