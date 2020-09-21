<?php declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class QuestionFixtures extends Fixture implements DependentFixtureInterface
{
    use AppFixturesTrait;

    public const DATA = [
        [
            /*'previous_question'        =>*/ null,
            /*'id'                       =>*/ 1,
            /*'next_question'            =>*/ 2,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed?',
            /*'reminder'                 =>*/ "Namespaces can't begin with a backslash.",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/EdmGDDEXoAAcmsH?format=png&name=small',
            /*'answer_explanations'      =>*/ 'PHP namespaces can contain space characters, but they can\'t begin with a backslash. The right answer was "A".',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/pQOMe',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1286207302018699264',
            /*'differences_output_notes' =>*/ 'As I am writing this quiz (2020-07-31), there is a slight difference between all versions and PHP 8.0.0alpha3:<br/>With this last version, the exception message "Foo\Bar" is wrapped by double quotes instead of single quotes for other versions (\'Foo\Bar\'). 🤔',
            /*'created_at'               =>*/ '2020-07-23',
            /*'updated_at'               =>*/ '2020-07-23',
        ],
        [
            /*'previous_question'        =>*/ 1,
            /*'id'                       =>*/ 2,
            /*'next_question'            =>*/ 3,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed (PHP version >= 7.4)?',
            /*'reminder'                 =>*/ "Can't unpack a traversable if keys are string.",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/EdW2xTnXYAIDjBP?format=png&name=small',
            /*'answer_explanations'      =>*/ '7.4 unpack a Traversable by keeping the iteration order, but it fails when the keys are strings, even if those strings are numeric. The right answer was "D".',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/qKGPt',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1285134865176956929',
            /*'differences_output_notes' =>*/ null,
            /*'created_at'               =>*/ '2020-07-20',
            /*'updated_at'               =>*/ '2020-07-20',
        ],
        [
            /*'previous_question'        =>*/ 2,
            /*'id'                       =>*/ 3,
            /*'next_question'            =>*/ 4,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed?',
            /*'reminder'                 =>*/ "property_exists finds private properties but we can't access it.",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/Ec8_XgPXsAEypnr?format=png&name=small',
            /*'answer_explanations'      =>*/ 'PHP function <code>property_exists</code> will find the private property, but you cannot access to it. The right answer was "C".',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/1Qe3c',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1283314819228225537',
            /*'differences_output_notes' =>*/ null,
            /*'created_at'               =>*/ '2020-07-15',
            /*'updated_at'               =>*/ '2020-07-15',
        ],
        [
            /*'previous_question'        =>*/ 3,
            /*'id'                       =>*/ 4,
            /*'next_question'            =>*/ 5,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed?',
            /*'reminder'                 =>*/ "PHP functions prefixed by array_ expect an array",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/EfsQiZQX0AA39FK?format=jpg&name=small',
            /*'answer_explanations'      =>*/ 'All PHP functions prefixed by "array_" expect an array, and not a traversable/iterator. The result is "[nothing]" (A). Note: If the values had been in an array it would have been "int(42)" because internal array functions do not follow strict typing.',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/kKt77',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1295648502370926593',
            /*'differences_output_notes' =>*/ null,
            /*'created_at'               =>*/ '2020-08-18',
            /*'updated_at'               =>*/ '2020-08-18',
        ],
        [
            /*'previous_question'        =>*/ 4,
            /*'id'                       =>*/ 5,
            /*'next_question'            =>*/ 6,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed?',
            /*'reminder'                 =>*/ "array_merge reorders numeric keys.",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/EgKx3TdXsAEauEX?format=jpg&name=small',
            /*'answer_explanations'      =>*/ 'When you use the PHP function <code>array_merge</code>, all values in the input arrays with numeric keys will be renumbered with incrementing keys starting from zero. The right answer was "42" (C).',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/lb1YD',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1297796014338973697',
            /*'differences_output_notes' =>*/ null,
            /*'created_at'               =>*/ '2020-08-24',
            /*'updated_at'               =>*/ '2020-08-24',
        ],
        [
            /*'previous_question'        =>*/ 5,
            /*'id'                       =>*/ 6,
            /*'next_question'            =>*/ 7,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed?',
            /*'reminder'                 =>*/ "Can call ::class on function.",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/EgaScdJX0AECpMV?format=jpg&name=small',
            /*'answer_explanations'      =>*/ 'The PHP class name resolution using ::class is a compile time transformation. As a consequence, class names are expanded even if the class does not exist. No error is issued in that case. The right answer was "A".',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/FVUEu',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1298887883244396544',
            /*'differences_output_notes' =>*/ null,
            /*'created_at'               =>*/ '2020-08-27',
            /*'updated_at'               =>*/ '2020-08-27',
        ],
        [
            /*'previous_question'        =>*/ 6,
            /*'id'                       =>*/ 7,
            /*'next_question'            =>*/ 8,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed?',
            /*'reminder'                 =>*/ "One can use the same name for a class, a method, a function and a constant.",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/EgvJgopXsAA8FGJ?format=jpg&name=small',
            /*'answer_explanations'      =>*/ 'You can use the same name for a class, a method, a function and a constant. In addition, functions and classes are case-insensitive. The right answer was "BAR" (C). "BARBAR" happens for versions prior to #PHP 8 when there is no namespace.',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/6NXXh',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1300355047440683010',
            /*'differences_output_notes' =>*/ null,
            /*'created_at'               =>*/ '2020-08-31',
            /*'updated_at'               =>*/ '2020-08-31',
        ],
        [
            /*'previous_question'        =>*/ 7,
            /*'id'                       =>*/ 8,
            /*'next_question'            =>*/ 9,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed in current supported PHP version? (<8)',
            /*'reminder'                 =>*/ "An abstract method cannot be private (PHP 7).",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/EhS0HiFWAAEOmYb?format=jpg&name=small',
            /*'answer_explanations'      =>*/ 'An abstract method cannot be private and this will raise a fatal error during compile time. The right answer was "B". This will change with PHP 8 which will be able to declare a abstract private method in a trait (answer "A")',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/9pubJ',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1302865230653988865',
            /*'differences_output_notes' =>*/ 'An abstract method can be private with PHP 8, the correct answer in this case is "A" (int 42).',
            /*'created_at'               =>*/ '2020-09-07',
            /*'updated_at'               =>*/ '2020-09-07',
        ],
        [
            /*'previous_question'        =>*/ 8,
            /*'id'                       =>*/ 9,
            /*'next_question'            =>*/ 10,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed in current supported PHP version? (<8)',
            /*'reminder'                 =>*/ "A numeric value can be prefixed by blank characters, but not after.",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/EhnaramXYAEE2hp?format=jpg&name=small',
            /*'answer_explanations'      =>*/ 'A numeric value can be prefixed by blank characters, but not after. The right answer was "C". This will change with PHP 8 which will accept blank characters after.',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/WEi6L',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1304314751628070912',
            /*'differences_output_notes' =>*/ 'With PHP 8 the right answer is "D".',
            /*'created_at'               =>*/ '2020-09-11',
            /*'updated_at'               =>*/ '2020-09-11',
        ],
        [
            /*'previous_question'        =>*/ 9,
            /*'id'                       =>*/ 10,
            /*'next_question'            =>*/ null,
            /*'person_id'                =>*/ 1,
            /*'difficulty_id'            =>*/ 3,
            /*'label'                    =>*/ 'What will be displayed in current supported PHP version? (<8)',
            /*'reminder'                 =>*/ "PHP magic methods must be declared with the exact number of parameters.",
            /*'codeImage'                =>*/ 'https://pbs.twimg.com/media/Eh8DgSUXsAEnJin?format=jpg&name=small',
            /*'answer_explanations'      =>*/ 'PHP magic methods must be declared with the exact number of parameters. It is not necessary to specify type, but if you do, the first one must be a string and the second an array. The right answer was "C".',
            /*'live_snippet_url'         =>*/ 'https://3v4l.org/9WApp',
            /*'twitter_poll_url'         =>*/ 'https://twitter.com/FredBouchery/status/1305768968398024704',
            /*'differences_output_notes' =>*/ '',
            /*'created_at'               =>*/ '2020-09-15',
            /*'updated_at'               =>*/ '2020-09-15',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::DATA as [$previousQuestionId, $id, $nextUqestionId, $personId,
            $difficultyId, $label, $reminder, $codeImage, $answerExplanations, $liveSnippetUrl,
            $twitterPollUrl, $differencesOutputNotes, $createdAt, $updatedAt]) {
            $createdAtDateTime = date_create($createdAt);
            $updatedAtDateTime = date_create($updatedAt);
            if (!$createdAtDateTime instanceof \DateTimeInterface || !$updatedAtDateTime instanceof \DateTimeInterface) {
                throw new \InvalidArgumentException(sprintf('Invalide create (%s) or update date (%s).', $createdAt, $updatedAt));
            }

            $question = (new Question())
                ->setSuggestedBy($this->getPerson($personId))
                ->setDifficulty($this->getDifficulty($difficultyId))
                ->setLabel($label)
                ->setReminder($reminder)
                ->setCodeImage($codeImage)
                ->setAnswerExplanations($answerExplanations)
                ->setLiveSnippetUrl($liveSnippetUrl)
                ->setTwitterPollUrl($twitterPollUrl)
                ->setDifferencesOutputNotes($differencesOutputNotes)
                ->setCreatedAt($createdAtDateTime)
                ->setUpdatedAt($updatedAtDateTime);

            $manager->persist($question);
            $this->addReference(self::class.$id, $question);
        }

        // prev and next questions
        foreach (self::DATA as [$previousQuestionId, $id, $nextUqestionId, $personId,
            $label, $codeImage, $answerExplanations, $liveSnippetUrl,
            $twitterPollUrl, $differencesOutputNotes, $createdAt, $updatedAt]) {
            $previousQuestion = is_int($previousQuestionId) ? $this->getQuestion($previousQuestionId) : null;
            $nextQuestion = is_int($nextUqestionId) ? $this->getQuestion($nextUqestionId) : null;
            $this->getQuestion($id)
                ->setPreviousQuestion($previousQuestion)
                ->setNextQuestion($nextQuestion);
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            PersonFixtures::class,
            DifficultyFixtures::class,
        ];
    }
}
