package edu.westga.cs6311.carlot.view;

import java.util.Scanner;

import edu.westga.cs6311.carlot.model.CarLot;

/**
 * ApplicationTUI  Models an object that manages the UI for the user. Used as the director UI 
 * between the shopper and AutoMore UI
 * @author Niki Giles
 * @version 12/5/18
 */
public class ApplicationTUI {
	
	private CarLot applicationCarLot;
	private Scanner userInput;
	
	/**
	 * Constructor to create the ApplicationTUI object
	 * @param newCarLot creates a new CarLot object
	 */
	public ApplicationTUI(CarLot newCarLot) {
		this.applicationCarLot = newCarLot; 
		this.userInput = new Scanner(System.in);
	}
	
	/**
	 *  runAutoMore method calls the helper runMainMenu method to display main menu
	 */
	public void runApplication() {
		this.runMainMenu();
	}
	
	/**
	 *  displayMainMenu method displays the output for the main menu
	 */
	private void displayMainMenu() {
		System.out.println("\nPlease select from the following menu: \n");
		System.out.println("\n1 - Start manager application");
		System.out.println("2 - Start shopper appplication");
		System.out.println("3 - Quit\n");
	}
	
	/**
	 *  runMainMenu method displays selections for the main menu
	 */
	private void runMainMenu() {
		System.out.println("******* Welcome to the AutoMore Application ******");
		int userChoice;
		do {
			this.displayMainMenu();
			
			userChoice = this.userInput.nextInt();
			
			if (userChoice == 1) {
				this.runManagerApplication();
			} else if (userChoice == 2) {
				this.runShopperApplication();
			} else if (userChoice == 3) {
				System.out.println("Thanks for using AutoMore Software. Have a nice day.");
				break;
			} else {
				System.out.println("Please select a valid number from the main menu");
			} 
		} while (userChoice != 3);
		
		this.userInput.close();
	}

	/**
	 * runShopperApplication method  Creates a new ShopperTUI instance
	 * and calls the ShopperTUI's runShopper method
	 */
	private void runShopperApplication() {
		ShopperTUI shopperDisplayUI = new ShopperTUI(this.applicationCarLot);
		shopperDisplayUI.runShopper();
	}
	
	/**
	 * runManagerApplication method  Creates a new runAutoMoreUI instance
	 * and calls the AutoMoreTUI's runManager method
	 */
	private void runManagerApplication() {
		AutoMoreTUI autoMoreDisplayUI = new AutoMoreTUI(this.applicationCarLot); 
		autoMoreDisplayUI.runManager();
	}
}
