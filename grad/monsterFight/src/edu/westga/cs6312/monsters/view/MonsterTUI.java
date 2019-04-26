package edu.westga.cs6312.monsters.view;

import java.util.Scanner;

import edu.westga.cs6312.monsters.model.GameBoard;
import edu.westga.cs6312.monsters.model.Room;

/**
 * Models MonsterTUI object; manages an array of new monsters and accepts user input
 * @author Niki Giles
 * @version 2/13/19
 */
public class MonsterTUI {
	private Scanner userInput; 
	private GameBoard theBoard; 
	
	/**
	 * Constructor to create the MonsterTUI object
	 * @param theBoard creates a new GameBoard object
	 * and instantiates the Scanner object
	 */
	public MonsterTUI(GameBoard theBoard) {
		this.theBoard = theBoard;
		this.userInput = new Scanner(System.in);
	}
	
	/**
	 *  run method calls the helper method and runs the 
	 *  interactive portion of the application
	 */
	public void run() {
		
		this.getUserNumber("");
	}
	
	/**
	 * getUserNumber is a helper method used to get user's input
	 * @param message displays user a message
	 * @return userChoice returns user's selection
	 */
	private int getUserNumber(String message) {

		int userChoice;

		do {
			this.displayMenu();
			userChoice = Integer.parseInt(this.userInput.next());
			
			if (userChoice == 1) {
				this.describeRoom();
			} else if (userChoice == 2) {
				this.describePlayer();
			} else if (userChoice == 3) {
				this.describeGameBoard();
			} else if (userChoice == 4) {
				this.pickMove();
			} else if (userChoice == 5) {
				this.fightMonster();
			} else if (userChoice == 9) {
				System.out.println("\nThanks for playing. Goodbye!");
			} else {
				System.out.println("Please select a valid number\n");
			}

		} while (userChoice != 9); 

		this.userInput.close(); 

		return userChoice; 
	}
	
	/**
	 * fight method simulates the player fight the monster.
	 */
	private void fightMonster() {
		
		Room roomMonster = this.theBoard.getCurrentRoom()[0];
		if (roomMonster.getMonster() == null) {
			System.out.println("No monsters to fight. You are safe for now ... \n");
			return;
		}
		int monsterHealth = roomMonster.getMonster().fight();
		int playerHealth = this.theBoard.getPlayer().fight();
		
		while (playerHealth > 0) {
			System.out.println("Player health: " + playerHealth + "\n" + "Monster health: " + monsterHealth + "\n");
			playerHealth = playerHealth - this.theBoard.getPlayer().fight();
			monsterHealth = monsterHealth - roomMonster.getMonster().fight();
			
			if (monsterHealth <= 0) {
				System.out.println("Player health: " + playerHealth 
						+ "\nMonster health: " + monsterHealth + "\n"
						+ "\nYou win! Monster is dead! \n");
				return;
			} else if (monsterHealth == 0 && playerHealth == 0) {
				System.out.println("Player health: " + playerHealth + "\n" +  "Monster health: " + monsterHealth + "\n"
						+ "It's a draw! \n");
			} else {
				System.out.println("Monster is winner! You lose! \n");
			}
		}
	}

	/**
	 * describeGameBoard method is a helper method used to iterate through the game board
	 * and display all rooms and if a monster is present
	 */
	private void describeGameBoard() {
		System.out.println(this.theBoard.toString());
	}

	/**
	 * describePlayer method is a helper method used to display the player's information
	 */
	private void describePlayer() {
		Room describeThePlayer = this.theBoard.getCurrentRoom()[0];
		System.out.println("\n" + this.theBoard.getPlayer().toString() + " and is located at " 
							+ describeThePlayer.getLocation() + "\n");
	}

	/**
	 * describeRoom method is a helper method used to describe the current room
	 */
	private void describeRoom() {
		Room thePlayerRoom = this.theBoard.getCurrentRoom()[0];
		System.out.println("The player is currently in " + thePlayerRoom.getLocation() + "\n");
	}

	/**
	 * displayMenu is a helper method used to display the user menu
	 */
	private void displayMenu() {
		System.out.println("*** Welcome to A tour of Monsters. Please select an option from the menu below ***");

		System.out.println("\n1 - Describe room");
		System.out.println("2 - Describe player");
		System.out.println("3 - Describe game board");
		System.out.println("4 - Move");
		System.out.println("5 - Fight");
		System.out.println("9 - Quit \n");
		System.out.print("Please enter your choice: " + "\n");
	}
	
	/**
	 * move method is a helper method that displays move menu
	 */
	
	private void move() {
		System.out.println("Pick your move: ");
		System.out.println("\n1 - Left");
		System.out.println("2 - Right");
		System.out.println("3 - Return to main menu");
	}
	
	/**
	 * pickMove method is a helper method used for user selection
	 * from the move menu
	 */
	private void pickMove() {
		int userMoveChoice;

		do {
			this.move();
			userMoveChoice = Integer.parseInt(this.userInput.next());
			
			if (userMoveChoice == 1) {
				this.theBoard.moveLeft();
				this.describeRoom();
			} else if (userMoveChoice == 2) {
				this.theBoard.moveRight();
				this.describeRoom();
			} else if (userMoveChoice == 3) {
				System.out.println("You are in the main menu");
			}  else {
				System.out.println("Please select a valid number\n");
			}

		} while (userMoveChoice != 3); 

	}
}
