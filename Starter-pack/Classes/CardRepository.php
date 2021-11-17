<?php
include_once 'config.php';
// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {   
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["submit"])) {
                $id = $_POST["id"];
                $inputName = $_POST["name"];
                $rarity = $_POST["rarity"];
                $owned = $_POST["owned"];


                $sql = "INSERT INTO `hidden_fates` (id, name, owned, rarity) 
                VALUES ('$id','$inputName', '$owned', '$rarity' )";
                $result = $this->databaseManager->connect()->query($sql);
                return $result;
            }
        }
    }

    // Get one
    public function find()
    {
        
    }   

    // Get all
    public function get()
    {   
        // TODO: replace dummy data by real one
        $sql = "SELECT name FROM `hidden_fates`";
        $result = $this->databaseManager->connection->query($sql)->fetchAll();

        //var_dump($result);
        return $result;


        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update()
    {
        $editName = $_POST["editName"];
        $editRarity = $_POST["editRarity"];
        $editOwned = $_POST["editOwned"];
        $editSubmit = $_POST["editSubmit"];

        $sql = "UPDATE `hidden_fates` (id, name, owned, rarity) SET id =  '".$id."', name = '".$editName."',owned =  '".$editOwned."', rarity = '".$editRarity."'";
        $editResult= $this->databaseManager->connect()->query($sql);
        return $editResult;
    }

    public function delete()
    {

    }

}