package edu.westga.cs6311.carlot.model;

import java.util.ArrayList;

/**
 * Models an object that manages a car lot of cars
 * @author Niki Giles
 * @version 12/5/18
 */
public class CarLot {
	
	private ArrayList<Car> theLot; 
	
	/**
	 * Constructor to create the CarLot object
	 */
	public CarLot() {
		this.theLot = new ArrayList<Car>(); 
	}
	
	/**
	 * getCars method returns a list of cars in the lot
	 * @return this.theLot an ArrayList of cars
	 */
	public ArrayList<Car> getCars() {
		return this.theLot;
	}
	
	/**
	 * createLot method adds default cars to inventory
	 */
	public void createLot() {
		this.addCar("Chevy", "Camaro", 25000);
		this.addCar("Ford", "Mustang", 26120);
		this.addCar("Dodge", "Charger", 27595);
		
	}
	
	/**
	 * Finds and returns the first car that matches 
	 * 	the specified make, and model
	 * @param make finds the make of car
	 * @param model finds the model of car
	 * @return	Found car object or null if not found
	 */
	public Car findCar(String make, String model) {
		if (make == null) {
			return null;
		}
		
		for (Car currentCar : this.theLot) {
			if (currentCar.getMake().equalsIgnoreCase(make)) {
				return currentCar;
			}
		}
		
		return null;
	}

	/**
	 * Adds the specified car to the car lot 
	 * @param	make adds the make of a new car
	 * @param	model adds the model of a new car
	 * @param	price	adds the price of a new car
	 */
	public void addCar(String make, String model, int price) {
		if (make != null || model != null || price != 0) {
			Car newCar = new Car(make, model, price);
			newCar.setPrice(price);
			this.theLot.add(newCar);
		}
	}
	
	/**
	 * getLeastExpensive method returns the least expensive car in lot
	 * @return leastExpensiveCar 
	 */
	public int getLeastExpensive() {
		int leastExpensiveCar = this.theLot.get(0).getPrice();
		
		for (Car currentCar : this.theLot) {
			if (currentCar.getPrice() < leastExpensiveCar) {
				leastExpensiveCar = currentCar.getPrice();
			}	
		}
		return leastExpensiveCar;
	}
	
	/**
	 * getMostExpensive method returns the most expensive car in lot
	 * @return mostExpensiveCar 
	 */
	public int getMostExpensive() {
		int mostExpensiveCar = this.theLot.get(0).getPrice();
		
		for (Car currentCar : this.theLot) {
			if (currentCar.getPrice() > mostExpensiveCar) {
				mostExpensiveCar  = currentCar.getPrice();
			}
		}
		return mostExpensiveCar;
	}

	/**
	 * getTotalValue method returns the total value of all cars in lot
	 * @return totalValueOfLot 
	 */
	public int getTotalValue() {
		int totalValueOfLot = 0; 
		for (Car currentCar : this.theLot) {
			totalValueOfLot = totalValueOfLot + currentCar.getPrice();
		}
		return totalValueOfLot;	
	}
	
	/**
	 * getAveragePrice method returns the average price of all cars in lot
	 * @return getAveragePrice 
	 */
	public double getAveragePrice() {
		double sum = 0.0;
		
		for (Car currentCar: this.theLot) {
			sum = sum + currentCar.getPrice();
		}	
		return  (sum / this.theLot.size());
	}
	
	/**
	 * Returns a String representation of the carLot with the most and least expensive cars
	 * 
	 * @return	A String representation of the carLot
	 */
	public String toString() {

		if (this.theLot.isEmpty()) {
			return "Car Lot is Empty";
		} 
		
		String inventoryOutput = "";
		
 		for (Car currentCar : this.theLot) {
			inventoryOutput += currentCar.toString().toUpperCase() + "\n";
		} 

 		inventoryOutput += "Number of cars: "  + this.theLot.size() + "\n";
 		inventoryOutput += String.format("%-16s", "Most Expensive car:  ") + String.format("$%6d", this.getMostExpensive()) + "\n";
 		inventoryOutput += String.format("%-16s", "Least Expensive car: ") + String.format("$%6d", this.getLeastExpensive()) + "\n";
 		
 		inventoryOutput += String.format("Average Cost: $%.2f", this.getAveragePrice());
  		
		return inventoryOutput;
	}
}
