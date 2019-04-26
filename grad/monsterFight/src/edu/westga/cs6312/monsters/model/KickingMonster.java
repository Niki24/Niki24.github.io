package edu.westga.cs6312.monsters.model;

/**
 * Models KickingMonster object; subclass of Participant
 * @author Niki Giles
 * @version 2/13/19
 */
public class KickingMonster extends Participant {

	/**
	 * Constructor for KickingMonster object; utilizes constructor from Participant class
	 * to accept 100 starting health points
	 */
	public KickingMonster() {
		super(100);
	}
	
	/**
     * fight method will inflict 30 health points of damage when
     * KickingMonster is fighting
     * @return The health credits of the player when fighting
     */
	public int fight() {
		return this.getHealthCredits() - 30; 
	}
	
	/**
     * toString method returns KickingMonter's description
     * @return The description a string representation of 
     * the kicking monster object
     */
	@Override
	public String toString() {
		String monsterOutput = new String("Kicking Monster"); 
		
		return monsterOutput; 
	}

}
