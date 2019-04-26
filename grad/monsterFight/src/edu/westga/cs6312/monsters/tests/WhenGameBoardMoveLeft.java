package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.GameBoard;
import edu.westga.cs6312.monsters.model.Room;

/**
 * Tests GameBoard when player moves left
 * 
 * @author Niki Giles
 * @version 2/16/19
 */
class WhenGameBoardMoveLeft {

	/**
	 * Tests GameBoard when player moves Left
	 * from position 6
	 */
	@Test
	void testWhenPlayerMovesLeftFromPosition6() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[6].getLocation();
		theBoard.moveLeft();
		String expectOutput = theRoom[6].getLocation();
		assertEquals("Room at (5)", expectOutput);
	}
	
	/**
	 * Tests GameBoard when player moves Left twice
	 * from position 3
	 */
	@Test
	void testWhenPlayerMovesLeftTwiceFromPosition3() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[3].getLocation();
		theBoard.moveLeft();
		theBoard.moveLeft();
		String expectOutput = theRoom[3].getLocation();
		assertEquals("Room at (1)", expectOutput);
	}
	
	/**
	 * Tests GameBoard when player moves Left
	 * from position 4
	 */
	@Test
	void testWhenPlayerMovesLeftFromPosition4() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[4].getLocation();
		theBoard.moveLeft();
		String expectOutput = theRoom[4].getLocation();
		assertEquals("Room at (3)", expectOutput);
	}
	
	/**
	 * Tests GameBoard when player moves Left
	 * from position 9
	 */
	@Test
	void testWhenPlayerMovesLeftFromPosition9() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[9].getLocation();
		theBoard.moveLeft();
		String expectOutput = theRoom[9].getLocation();
		assertEquals("Room at (8)", expectOutput);
	}
	
	/**
	 * Tests GameBoard when player moves Left
	 * from position 10
	 */
	@Test
	void testWhenPlayerMovesLeftFromPosition10() {
		GameBoard theBoard = new GameBoard();
		Room[] theRoom = theBoard.getCurrentRoom();
		theRoom[0].getLocation();
		theBoard.moveLeft();
		String expectOutput = theRoom[0].getLocation();
		assertEquals("Room at (9)", expectOutput);
	}
}
