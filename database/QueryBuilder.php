<?php
class QueryBuilder {
  protected $pdo;

  public function __construct($pdo)
    {
    $this->pdo =$pdo;
   }

    function getAll(){

        //2. Выполнить запрос 
        $sql = 'SELECT * FROM posts';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
      
        //3. Получить ассоциативный массив в переменную $posts
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
      }
}