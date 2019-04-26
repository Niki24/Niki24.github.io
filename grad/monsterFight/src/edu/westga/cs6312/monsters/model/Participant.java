package edu.westga.cs6312.monsters.model;

/**
 * Models Participant object; keeps track of the current participant credits
 * @author Niki Giles
 * @version 2/13/19
 */
public abstract class Participant {
	
	private int healthCredits;
	
	/**
	 * Constructor for the Participant object
	 * 
	 * @param healthCredits  current credits
	 * Accepts participants health credits
	 * 
	 */
	public Participant(int healthCredits) {

		this.healthCredits = healthCredits;
	}
	
	/**
	 * getHealthCredits method returns the current credits of the participant
	 * @return this.healthCredits the credits for participant
	 */
	public int getHealthCredits() {
		return this.healthCredits;
	}
	
	/**
     * toString method returns participant's object's description
     * @return The description of the participant object
     */
	@Override
	public String toString() {
		String formatOutput = new String("The player has " + this.healthCredits + " health credits");
		
		return formatOutput;
		
	} 
	
	/**
     * fight is an abstract method that returns the number of health credits 
     * to be deducted from the participant they are fighting
     * @return int health credits
     */
	public abstract int fight();

}
