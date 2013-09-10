Feature: Edit item 
	In order to change an items values
	As an admin
	I need edit and update all fields of the item

	Scenario: Edit item information
		Given there is a item in the database
		And i am on the inventory page
		When I click the edit button for an item
		Then I update the items information 
		Then I click the submit button
		Then I should get a success message at the top of the page