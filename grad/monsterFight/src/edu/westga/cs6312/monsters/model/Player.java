package edu.westga.cs6312.monsters.model;

/**
 * Models Player object; subclass of Participant
 * @author Niki Giles
 * @version 2/13/19
 */
public class Player extends Participant {

	/**
	 * Constructor for Player object; utilizes constructor from Participant class
	 * to accept 100 starting health points
	 */
	public Player() {
		super(100);
	}

	/**
     * fight method will inflict 50 health points of damage when
     * Player is fighting
     * @return The health credits of the player when fighting
     */
	public int fight() {
		return this.getHealthCredits() - 50; 
	}
	
	/**
     * toString method returns Player's description
     * @return The description a string representation of the player object
     */
	@Override
	public String toString() {
		String playerOutput = new String(super.toString()); 
		
		return playerOutput; 
	}

}
