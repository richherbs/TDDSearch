    <?php

    use PHPUnit\Framework\TestCase;
    require_once '../Greeter.php';
    
    class GreeterTest extends TestCase
    {
        public function testSuccessGreet()
        {
            $input = "Bob";
            $expected = "Hello Bob";
            $actual = greet($input);

            $this->assertEquals($expected, $actual);
        }

        public function testNullGreet()
        {
            $input = null;
            $expected = "Hello my friend";
            $actual = greet($input);

            $this->assertEquals($expected, $actual);
        }

        public function testShoutGreet()
        {
            $input = "BOB";
            $expected = "HELLO BOB";
            $actual = greet($input);

            $this->assertEquals($expected, $actual);
        }

        public function testArrayOfTwoGreet()
        {
            $input = ["Bob", "Gene"];
            $expected = "Hello Bob and Gene";
            $actual = greet($input);

            $this->assertEquals($expected, $actual);
        }

        public function testArrayOfManyGreet()
        {
            $input = ["Bob", "Gene", "Harold"];
            $expected = "Hello Bob, Gene and Harold";
            $actual = greet($input);

            $this->assertEquals($expected, $actual);
        }

        public function testArrayOfManyGreetShout()
        {
            $input = ["Bob", "GENE", "Harold", "Gerald"];
            $expected = "Hello Bob, Harold and Gerald. HELLO GENE!";
            $actual = greet($input);

            $this->assertEquals($expected, $actual);
        }

        public function testArrayOfManyGreetShout()
        {
            $input = ["Bob", "GENE", "Harold", "Gerald", "Jeff, Julie"];
            $expected = "Hello Bob, Harold and Gerald. HELLO GENE!";
            $actual = greet($input);

            $this->assertEquals($expected, $actual);
        }
    }

// Requirement 1
// Write a method/function greet($name) that interpolates $name in a simple greeting. For example, when $name is "Bob", the method should return a string "Hello, Bob.".

// Requirement 2
// Handle nulls. For example, when $name is null, then the method should return the string "Hello, my friend."

// Requirement 3
// Handle shouting. When $name is all uppercase, then the method should shout back to the user. For example, when $name is "JERRY" then the method should return the string "HELLO JERRY!"

// Requirement 4
// Handle two names of input. When $name is an array of two names, then both names should be printed. For example, when $name is ["Jill", "Jane"], then the method should return the string "Hello, Jill and Jane."

// Requirement 5
// Handle an arbitrary number of names as input. When $name represents more than two names, separate them with commas and close with an Oxford comma and "and". For example, when $name is ["Amy", "Brian", "Charlotte"], then the method should return the string "Hello, Amy, Brian, and Charlotte."

// Requirement 6
// Allow mixing of normal and shouted names by separating the response into two greetings. For example, when $name is ["Amy", "BRIAN", "Charlotte"], then the method should return the string "Hello, Amy and Charlotte. AND HELLO BRIAN!"

// Requirement 7
// If any entries in name are a string containing a comma, split it as its own input. For example, when $name is ["Bob", "Charlie, Dianne"], then the method should return the string "Hello, Bob, Charlie, and Dianne.".