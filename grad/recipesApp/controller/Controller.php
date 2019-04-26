<?php
include_once 'model/RecipesDB.php';
include_once 'model/Recipe.php';
include_once 'smarty/libs/Smarty.class.php';

class Controller {
    private $action;
    private $view;
    private $recipes_db;
    private $error_msg;
    
    /**
     * setup the controller
     */
    public function __construct() {
        $this->recipes_db = new RecipesDB();
        if ($this->recipes_db->isConnected()) {
            $this->action = '';
            $this->error_msg = '';
        }
        else {
            $this->action = 'error';
            $this->error_msg = 'unable to connect to the database';
        }
        $this->view = new Smarty();
    }
    
    /**
     * determine which action to take
     */
    public function invoke() {
        
        // get the action to be processed
        $this->getAction();
        
        switch ($this->action) {
            case 'show_home_page':
                $this->view->display('home.tpl');
                break;
            case 'edit_recipe_form':
                $this->showEditRecipesForm();
                break;
            case 'update_recipe':
                $this->updateRecipe();
                break;
                
            case 'delete_recipe_form':
                $this->showDeletedRecipe();
                break;
                
            case 'show_catalog_page':
                $this->showCatalogPage();
                break;
                
            case 'add_recipe_form':
                $this->showAddRecipeForm();
                break;
            case 'add_recipe':
                $this->showAddRecipePage();
                break;   
            case 'show_recipe_page':
                $this->showRecipePage();
                break;
            case 'add_review':
                $this->showAddReview();
                break;
            case 'show_contact_page':
                $this->showContactPage();
                break;
            case 'process_contact_form':
                $this->processContactpage();
                break;
            default:
                $this->view->assign('error_msg', $this->error_msg);
                $this->view->display('error.tpl');
                break;
        }
    }
    
    /*--------------------------------------------------------------
     *
     * Process requested page
     *
     *------------------------------------------------------------*/
    /**
     * 
     */
    private function showEditRecipesForm() {
        $recipe_id = filter_input(INPUT_POST, 'recipe_id', FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $ingredients = filter_input(INPUT_POST, 'ingredients', FILTER_SANITIZE_STRING);
        $calories = filter_input(INPUT_POST, 'calories', FILTER_SANITIZE_STRING);
        
        $recipe = $this->recipes_db->getRecipe($recipe_id);
        
        $this->view->assign('id', $recipe->getID());
        $this->view->assign('name', $recipe->getName());
        $this->view->assign('image', $recipe->getImage());
        $this->view->assign('ingredients', $recipe->getIngredients());
        $this->view->assign('calories', $recipe->getCalories());
  
        $this->view->display('editrecipe.tpl');
    }
    
    private function showDeletedRecipe() {
        $recipe = filter_input(INPUT_POST, 'recipe_id', FILTER_SANITIZE_STRING);
        $this->recipes_db->deleteRecipe($recipe);
        
        $this->showCatalogPage();
        
    }
    
    private function updateRecipe() {
        $recipe_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
        $ingredients = trim(filter_input(INPUT_POST, 'ingredients', FILTER_SANITIZE_STRING));
        $calories = filter_input(INPUT_POST, 'calories', FILTER_SANITIZE_STRING);
        
        $this->recipes_db->updateRecipe($recipe_id, $name, $ingredients, $calories);
        
        $this->showCatalogPage();
    }
    
    private function showCatalogPage() {
        $recipes_catalog = $this->recipes_db->getRecipesCatalog(); 
        $this->view->assign('recipes_catalog', $recipes_catalog);
        $this->view->display('catalog.tpl');
    }
    
    private function showRecipePage(){
        $recipe_id = filter_input(INPUT_POST, 'recipe_id', FILTER_SANITIZE_STRING);
        
        $recipe = $this->recipes_db->getRecipe($recipe_id);

        $recipeReviews = $this->recipes_db->getReviews($recipe_id);
        
        $this->view->assign('id', $recipe->getID());
        $this->view->assign('name', $recipe->getName());
        $this->view->assign('ingredients', $recipe->getIngredients());
        $this->view->assign('calories', $recipe->getCalories());
        $this->view->assign('reviews', $recipeReviews[3]);
        
        $this->view->display('recipe.tpl');
    }
    
    private function showAddRecipeForm(){
        $this->view->display('addrecipe.tpl');
    }
    
    private function showAddRecipePage(){
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
        $ingredients = trim(filter_input(INPUT_POST, 'ingredients', FILTER_SANITIZE_STRING));
        $calories = filter_input(INPUT_POST, 'calories', FILTER_SANITIZE_STRING);
        
        $this->recipes_db->addRecipe($recipe_id,$name,$ingredients,$calories);
        $this->showCatalogPage();
    }

    private function showAddReview() {
        $recipe_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $review = trim(filter_input(INPUT_POST, 'review', FILTER_SANITIZE_STRING));
        $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
 
        $this->recipes_db->addReview($recipe_id,$date,$review);
        $this->showCatalogPage();
    }
    
    private function showContactPage() {
        $this->view->display('contact.tpl');
    }
    
    private function processContactPage() {
       
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
        
        $this->view->assign('name', $name);
        $this->view->assign('email', $email);
        $this->view->assign('phone', $phone);
        $this->view->assign('comments', $comments);
        $this->view->assign('date', $date);

        
        $this->recipes_db->saveContact($name,$email,$phone,$date,$comments);
        $this->view->display('confirmcontact.tpl');
    }
    
    /*--------------------------------------------------------------
     *
     * Utility Functions
     *
     *------------------------------------------------------------*/
    private function getAction() {
        if ($this->action === '') {
            $this->action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if ($this->action === NULL) {
                $this->action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                if ($this->action === NULL) {
                    $this->action = 'show_home_page';
                }
            }
        }
    }
}

?>