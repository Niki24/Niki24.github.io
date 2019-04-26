package edu.westga.cs6311.carlot.tests;

import edu.westga.cs6311.carlot.model.Car;
import edu.westga.cs6311.carlot.model.CarLot;

/**
 * CarLotTester adds Car objects to the CarLot class
 * @author Niki Giles
 * @version 12/5/18
 */
public class CarLotTester {
	
	private CarLot carLotTest;
	
	/**
	 *  CarLotTester constructor creates new carLot object to test method
	 */
	public CarLotTester() {
		this.carLotTest = new CarLot();
	}
	
	/**
	 *  testCars method creates new car objects and tests the carLot methods
	 */
	public void testCars() {
		Car carTest1 = new Car("Toyota", "Corolla", 43000);
		Car carTest2 = new Car("Hummer", "Corolla", 200000);
		
		this.carLotTest.createLot();
		this.carLotTest.addCar(carTest1.getMake(), carTest1.getModel(), carTest1.getPrice());
		this.carLotTest.addCar(carTest2.getMake(), carTest2.getModel(), carTest2.getPrice());
		this.carLotTest.getLeastExpensive();
		this.carLotTest.getMostExpensive();
		this.carLotTest.getAveragePrice();
		this.carLotTest.getTotalValue();
		
		this.carLotTest.findCar("Ford", "");

		System.out.println(this.carLotTest.toString());
	
	}

}
