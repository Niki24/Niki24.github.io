package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.GameBoard;
import edu.westga.cs6312.monsters.model.Room;


/**
 * Tests GameBoard when player moves right
 * 
 * @author Niki Giles
 * @version 2/16/19
 */
class WhenGameBoardMoveRight {

	/**
	 * Tests GameBoard when player moves right
	 */
	@Test
	void testWhenPlayerMovesRight() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[0].getLocation();
		theBoard.moveRight();
		String expectOutput = theRoom[0].getLocation();
		assertEquals("Room at (1)", expectOutput);
	}
	
	/**
	 * Tests GameBoard when player moves right
	 * from position 6
	 */
	@Test
	void testWhenPlayerMovesRightFromPosition6() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[6].getLocation();
		theBoard.moveRight();
		String expectOutput = theRoom[6].getLocation();
		assertEquals("Room at (7)", expectOutput);
	}
	
	/**
	 * Tests GameBoard when player moves right twice
	 * from position 3
	 */
	@Test
	void testWhenPlayerMovesRightTwiceFromPosition3() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[3].getLocation();
		theBoard.moveRight();
		theBoard.moveRight();
		String expectOutput = theRoom[3].getLocation();
		assertEquals("Room at (5)", expectOutput);
	}
	
	/**
	 * Tests GameBoard when player moves right 
	 * from position 9
	 */
	@Test
	void testWhenPlayerMovesRightTwiceFromPosition9() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[9].getLocation();
		theBoard.moveRight();
		String expectOutput = theRoom[9].getLocation();
		assertEquals("Room at (0)", expectOutput);
	}
}
