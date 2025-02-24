@managing_orders
Feature: Resending an order confirmation email for a chosen order
    In order to be able to send a lost email again
    As an Administrator
    I want to have the order confirmation email for a chosen order sent to the customer

    Background:
        Given the store operates on a single channel in "United States"
        And that channel allows to shop using "English (United States)" and "Polish (Poland)" locales
        And the store has a product "Angel T-Shirt"
        And the store ships everywhere for Free
        And the store allows paying with "Cash on Delivery"
        And there is a customer "lucy@teamlucifer.com" that placed an order "#00000666"
        And the customer bought a single "Angel T-Shirt"
        And the customer "Lucifer Morningstar" addressed it to "Seaside Fwy", "90802" "Los Angeles" in the "United States" with identical billing address
        And the customer chose "Free" shipping method with "Cash on Delivery" payment
        And I am logged in as an administrator

    @ui @email @api
    Scenario: Resending a confirmation email for a given order
        When I view the summary of the order "#00000666"
        And I resend the order confirmation email
        Then I should be notified that the order confirmation email has been successfully resent to the customer
        And an email with the confirmation of the order "#00000666" should be sent to "lucy@teamlucifer.com"

    @ui @email @api
    Scenario: Sending a confirmation email after shipping an order in different locale than the default one
        Given the order "#00000666" has been placed in "Polish (Poland)" locale
        When I view the summary of the order "#00000666"
        And I resend the order confirmation email
        Then I should be notified that the order confirmation email has been successfully resent to the customer
        And an email with the confirmation of the order "#00000666" should be sent to "lucy@teamlucifer.com" in "Polish (Poland)" locale
