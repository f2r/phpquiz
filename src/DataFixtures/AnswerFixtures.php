<?php declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Answer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AnswerFixtures extends Fixture implements DependentFixtureInterface
{
    use AppFixturesTrait;

    private const DATA = [
        /*'question_id'*/ 1 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ "Fatal error: Uncaught Error: Undefined constant 'Foo\Bar'",
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 1250,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ "Parse error: syntax error, unexpected '\' (T_NS_SEPARATOR)'",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 3750,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "Foo\Bar\A",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1750,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ "Foo\Bar\B",
                /*'correct'     =>*/  false,
                /*'poll_result' =>*/ 3250,
            ],
        ],
        /*'question_id'*/ 2 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ '42',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 4260,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ '24',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1300,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "Parse error: syntax error, unexpected '...' (T_ELLIPSIS)",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1480,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Fatal error: Uncaught Error: Cannot unpack Traversable with string keys',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 2960,
            ],
        ],
        /*'question_id'*/ 3 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'int(42)',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 6250,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'NULL',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1880,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "Fatal error: Uncaught Error: Cannot access private property B::\$foo",
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 1560,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ "Parse error: syntax error, unexpected '{'",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 310,
            ],
        ],
        /*'question_id'*/ 4 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ '[nothing]',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 1960,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'int(42)',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1740,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "string(2) 42",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 870,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ "Fatal Error (type error)",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 5430,
            ],
        ],
        /*'question_id'*/ 5 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'null',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 5200,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'a',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 3070,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "42",
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 1070,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ "[nothing]",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 670,
            ],
        ],
        /*'question_id'*/ 6 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'foo',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 2830,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'Fatal error: Uncaught TypeError: Cannot use "::class" on function name',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2670,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "Fatal error: Uncaught Error: Call to undefined function ()",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1500,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Parse error: syntax error, unexpected token "::"',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 3000,
            ],
        ],
        /*'question_id'*/ 7 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'Fatal error: Uncaught Error: Call to undefined function Foo\Bar()',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 4750,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'Fatal error: Cannot declare Foo\bar() because the name is already in use',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1630,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "BAR",
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 2130,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'BARBAR',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1500,
            ],
        ],
        /*'question_id'*/ 8 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'int(42)',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 3410,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'Fatal error: Abstract function T::get() cannot be declared private',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 3410,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "Fatal error: Abstract function T::get() cannot be declared in trait",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2200,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Obi Wan Kenobi',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 980,
            ],
        ],
        /*'question_id'*/ 9 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'not numeric: 0, not numeric: 1337',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 3330,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'not numeric: 0, numeric: 1337',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2330,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "numeric: 42, not numeric: 1337",
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 1000,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'numeric: 42, numeric: 1337',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 3330,
            ],
        ],
        /*'question_id'*/ 10 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'string, string',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 3730,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'string, array',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2060,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "Fatal error: Method Foo::__call() must take exactly 2 arguments",
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 2750,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Fatal error: A void function must not return a value',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1470,
            ],
        ],
        /*'question_id'*/ 11 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ '__invoke',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2220,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'Foo\Bar',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1110,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ 'Fatal error: Uncaught Error: Function name must be a string',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2590,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Fatal error: Uncaught Error: Object of type Foo\Bar is not callable',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 4070,
            ],
        ],
        /*'question_id'*/ 12 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'int(3)',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 2290,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'int(0)',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 8600,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ 'Fatal error: Uncaught TypeError: Foo::__set(): Argument #2 ($value) must be of type int, string given',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 5430,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Fatal error: Uncaught Error: Cannot access undefined property Foo::$x',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 0,
            ],
        ],
        /*'question_id'*/ 13 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'string(1) "B"',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 5330,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'Fatal error: Declaration of B::foo(): B must be compatible with A::foo(): A',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1000,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "Parse error: syntax error, unexpected 'static'",
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1670,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Fatal error: Cannot use ::class with dynamic class name',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2000,
            ],
        ],
        /*'question_id'*/ 14 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'bar / bar',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2730,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'foo->bar() / bar ',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 4240,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ "() / bar",
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 1520,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Parse error',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1520,
            ],
        ],
        /*'question_id'*/ 15 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'Fatal error: Uncaught TypeError',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 230,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'Fatal error: Uncaught Error: Cannot access private property',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 680,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ 'Fatal error: Uncaught Error: Using $this when not in object context',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 5450,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'bar',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 3640,
            ]
        ],
        /*'question_id'*/ 16 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'end',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2960,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'fooend',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 4070,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ 'foofooend',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 930,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Parse Error',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2040,
            ]
        ],
        /*'question_id'*/ 17 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ 'Notice + NULL',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1800,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ 'int(5)',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 600,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ 'string(1) "5"',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2000,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'Fatal TypeError',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 5600,
            ]
        ],
        /*'question_id'*/ 18 => [
            [
                /*'code'        =>*/ 'A',
                /*'label'       =>*/ '[10][20]',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2390,
            ],
            [
                /*'code'        =>*/ 'B',
                /*'label'       =>*/ '[10][2]',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 2830,
            ],
            [
                /*'code'        =>*/ 'C',
                /*'label'       =>*/ '[10] TypeError',
                /*'correct'     =>*/ true,
                /*'poll_result' =>*/ 3700,
            ],
            [
                /*'code'        =>*/ 'D',
                /*'label'       =>*/ 'ParseError',
                /*'correct'     =>*/ false,
                /*'poll_result' =>*/ 1090,
            ]
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach ($this->loadYaml(self::class)['answers'] ?? [] as $questionId => $questions) {
            //dump($questionId, $questions); die();
            $question = $this->getQuestion($questionId);
            foreach ($questions as $questionArr) {
                [$code, $label, $correct, $pollResult] = array_values($questionArr);
                $answer = (new Answer())
                    ->setCode($code)
                    ->setLabel($label)
                    ->setQuestion($question)
                    ->setCorrect($correct)
                    ->setPollResult((int) $pollResult);

                $manager->persist($answer);
            }
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            QuestionFixtures::class,
        ];
    }
}
