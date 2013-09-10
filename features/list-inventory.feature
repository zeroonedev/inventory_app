Feature: List inventory
	In order to see all items in the inventory
	As a user
	I need to see a table with id, product name, category, stock and edit button of each item

	Scenario: List all items in the database
		Given there are items in the database 
		When I click on the inventory link in the nav bar
		Then I should see a table with all the items