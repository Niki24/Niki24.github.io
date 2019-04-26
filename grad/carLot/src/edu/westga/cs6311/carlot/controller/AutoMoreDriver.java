package edu.westga.cs6311.carlot.controller;

import edu.westga.cs6311.carlot.model.CarLot;
import edu.westga.cs6311.carlot.view.ApplicationTUI;

/**
 * AutoMoreDriver is the entry point for the program.
 * @author Niki Giles
 * @version 12/5/18
 */
public class AutoMoreDriver {

	/**
	 * Creates a CarLot & ApplicationTUI instance
	 * and calls the ApplicationTUI's runApplication method
	 * 
	 * @param args not used
	 */
	public static void main(String[] args) {
		CarLot carLotUI = new CarLot();
		ApplicationTUI mainTUI = new ApplicationTUI(carLotUI); 
		mainTUI.runApplication();
		
	}

}
