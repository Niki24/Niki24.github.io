package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.Player;


/**
 * Tests Player's constructor method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenPlayerIsCreated {

	/**
	 * Tests Player's create method
	 */
	@Test
	void testPlayerToString() {
		Player newPlayer = new Player();
		String expectePlayerOutput = newPlayer.toString();
		assertEquals("The player has 100 health credits", expectePlayerOutput);
	}
}
