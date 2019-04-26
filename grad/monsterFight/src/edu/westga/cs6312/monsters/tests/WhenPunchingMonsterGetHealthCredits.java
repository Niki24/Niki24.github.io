package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;

import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.PunchingMonster;

/**
 * Tests PunchingMonster's getHealthCredits method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenPunchingMonsterGetHealthCredits {

	/**
	 * Tests PunchingMonster's getHealthCredits method
	 */
	@Test
	void testPunchingMonsterHealthCreditsAt75() {
		PunchingMonster monster = new PunchingMonster();
		assertEquals(75, monster.getHealthCredits());
	}
}
