
————————————————————————————————————————————————————————————————————————————————
            = phpquiz.xyz, are you a real PHP professional? 😜
————————————————————————————————————————————————————————————————————————————————


@Todo
————————————————————————————————————————————————————————————————————————————————

* Add a clean readme.md for contributors
  https://github.com/javiereguiluz/easy-admin-demo
* Compute the final score of the user


@Bugs
————————————————————————————————————————————————————————————————————————————————

* Can't set the admin password! Symfony binary bug?
* Integrity error when inserting two persons with the same Twitter or pseudo (add constraint)


@Ideas/To decide
————————————————————————————————————————————————————————————————————————————————

* Add a question uuid?
* OK to use the carbon Twitter image or host it?
* Create a timed quiz?


@Nice to have
————————————————————————————————————————————————————————————————————————————————

* Add feedback on "copy code to clipboard"


@Infra
————————————————————————————————————————————————————————————————————————————————

* Deploy on SensioCloud, ask for a free account if possible? As it is an open-source
  project.


@Refactoring/cleanup
————————————————————————————————————————————————————————————————————————————————

* DB Join on answers in the show methods to avoid join at the view level when getting
  the previous and next quiz.


References
————————————————————————————————————————————————————————————————————————————————

* https://twitter.com/FredBouchery/status/1286207296767438848 (namespace \Foo \Bar)
* https://twitter.com/FredBouchery/status/1285134865176956929 (yield '1' => 4)
* https://twitter.com/FredBouchery


@Ressources
————————————————————————————————————————————————————————————————————————————————

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

* const question = {{ question|serialize(block('jsapp') )|raw }};
* SerializerInterface  $serializer
  dump($serializer->serialize($question, 'json', ['groups' => 'show']));
  die();
