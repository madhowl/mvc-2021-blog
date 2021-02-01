<?php


namespace Models;


use Core\CoreModel;

class ArticlesModel extends CoreModel
{
    public $lastPosts = array();

    public function getLastPost($howmany = 3){
        $sql = "SELECT id, title, image_url, data FROM " . $this->table ." ORDER BY id DESC  LIMIT ".$howmany;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $this->lastPosts[] = $row;
        }
        return $this->lastPosts;
    }

}