package edu.westga.cs6312.monsters.model;

/**
 * Models GameBoard object; keeps track of the state of the game
 * @author Niki Giles
 * @version 2/13/19
 */
public class GameBoard {
	private Room[] theRooms;
	private Player thePlayer;
	private int playerRoomNumber;
	
	/**
	 * Constructor for GameBoard object
	 * sets up the board to play 
	 */
	public GameBoard() {
		this.setupBoard();
	}

	/**
	 * setupBoard method sets up board with new player, the player room number
	 * and what monsters are located in which rooms
	 */
	private void setupBoard() {
		this.thePlayer = new Player();
		this.theRooms = new Room[10];
		this.playerRoomNumber = 0;

 		for (int index = 0; index < this.theRooms.length; index++) {
 			this.theRooms[index] = new Room(index);
		} 
	}
	
	/**
	 * getPlayer method returns the player
	 * @return this.thePlayer the player playing the game
	 */
	public Player getPlayer() {
		return this.thePlayer;
	}

  /***
	 * getCurrentRoom gets the player's room
	 * @return the location of the player
	 */
 	public Room[] getCurrentRoom() {
		return this.theRooms;
	}

	/**
     * toString method returns GameBoard's description
     * @return The description a string representation of 
     * the game board object
     */
	@Override
	public String toString() {
		String roomStatus = new String();
		Room playerOutput = new Room(this.playerRoomNumber);
		
		for (Room boardOutput: this.getCurrentRoom()) {
			
			if (boardOutput.getMonster() == null) {
				roomStatus += boardOutput.getLocation() + " with no Monster inside\n";
			} else {
				roomStatus += boardOutput.getLocation() + " with " + boardOutput.getMonster() 
				 	+ " with " + boardOutput.getMonster().getHealthCredits() + " health credits\n";
			}
			 
		}
		roomStatus += "\n" + this.getPlayer() + " is located in " 
					+ playerOutput.getLocation() + "\n";
		
		String boardOutput = new String(roomStatus); 
		
		return boardOutput; 
	}
	
	/**
	 * moveRight method will move the current player one Room to the right
	 */
	public void moveRight() {	

		Room[] shiftArray = this.theRooms;
		int numberOfTimesShifted = 0;
		
		while (numberOfTimesShifted < 1) {
			Room temporaryRoom = shiftArray[0];
			
			for (int index = 0; index < shiftArray.length - 1; index++) {
				shiftArray[index] = shiftArray[index +  1];
			}
			
			shiftArray[shiftArray.length - 1] = temporaryRoom;
			numberOfTimesShifted++;
		}
	}
	
	/**
	 * moveLeft method will move the current player one Room to the left
	 */
	public void moveLeft() {

		Room[] shiftArrayLeft = this.theRooms;
		int numberOfTimesShifted = 0;
		
		while (numberOfTimesShifted < 1) {
			Room temporaryRoom = shiftArrayLeft[shiftArrayLeft.length - 1];
			
			for (int index = shiftArrayLeft.length - 1; index > 0; index--) {
				shiftArrayLeft[index] = shiftArrayLeft[index -  1];
			}
			
			shiftArrayLeft[0] = temporaryRoom;
			numberOfTimesShifted++;
		}
	}

}
