
————————————————————————————————————————————————————————————————————————————————
            = phpquiz.xyz, are you a real PHP professional? 🐘
————————————————————————————————————————————————————————————————————————————————

@Bugs
————————————————————————————————————————————————————————————————————————————————

* Joins OK in the show action, query count seems weird? To verify.
* Can't set the admin password! Symfony binary bug?


@Todo
————————————————————————————————————————————————————————————————————————————————

* New retry/rest fonction quiz controller that deletes all answers of a quiz to
  repass it without having to recreate a new quiz object.
* Implement a fonctional rule to check that there is only one correct answer by
  question
* Add a form on the home page to access a quiz by its uuid


@Refactoring/cleanup
————————————————————————————————————————————————————————————————————————————————

* Create an helper for the question image path and use it everywhere


@Quiz ideas
————————————————————————————————————————————————————————————————————————————————

* Next quiz to enter:
  * [22/09/2020] https://twitter.com/FredBouchery/status/1309397497538805760
* https://twitter.com/dkarlovi/status/1295312397780037632


@Ideas/To decide
————————————————————————————————————————————————————————————————————————————————

* Store image filename with question id or twitter random string?
* OK to use the carbon Twitter image or host it? (seems better for share)
* Add quiz menu entry
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
