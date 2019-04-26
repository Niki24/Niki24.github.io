package edu.westga.cs6312.monsters.model;

/**
 * Models Room object; keeps track of an individual room in the game
 * @author Niki Giles
 * @version 2/13/19
 */
public class Room {
	private Participant roomMonster;
	private int roomNumber;
	
	/**
	 * Constructor for Room object
	 * @param roomNumber the room's identifying number
	 */
	public Room(int roomNumber) {
		this.roomNumber = roomNumber;
		this.setupRoom();
	}
	
	/**
	 * setupRoom method determines if a new monster should
	 * be created. If not, there will be no monster present 
	 * in the room 
	 */
	private void setupRoom() {
		
		if (Math.random() <= .5) {
			this.roomMonster = this.createMonster();
		} else {
			this.roomMonster = null;
		}
	}
	
	/**
	 * createMonster method creates a new KickingMonster object
	 * @return newKickingMonster 
	 */
	private Participant createMonster() {
		
		if (Math.random() <= .5) {
			return new KickingMonster();
		} else {
			return new PunchingMonster();
		} 
	}
	
	/**
	 * getLocation method returns location of room
	 * @return A string representation of the location for the
	 * current room 
	 */
	public String getLocation() {
		String locationOutput = new String("Room at (" + this.roomNumber + ")"); 
		return locationOutput; 
	}
	
	/**
	 * getMonster method returns Participant in current room 
	 * @return this.roomMonster Participant object in current room
	 */
	public Participant getMonster() {	
		return this.roomMonster;
	}
	
	/**
     * toString method returns Room's description
     * @return A string representation of the room object
     */
	@Override
	public String toString() {
		String roomOutput = new String("The player is currently in " + this.getLocation() + " with " + this.roomMonster.toString()); 
		
		return roomOutput; 
	}

}
