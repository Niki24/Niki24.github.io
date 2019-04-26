package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;
import edu.westga.cs6312.monsters.model.GameBoard;
import edu.westga.cs6312.monsters.model.Room;


/**
 * Tests Game Board's getCurrentRoom method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenGameBoardGetCurrentRoom {

	/**
	 * Tests Game Board's getCurrentRoom method
	 */
	@Test
	void testGetCurrentRoom0() {
		GameBoard theBoard = new GameBoard();
		Room theRoom = theBoard.getCurrentRoom()[0];
		assertEquals("Room at (0)", theRoom.getLocation()); 
	}
}
