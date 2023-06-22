# testcode
test for digitaltolk

# What makes it amazing code
1-  A class should contain methods that are directly related to that purpose as suggests by single responsibility principal and avoid taking on additional responsibilities that this repo have. This helps maintain code organization, readability and complexity

2- It is generally recommended to keep classes focused and coherent. A class with a small number of well-defined methods tends to be more maintainable and easier to understand than a class with a large number of methods that perform diverse tasks

3- It's important to prioritize code readability and maintainability to coding standards over line of code limits. Well-structured and readable code is generally preferred over long, convoluted methods. Breaking down complex tasks into smaller, reusable functions can help improve code organization and readability.

4- There should be 3-4 return statement in one function according to standard.

# what's terrible about it
1- Large methods with excessive lines of code and numerous conditions making the code less readable. It is very challenging to identify the logic and understand the flow of execution. This lack of readability increases the time-consuming to debug or modify the code.

2- What I have seen in this repo have unused variables, comment out code that make this code less readable. And multiple return statement in single function that is what against the standard.

3- Query those are loading there relationship with complete objects that is not optimize.

4- Long if-else block with early returns without checking the code after if-else block.

# How would I have done it

1- Each class should have a clear and single responsibility. If a class has too many methods and conditions, it might be an indication that it needs to be refactored into smaller, more focused classes for code readablity.

2- Break down the class into smaller methods with well-defined purposes. This improves code organization and makes it easier to understand, test, and maintain

3- Identify common code patterns and extract them into reusable functions or utility classes. This helps reduce duplication and improves code maintainability

4- Write unit tests for each method to ensure they behave as expected. This helps in verifying the correctness of the code and allows for easier refactoring in the future


# what I have done in refactoring

1- I identified areas where the code could be optimized, such as reducing unnecessary database queries and improving performance. For example, I suggested querying all users at once instead of multiple individual queries within a loop. and also used pluck to extract specific fields that is required in method rather than calling complete objects

2- I noticed some variables that were declared but not used within the code. I have removed these variables to improve code readability.

3- I identified long if-else blocks and suggested refactoring them to improve code readability and maintainability. One example was the changeStartedStatus function, where a switch statement was used, I have refactor the logic into separate functions to make the code more modular and easier to understand.

4-  I used null coalescing operator and ternary operator in many cases rather then if else long block.

5- Updated the variable assignment for $array to use array literal syntax ([]) instead of the array() function

6- Used camelCase naming conventions for variables in many places (according to standard)

7- Adjusted the indentation and formatting.

8- Simplified the assignment of models by using the first() method instead of get()->first(). This helps in query optimization

9- Created a separate calculateTimeDifference function to calculate the time difference between the due date and completed date.

10- Created a separate formatSessionTime function to format the session time in the desired format.

11- Extracted the email sending logic into a separate sendEmail function to avoid code duplication.


# Test Cases

I have created test cases for the mentions method which is in tests folder 




