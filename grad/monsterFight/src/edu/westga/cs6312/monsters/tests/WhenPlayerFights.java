package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.Player;

/**
 * Tests Player's fight method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenPlayerFights {

	/**
	 * Tests Player's fight method
	 */
	@Test
	void testWhenPlayerFights() {
		Player newPlayer = new Player();
		int acutalPlayerHealth = newPlayer.fight();
		assertEquals(50, acutalPlayerHealth);
	}
}
