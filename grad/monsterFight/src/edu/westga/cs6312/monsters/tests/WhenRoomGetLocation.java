package edu.westga.cs6312.monsters.tests;

import static org.junit.Assert.assertEquals;
import org.junit.jupiter.api.Test;

import edu.westga.cs6312.monsters.model.Room;


/**
 * Tests Room's getLocation method
 * 
 * @author Niki Giles
 * @version 2/13/19
 */
class WhenRoomGetLocation {

	/**
	 * Tests Room's getLocation method at room 0
	 */
	@Test
	void testGetLocationAtRoom0() {
		Room newRoom = new Room(0);
		String acutalRoomLocation = newRoom.getLocation();
		assertEquals("Room at (0)", acutalRoomLocation);
	}
	
	/**
	 * Tests Room's getLocation method at room 2
	 */
	@Test
	void testGetLocationAtRoom2() {
		Room newRoom = new Room(2);
		String acutalRoomLocation = newRoom.getLocation();
		assertEquals("Room at (2)", acutalRoomLocation);
	}
	
	/**
	 * Tests Room's getLocation method at room 9
	 */
	@Test
	void testGetLocationAtRoom9() {
		Room newRoom = new Room(9);
		String acutalRoomLocation = newRoom.getLocation();
		assertEquals("Room at (9)", acutalRoomLocation);
	}
}
