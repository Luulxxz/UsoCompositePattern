<?php

/*Classe TSqlInstruction
* clase que provê os métodos em comum entre todas as instruções 
*SQL(SELECT,INSERT, DELETE e UPDATE)
*/

abstract class TSqlInstruction {
    protected $sql; // armazena a instrução SQL
    protected $criteria; // armazena o objeto critério
    protected $entity; // armazena a tabela do banco de dados
     
    /* método setEntity()
    * define o nome da entidade (tabela) a ser manipulada pela instrução SQL
    * @param $entity = tabela
    */

    final public function setEntity($entity) {
        $this->entity = $entity;
    } 

    /* Método getEntity()
    * retorna o nome da entidade (tabela)
    */
    
    final public function getEntity() {
        return $this->entity;
    }

    /* método setCriteria()
    * define um critério de seleção dos dados através da composição de um objeto
    * do tipo TCriteria, que oferece uma interface para definição de critérios
    *@param $criteria = objeto do tipo TCriteria
    */    

    public function setCriteria(){
        $this->criteria = $criteria;
    }
     
    /*metodo getInstruction()
    * declarando-o como <abstract> obrigamos a declaração nas classes filhas,
    * uma vez que seu comportamento será distinto em cada uma delas, configurando polimorfismo. 
    */



    abstract function getInstruction();

}


?>
