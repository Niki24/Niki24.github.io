package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.Player;


/**
 * Tests Player's getHealthCredits method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenPlayerGetHealthCredits {

	/**
	 * Tests Player's getHealthCredits method
	 */
	@Test
	void testWhenPlayerGetHealthCredits() {
		Player newPlayer = new Player();
		int acutalPlayerCredits = newPlayer.getHealthCredits();
		assertEquals(100, acutalPlayerCredits);
	}
}
