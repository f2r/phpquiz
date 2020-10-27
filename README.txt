
————————————————————————————————————————————————————————————————————————————————
            = phpquiz.xyz, are you a real PHP professional? 🐘
————————————————————————————————————————————————————————————————————————————————

@Bugs
————————————————————————————————————————————————————————————————————————————————

* Fixed the assets target in the MakeFile
* Joins OK in the show action, query count seems weird? To verify.


@Todo
————————————————————————————————————————————————————————————————————————————————

* Add the doc to add a snippet (at least put a reference commit)
* Put fixtures in YAML files (use AliceFixtures bundle?).
* Add PHP versions the quiz is related too. Show in the question header.
* Added a command to generete a new question in fixtures


@Tests
————————————————————————————————————————————————————————————————————————————————

* Add code coverage


@Refactoring/cleanup
————————————————————————————————————————————————————————————————————————————————

* Fixture cleanup for local caching, it should be handled by Doctrine itself,
  to verifiy.


@Quiz ideas
————————————————————————————————————————————————————————————————————————————————

* Next quiz to enter:
- [23/10/2020] https://twitter.com/FredBouchery/status/1320663980898164737
- Typical commit to add a quiz: https://github.com/strangebuzz/phpquiz/commit/44b83215de64b28db32e7cd353b2307d45bd7271


@Ideas/To decide
————————————————————————————————————————————————————————————————————————————————

* Store image filename with question id or twitter random string?
* OK to use the carbon Twitter image or host it? (seems better for share)
* Mailing list to notify when a new quiz is out?
* Or create a simple RSS?


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

* https://github.com/strangebuzz/phpquiz/commit/44b83215de64b28db32e7cd353b2307d45bd7271
* https://twitter.com/FredBouchery


@Ressources
————————————————————————————————————————————————————————————————————————————————

* https://symfony.com/doc/master/bundles/EasyAdminBundle/actions.html#adding-actions
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
