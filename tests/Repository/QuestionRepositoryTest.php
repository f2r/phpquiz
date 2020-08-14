<?php declare(strict_types=1);

namespace App\Tests\Repository;

use App\DataFixtures\QuestionFixtures;
use App\Entity\Question;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * @covers QuestionRepository
 */
class QuestionRepositoryTest extends KernelTestCase
{
    private QuestionRepository $repo;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->repo = self::$container->get(QuestionRepository::class);
    }

    /**
     * @covers QuestionRepository::findOneWithNav
     *
     * @see QuestionFixtures
     */
    public function testFindOneWithNav(): void
    {
        $question = $this->repo->findOneWithNav(2);
        self::assertInstanceOf(Question::class, $question);
        self::assertInstanceOf(Question::class, $question->getPreviousQuestion());
        self::assertInstanceOf(Question::class, $question->getNextQuestion());
    }
}