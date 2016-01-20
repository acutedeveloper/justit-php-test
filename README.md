# PHP Test for Just IT Recruitment - Nigel Peters

### Question 1: What is OOP and what are the advantages over procedural programming?

OOP stands for Object Oriented Programming. Procedural programming is a process where the program follows a linear set of instructions.

The advantages of OOP over procedural programming are:

* With the code being organised into objects / classes, it creates a code base that is easier to maintain and upgrade
* Having code broken into objects, that are organised according to their specific function, it allows teams of developers to work in tandem on bigger applications, particularly with the added use of Name spacing.
* Objects / classes can be easily reused in other projects
* It allows for the development of more complex applications that at the same time flexible.
* It helps to facilitate programming paradigms such a MVC ( Model, View, Controller)

### Question 2: What is a TDD methodology?

TDD stands for Test Driven Development. From what I understand this methodology involves, a process of creating a series of tests depicting different scenarios / user cases for a particular function to pass against.

The process continues with a cycle of refactoring code and running tests until, the function has passed the test of all the defined user cases.

### Question 3: In the development cycle of an application or a new feature what would you say is the first step?

Clearly defining what the user requirements are that need to met. This would typically be done with the client or relevant stakeholders. Once this has been done, can we then move onto, planning the technical structure of the application / feature.

### Question 4: What is the difference between a static method and a dynamic method? Provide an example of usage and optionally examples of situations in which either is the best choice.

A static method is one that does not change it properties unlike dynamic which does.

### Question 5:

I have uploaded my example to this github repository. A full working version can be seen here: http://php-lamp-104185.nitrousapp.com:3000/justit-php-test/

### Question 6:

Not sure.

### Question 7: What will be the output of each of the echo statements?

Echo 1: 100

Echo 2: 200

```php

class foo
{
  public function change1( $input )
  {
    $input = 200;
  }
  public function change2( $input )
  {
    $input->value = 200;
  }
}
class bar
{
  public $value;
}

$obj = new foo();
$var = new bar();

// Object variable set with a value of 100
$var->value = 100;

$obj->change1( $var->value );
echo $var->value;
// Value 100

$var->value = 100;
$obj->change2( $var );
echo $var->value;
// Value 200
```

### Question 8: What will be the result of running this script?

An error. $multiply is instantiating a new object.
run() is a static function.
To enable the function output a result the public function will have to be converted to a public function. The called using the ->. Code modified below.

```php

class multiply
{
  private $multiplier;
  function __construct( $multiplier )
  {
    $this->multiplier = $multiplier;
  }
  public function run( $input )
  {
    return $input * $this->multiplier;
  }
}
$multiply = new multiply( 20 );
echo multiply->run( 20 );

```

### Question 9: What is the error in this script?

The switch cases do not have any break; statements.

### Question 10: What is the error in this script?

Again the switch cases do not have any break; statements. This will cause the switch statement to continue.