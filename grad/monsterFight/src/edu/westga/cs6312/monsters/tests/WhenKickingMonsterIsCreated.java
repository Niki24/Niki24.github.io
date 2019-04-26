package edu.westga.cs6312.monsters.tests;


import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.KickingMonster;

/**
 * Tests KickingMonster's constructor method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenKickingMonsterIsCreated {

	/**
	 * Tests KickingMonster's constructor method
	 */
	@Test
	void testKickingMonsterToString() {
		KickingMonster monster = new KickingMonster();
		String actualMonsterOutput = monster.toString();
		assertEquals("Kicking Monster", actualMonsterOutput);
	}
}
