
————————————————————————————————————————————————————————————————————————————————
            = phpquiz.xyz, are you a real PHP professional? 🐘
————————————————————————————————————————————————————————————————————————————————

@Bugs
————————————————————————————————————————————————————————————————————————————————

* Joins OK in the show action, query count seems weird? To verify.
* Can't set the admin password! Symfony binary bug?


@Todo
————————————————————————————————————————————————————————————————————————————————


@Tests
————————————————————————————————————————————————————————————————————————————————

* Add functional tests for quiz resume (AppController:home)
* Add functional tests to answer all the questions of the test quiz and check
  the score computation.
* Add code coverage


@Refactoring/cleanup
————————————————————————————————————————————————————————————————————————————————


@Quiz ideas
————————————————————————————————————————————————————————————————————————————————

* Next quiz to enter: https://twitter.com/FredBouchery/status/1314100784838119424


@Ideas/To decide
————————————————————————————————————————————————————————————————————————————————

* Store image filename with question id or twitter random string?
* OK to use the carbon Twitter image or host it? (seems better for share)
* Mailing list to notify when a new quiz is out?
* Or create a simple RSS ?


@Nice to have
————————————————————————————————————————————————————————————————————————————————

* Allow to choose the number of questions to pass (when more than 50)


@Infra
————————————————————————————————————————————————————————————————————————————————

* Deploy on bref.sh?
* Deploy on SensioCloud, ask for a free account if possible? As it is an open-source
  project.


@Social/Twitter
————————————————————————————————————————————————————————————————————————————————

* https://cards-dev.twitter.com/validator


@References
————————————————————————————————————————————————————————————————————————————————

* https://twitter.com/FredBouchery


@Ressources
————————————————————————————————————————————————————————————————————————————————

* https://docs.moodle.org/dev/Quiz_database_structure
* https://codeseven.github.io/toastr/
* https://clipboardjs.com/
* https://twig.symfony.com/doc/2.x/functions/block.html
* https://schema.org
* https://carbon.now.sh
* About the .xyz TLD: https://en.wikipedia.org/wiki/.xyz


@Tweets
————————————————————————————————————————————————————————————————————————————————


@SEO
————————————————————————————————————————————————————————————————————————————————


@Design/CSS
————————————————————————————————————————————————————————————————————————————————

* https://purecss.io/
* https://favicon.io/emoji-favicons/elephant/


@Webperfs
————————————————————————————————————————————————————————————————————————————————


@Debug
————————————————————————————————————————————————————————————————————————————————

* //dump($question, $question->getSuggestedBy(), $question->getPreviousQuestion(), $question->getNextQuestion(), $question->getAnswers());
* const question = {{ question|serialize(block('jsapp') )|raw }};
