package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.KickingMonster;

/**
 * Tests KickingMonster's getHealthCredits method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenKickingMonsterGetHealthCredits {

	/**
	 * Tests KickingMonster's getHealthCredits method
	 */
	@Test
	void testKickingMonsterHealthCreditsAt100() {
		KickingMonster monster = new KickingMonster();
		int acutalHealthCredits = monster.getHealthCredits();
		assertEquals(100, acutalHealthCredits);
	}
}
