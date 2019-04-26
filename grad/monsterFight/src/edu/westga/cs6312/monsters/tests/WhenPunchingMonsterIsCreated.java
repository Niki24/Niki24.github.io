package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;
import edu.westga.cs6312.monsters.model.PunchingMonster;

/**
 * Tests PunchingMonster's constructor method
 * 
 * @author Niki Giles
 * @version 2/16/19
 */
class WhenPunchingMonsterIsCreated {

	/**
	 * Tests PunchingMonster's constructor method
	 */
	@Test
	void testWhenPunchingMonsterToString() {
		PunchingMonster monster = new PunchingMonster();
		assertEquals("Punching Monster", monster.toString());
	}

}
