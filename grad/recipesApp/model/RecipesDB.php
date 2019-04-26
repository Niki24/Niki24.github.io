<?php
class RecipesDB {
	private $db;

	public function __construct() {
		$dsn = 'mysql:host=localhost;dbname=id4920766_recipes';
		$username = 'id4920766_chef';
		$password = 'fehcrecipes';

		try {
			$this->db = new PDO($dsn, $username, $password);
		} catch (PDOException $e) {
			$db = Null;
		}
	}


	public function isConnected() {
		return ($this->db != Null);
	}

	public function getRecipesCatalog() {
		// create the query
		$query = 'SELECT * FROM desserts';
		$statement = $this->db->prepare($query);
		$statement->execute();
		$recipes = $statement->fetchAll();
		$statement->closeCursor();

		
		$recipes_catalog = array();
		foreach ($recipes as $recipe) {
			$recipes_catalog[] = new Recipe($recipe);
		}
		return $recipes_catalog;
	}
	

	public function getRecipe($recipe_id) {
	    // create the query
	    $query = "SELECT * FROM desserts
				  WHERE dessertID =:recipe_id";
        $statement = $this->db->prepare($query);
	    $statement->bindValue(':recipe_id', $recipe_id);
	    $statement->execute();
	    $recipe_record = $statement->fetch();
	    $statement->closeCursor();
	    // check if query was successful
	    if ($recipe_record == False) {
	        return Null;
	    }
	    $recipe = new Recipe($recipe_record);    
	    return $recipe;
	}
	

	public function updateRecipe($recipe_id,  $name, $ingredients, $calories){

			$query = "UPDATE desserts
				      SET 
                       name = :name,
                       ingredients = :ingredients,
                       calories = :calories
				      WHERE dessertID = :recipe_id";
	    $statement = $this->db->prepare($query);

	    $statement->bindValue(':name', $name);
		$statement->bindValue(':recipe_id', $recipe_id);
		$statement->bindValue(':ingredients', $ingredients);
		$statement->bindValue(':calories', $calories);
	    $statement->execute();
	    $row_count = $statement->rowCount();
	    $statement->closeCursor();
	    if ($row_count == 0) {
	        var_dump("false");
	        return False;
	    }
	    return True;
	}
	
	
	public function deleteRecipe($recipe_id){
		$query = 'DELETE FROM desserts WHERE dessertID = :recipe_id';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':recipe_id', $recipe_id);
	    $statement->execute();
	    $recipe_record = $statement->fetch();
	    $statement->closeCursor();
	   
		return;
	}
	
	public function addRecipe($recipe_id,$name,$ingredients,$calories) {
		$query = 'INSERT INTO desserts(dessertID,name,ingredients,
		calories) VALUES(:dessertID,:name,:ingredients,:calories)';
        
        $statement = $this->db->prepare($query);
        $statement->bindValue(':dessertID', $recipe_id);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':ingredients', $ingredients);
        $statement->bindValue(':calories', $calories);
        
        $statement->fetch();
	    $statement->execute();
	    $statement->closeCursor();
	}
	
	public function getReviews($recipe_id){
		$query = "SELECT * FROM reviews
				  WHERE dessertID =:recipe_id";
        $statement = $this->db->prepare($query);
	    $statement->bindValue(':recipe_id', $recipe_id);
	    $statement->execute();
	    $reviews = $statement->fetch();
	    $statement->closeCursor();

	    return $reviews ;
	}
	
		public function saveContact( $name, $email, $phone, $messageDate, $comments){
			
		$query = 'INSERT INTO messages(name,email,
		phone,messageDate,comments) VALUES(:name,:email,:phone,:messageDate,:comments)';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':messageDate', $messageDate);
        $statement->bindValue(':comments', $comments);
  
	    $statement->fetch();
		$statement->execute();
	    $statement->closeCursor();
	}
	
		public function addReview($recipe_id,$date,$review) {
		$query = 'INSERT INTO reviews(dessertID,date,review) VALUES(:dessertID,:date,:review)';
        
        $statement = $this->db->prepare($query);
        $statement->bindValue(':dessertID', $recipe_id);
        $statement->bindValue(':date', $date);
        $statement->bindValue(':review', $review);
        
        $statement->fetch();
	    $statement->execute();
	    $statement->closeCursor();
	}
}
?>