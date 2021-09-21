# Test List

- [x] Print number 1
- [x] Print number 3
- [x] Print number 5
- [x] Print number 15
- [x] Print all numbers up to 100

# Final comment

As you can see from git history, I first created a test for each specific step (1 to 1, 3 to Fizz, 5 to Buzz, 15 to FizzBuzz, etc...).
Then, I created a full test for the entire result (I could have done it as first step, would have been kind of ATDD).
Once the final test was running, I think the old test became uselesse, for multiple reasons:
- the complete test cover each number from 1 to 100 + their merge in a single output
- the method that convert a number to a string was not needed as public in the application, but only in tests

So I removed the old tests, then used the big final test to complete the refactoring.
