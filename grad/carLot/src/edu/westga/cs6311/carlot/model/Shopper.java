package edu.westga.cs6311.carlot.model;

/**
 * Models an object that manages a shopper
 * @author Niki Giles
 * @version 12/5/18
 */
public class Shopper {
	
	private String name;
	private double amountToSpend;
	private Car carPurchased; 
	
	/**
	 * Constructor to create the Shopper object
	 * @param name accepts shopper's name
	 * @param amountToSpend accepts shopper's dollar amount to spend 
	 */
	public Shopper(String name, double amountToSpend) {
		if (name == null || amountToSpend < 0) {
			this.name = "";
			this.amountToSpend = 0; 
		}
		
		this.name = name; 
		this.amountToSpend = amountToSpend; 
	}
	
	/**
	 *  getName method returns Shopper's name given by user
	 *  @return String this.name 
	 */
	public String getName() {
		return this.name; 
	}
	
	/**
	 *  getAmountToSpend method returns Shopper's amount to spend given by user
	 *  @return double this.amountToSpend
	 */
	public double getAmountToSpend() {
		return this.amountToSpend; 	
	}	
		
	/**
	 *  getCarPurchased method returns the car purchased by the user
	 *  @return Car object this.carPurchased
	 */
	public Car getCarPurchased() {
		return this.carPurchased;
	}
	
	/**
	 *  enoughToPurchase method returns true if user has enough to purchase car
	 *  @param newCar Car object passed as a new car  
	 *  @return boolean value
	 */
	public boolean enoughToPurchase(Car newCar) {
		if (newCar.getPrice() > this.getAmountToSpend()) {
			return false;
		}
		return true; 
	}	
	
	/**
	 *  purchaseCar method allows user to purchase car based on the amount given 
	 *  @param newPurcase Car object passed 
	 */
	public void purchaseCar(Car newPurcase) {
		if (this.enoughToPurchase(newPurcase)) {
			this.carPurchased = newPurcase; 
			this.amountToSpend = this.getAmountToSpend() - newPurcase.getPrice(); 
		}
	}		
}
