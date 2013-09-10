Feature: Add item to inventory
	In order to add a new product to the database
	As a admin
	I need enter the name, description, category, unit amount and price of the product

	Scenario: Add a new product 
		Given I am on the inventory page
		And I have a button named "Add Item"
		And I have clicked and been presented with a form
		And I have filled in all the fields 	
		When I click the "submit" button	
		Then I should see a success message at the top of the inventory page