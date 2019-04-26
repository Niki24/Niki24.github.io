package edu.westga.cs6311.carlot.view;

import java.util.Scanner;

import edu.westga.cs6311.carlot.model.CarLot;

/**
 * AutoMoreTUI  Models an object that manages the UI for the user
 * @author Niki Giles
 * @version 12/5/18
 */
public class AutoMoreTUI {
	
	private CarLot autoMoreCarLot;
	private Scanner userInput;
	
	/**
	 * Constructor to create the AutoMoreTUI object
	 * @param newCarLot creates a new CarLot object
	 */
	public AutoMoreTUI(CarLot newCarLot) {
		this.autoMoreCarLot = newCarLot; 
		this.userInput = new Scanner(System.in);
	}
	
	/**
	 *  runManager method calls the helper methods associated with the manager application and 
	 *  runs the user interface 
	 */
	public void runManager() {
		int userChoice;

 		do {
 			this.displayManagerMenu();
 			
			userChoice = this.userInput.nextInt();
			
			if (userChoice == 1) {
				this.createLot();
			} else if (userChoice == 2) {
				this.addCar();
			} else if (userChoice == 3) {
				this.viewInventory();
			} else if (userChoice == 4) {
				System.out.println("Thanks for using the manager application. Have a nice day.");
				break;
			} else {
				System.out.println("Please select a valid number from the menu");
			} 
		} while (userChoice != 4); 
	}
	
	/**
	 *  displayMenu method displays the output for the manager's menu
	 */
	private void displayManagerMenu() {
		System.out.println();
		System.out.println("*** This is the Manger's Menu: Please select an option from the menu below ***");
		
		System.out.println("\n1 - Create new car lot");
		System.out.println("2 - Add new car");
		System.out.println("3 - View inventory");
		System.out.println("4 - Quit manager application\n");
	}
	
	/**
	 * createLot method adds default cars to inventory
	 */
	private void createLot() {
		this.autoMoreCarLot.createLot();
		System.out.println("\nNew car lot created");
	}
	
	/**
	 * addCar method  Adds the specified car to the car lot based on user's input
	 */
	private void addCar() {
		
		System.out.print("Please enter the car's make: ");
		String userInputMake = this.userInput.next(); 
		
		System.out.print("Please enter the car's model: ");
		String userInputModel = this.userInput.next();
		
		System.out.print("Please enter the car's price: ");
		int userInputPrice = this.userInput.nextInt();

 		while (userInputPrice <= 0) {
			System.out.println("Please enter a correct car price. Must be more than 0");
			userInputPrice = this.userInput.nextInt();
		} 
		
		this.autoMoreCarLot.addCar(userInputMake, userInputModel, userInputPrice);	
		System.out.println();
		System.out.println("You added a " + userInputMake + " " + userInputModel + " $" + userInputPrice + " to the car lot");	
	}
	
	/**
	 * viewInventory method shows car inventory along the with least and most expensive cars
	 */
	private void viewInventory() { 
		System.out.println();
		System.out.println(this.autoMoreCarLot.toString());
	}
}
