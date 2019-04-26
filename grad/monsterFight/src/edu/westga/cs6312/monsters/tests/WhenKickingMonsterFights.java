package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.KickingMonster;

/**
 * Tests KickingMonster's fight method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenKickingMonsterFights {

	/**
	 * Tests KickingMonster's fight method
	 */
	@Test
	void testKickingMonsterWhenTakeDamage() {
		KickingMonster monster = new KickingMonster();
		int acutalHealth = monster.fight();
		assertEquals(70, acutalHealth);
	}
}
