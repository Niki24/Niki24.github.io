package edu.westga.cs6312.monsters.controller;

import edu.westga.cs6312.monsters.model.GameBoard;
import edu.westga.cs6312.monsters.view.MonsterTUI;

/**
 * MonsterDriver is the entry point for the program.
 * @author Niki Giles
 * @version 2/13/19
 */
public class MonsterDriver {

	/**
	 * Creates a GameBoard instance
	 * and calls the MonsterTUI's run method
	 * 
	 * @param args not used
	 */
	public static void main(String[] args) {
		GameBoard board = new GameBoard();
		MonsterTUI newMonsterTUI = new MonsterTUI(board);
		newMonsterTUI.run();

	}

}
