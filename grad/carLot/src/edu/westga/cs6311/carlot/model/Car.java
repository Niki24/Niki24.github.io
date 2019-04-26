package edu.westga.cs6311.carlot.model;

/**
 * Models an object that manages cars. Defines make, model and price of car
 * @author Niki Giles
 * @version 12/5/18
 */
public class Car {
	
	private String make;
	private String model;
	private int price; 
	
	/**
	 * Initializes the make, model and price  of the car
	 * @param	make	The Car's make
	 * @param	model	The Car's model
	 * @param	price	The Car's price
	 */
	public Car(String make, String model, int price) {
		if (make == null || model == null || price < 0) {
			this.make = "";
			this.model = "";
			this.price = 0;
		}
		this.make = make;
		this.model = model;
		this.price = price; 
	}
	
	/**
	 * Accessor for the car's make
	 * 
	 * @return	The make of this car
	 */
	public String getMake() {
		return this.make;
	}
	
	/**
	 * Accessor for the car's model
	 * 
	 * @return	The model of this car
	 */
	public String getModel() {
		return this.model;
	}
	
	/**
	 * Accessor for the car's price
	 * 
	 * @return	The price of this car
	 */
	public int getPrice() {
		return this.price;
	}
	
	/**
	 * Mutator to set the car's price
	 * @param	newPrice	The car's new price
	 */
	public void setPrice(int newPrice) {
		
		if (newPrice <= 0) {
			return;
		}
		this.price = newPrice;
	}
	
	/**
	 * Returns a String representation of the car
	 * 
	 * @return	A String representation of the car
	 * 			including its make, model and price
	 */
	public String toString() {
		String carOutput = String.format("%-16s", this.getMake() + " " + this.getModel()) 
						+ String.format("$%6d", this.getPrice());
		return carOutput;
		
	}

}
