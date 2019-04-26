package edu.westga.cs6311.carlot.view;

import java.util.Scanner;

import edu.westga.cs6311.carlot.model.Car;
import edu.westga.cs6311.carlot.model.CarLot;
import edu.westga.cs6311.carlot.model.Shopper;

/**
 * ShopperTUI  Models an object that manages the Shopper's UI 
 * @author Niki Giles
 * @version 12/5/18
 */
public class ShopperTUI {
	
	private CarLot shopperCarLot;
	private Scanner userInput;
	private Shopper theShopper; 
	
	/**
	 * Constructor to create the ShopperTUI object
	 * @param newCarLot creates a new CarLot object
	 */
	public ShopperTUI(CarLot newCarLot) {
		this.shopperCarLot = newCarLot; 
		this.userInput = new Scanner(System.in);
	}
	
	/**
	 *  getShopperInformation method displays shopper's name and amount
	 *  of money the user has to spend
	 */
	private void getShopperInformation() {
		System.out.print("\nPlease enter your name: ");
		String userInputName = this.userInput.next(); 
			
		System.out.print("\nPlease enter the amount you have to spend: \n");

		int userInputAmountToSpend = this.userInput.nextInt(); 
		
		while (userInputAmountToSpend <= 0) {
			System.out.println("\nPlease enter a valid amount to spend. It must be more than 0");
			userInputAmountToSpend = this.userInput.nextInt(); 
		}
		
		this.theShopper = new Shopper(userInputName, userInputAmountToSpend);
		System.out.println("\nWelcome " + this.theShopper.getName() + "! Enjoy spending your $" +  (int) this.theShopper.getAmountToSpend() + "\n");
	}
	
	/**
	 *  displayShopperMenu method displays the shopper's menu
	 */
	private void displayShopperMenu() {
		System.out.println("\n********** Shopper's Menu ************");	
		System.out.println("\n1 - View all cars");
		System.out.println("2 - View cars by make");
		System.out.println("3 - View money remaining");
		System.out.println("4 - Purchase car");
		System.out.println("5 - Quit shopper application\n");
		System.out.print("Please make a selection from the menu: ");
	}
	
	/**
	 *  runShopperApplication method calls the helper methods associated with 
	 *  the shopper application and runs the user interface that the user will select from 
	 */
	private void runShopperMenu() {
		int userChoice;

 		do {
 			this.displayShopperMenu();
 			userChoice = this.userInput.nextInt();
			
			if (userChoice == 1) {
				this.viewInventory();			
			} else if (userChoice == 2) {
				this.findCar();
			} else if (userChoice == 3) {
				this.amountToSpend();
			} else if (userChoice == 4) {
				this.purchaseCarMenu();
				System.out.println();
			} else if (userChoice == 5) {
				System.out.println("\nThanks for using the shopper's application. Have a nice day.");
				return;
			} else {
				System.out.println("Please select a valid number from the shopper's menu");
			} 
		} while (userChoice != 5);
	}
	
	/**
	 *  runShopper method calls the getShopperInformation and 
	 *  runShopperMenu methods to start the Shopper application
	 */
	public void runShopper() {
		this.getShopperInformation();
		this.runShopperMenu();	
	}
	
	
	/**
	 *  findCar method searches carLot to find car by make
	 */
	private void findCar() {
		
		if (this.shopperCarLot.getCars().isEmpty()) {
			System.out.println("\nCar Lot is empty");
			return;
		}
		
		System.out.print("Enter car maker: ");
		String userInputMake = this.userInput.next(); 
		
		Car findUserCar = this.shopperCarLot.findCar(userInputMake, "");
		
		if (findUserCar == null) {
			System.out.println("\nCar Not available. Please choose a car from the lot available\n");
			return;
		}
		
		System.out.println("\nThe cars made by " + userInputMake + " are: \n\n" + findUserCar.toString());
	}

	/**
	 *  purchaseCar method determines whether the user has enough to purchase the car
	 */
	private void purchaseCar(int userSelection) {

		Car selectedCar = new Car(this.shopperCarLot.getCars().get(userSelection).getMake(), this.shopperCarLot.getCars().get(userSelection).getModel(), 
				this.shopperCarLot.getCars().get(userSelection).getPrice()); 
		
		if (this.theShopper.enoughToPurchase(selectedCar)) {
			this.theShopper.purchaseCar(selectedCar);
			System.out.println("\nYou purchased a: " + selectedCar.toString());	
			this.shopperCarLot.getCars().remove(userSelection);
		} else {
			System.out.println("\nYou do not have enough to purchase car");
		}
		
	}
	
	/**
	 *  amountToSpend method tracks the amount the shopper has to spend and displays it
	 */
	private void amountToSpend() {
		System.out.println("\nAmount to Spend: $" + (int) this.theShopper.getAmountToSpend());
	}

	/**
	 * viewInventory method shows car inventory available with the most and least expensive cars
	 */
	private void viewInventory() { 
		System.out.println("\nCar Lot: \n\n" + this.shopperCarLot.toString());
	}
	
	/**
	 *  displayPurchaseMenu method displays the cars available for the purchaseCarMenu
	 */
	private void displayPurchaseMenu() {
		System.out.println("\nThe cars available are: Please make a selection \n");
		this.displayCars();
		System.out.println("\n");
	}
	
	/**
	 *  purchaseCarMenu method displays the menu the user will use to purchase a car
	 */
	private void purchaseCarMenu() {		

		this.displayPurchaseMenu();
		
		int userChoice = this.userInput.nextInt();
		int menuSelection = userChoice - 1; 
		int size = this.shopperCarLot.getCars().size();	
		
		if (userChoice == 1) {
			this.purchaseCar(0);
			return;
		} else if (userChoice == 2) {
			this.purchaseCar(1);
			return;
		} else if (userChoice == 3) {
			this.purchaseCar(2);
			return;
		}  else if (userChoice > size || userChoice < 1) {
			System.out.println("\nNot a valid selection");
			return;
		} else {
			userChoice = menuSelection;
			this.purchaseCar(userChoice);
		}
	}
	
	/**
	 *  displayCars is a helper method that displays cars in lot for purchase
	 */
	private void displayCars() {
		int count = 1;
		
 		if (this.shopperCarLot.getCars().isEmpty()) {
			System.out.println(this.shopperCarLot.toString());
			System.out.print("\nPlease enter 5 to get back to the Shopper's menu: ");
			return;
		} 
		
		for (Car carOutput: this.shopperCarLot.getCars()) {
			System.out.print(count + " - " + carOutput.toString() + "\n");
			count++;
		}
	}
}
