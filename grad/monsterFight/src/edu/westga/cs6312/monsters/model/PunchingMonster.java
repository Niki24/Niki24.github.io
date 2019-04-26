package edu.westga.cs6312.monsters.model;

import java.util.Random;

/**
 * Models PunchingMonster object; subclass of Participant
 * @author Niki Giles
 * @version 2/16/19
 */
public class PunchingMonster extends Participant {

	/**
	 * Constructor for PunchingMonster object; utilizes constructor from Participant class
	 * to accept 75 starting health points
	 */
	public PunchingMonster() {
		super(75);
	}

	/**
     * fight method will inflict between 0 and 49 health points of damage when
     * PunchingMonster is fighting
     * @return The health credits of the player when fighting
     */
	@Override
	public int fight() {		
		int randomNumber = new Random().nextInt(50);
		return this.getHealthCredits() - randomNumber;
	}
	
	/**
     * toString method returns PunchingMonter's description
     * @return The description a string representation of 
     * the punching monster object
     */
	@Override
	public String toString() {
		String punchingMonsterOutput = new String("Punching Monster"); 
		
		return punchingMonsterOutput; 
	}
}
