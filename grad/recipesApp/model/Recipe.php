<?php
class Recipe {
	private $id;
	private $name;
	private $ingredients;
	private $calories;
	private $reviews;
	private $image;

	
	/**
	 * constructor
	 * 
	 * Optional argument: associative array with initial property value pairs
	 */
	public function __construct() {
	    $this->id = NULL;
	    $this->name = NULL;
	    $this->ingredients = NULL;
	    $this->calories = NULL;
	    $this->reviews = NULL;
	    $this->image = NULL;

		
		$args = func_get_args();
		if (count($args) >= 1) {
			foreach ($args[0] as $property => $value) {
				switch ($property) {
				    case "recipeID":
				        $this->id = $value;
				        break;
				    case "name":
						$this->name = $value;
						break;
					case "ingredients":
						$this->ingredients = $value;
						break;
					case "calories":
						$this->calories = $value;
						break;
					case "reviews":
						$this->reviews = $value;
						break;

				}
			}
		}
	}
	
	/*--------------------------------------------------------------
	 * get methods
	 *------------------------------------------------------------*/
	public function getID() {
	    return $this->id;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getIngredients() {
		return $this->ingredients;
	}
	
	public function getCalories() {
		return $this->calories;
	}
	
	public function getReviews() {
		return $this->reviews;
	}
	
	
	public function getImage() {
	    return "templates/images" . $this->image;
	}
	

	
	/*--------------------------------------------------------------
	 * set methods
	 *------------------------------------------------------------*/

	public function setName($name) {
		$this->name = $name;
	}
	
	public function setIngredients($ingredients) {
		$this->ingredients = $ingredients;
	}
	
	public function setCalories($calories) {
		$this->calories = $calories;
	}
	
	public function setReviews($reviews) {
		$this->reviews = $reviews;
	}

}
?>