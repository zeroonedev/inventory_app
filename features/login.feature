Feature: Login
	In order to access the application
	As a user
	I need enter a correct username and password

	Scenario: Enter username and password to access app
		Given I am on the login screen
		And i enter the username "foo"
		And i enter the password "bar"
		When I click the login button
		Then I should be redirected to the home page 