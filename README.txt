
————————————————————————————————————————————————————————————————————————————————
            = phpquiz.xyz, are you a real PHP professional? 😜
————————————————————————————————————————————————————————————————————————————————


@Todo
————————————————————————————————————————————————————————————————————————————————

* Add a third question
* Add a clean readme.md for contributors
* Put the carbon image as the social image in the show page
* Handle the selected menu item


@Bugs
————————————————————————————————————————————————————————————————————————————————


@Ideas/To decide
————————————————————————————————————————————————————————————————————————————————

* Added the Twitter poll results for each answzer?
* Add a question uuid?
* OK to use the carbon Twitter image or host it?
* Create a timed quiz?
* Create a Symfony form for the answers?


@Infra
————————————————————————————————————————————————————————————————————————————————

* Deploy on SensioCloud, ask for a free account if possible? As it is an open-source
  project.


@Refactoring/cleanup
————————————————————————————————————————————————————————————————————————————————

* DB Join on answers in the show method
* Rename app.js to show.js (add a bacic app.js + create a sf slot for this)


References
————————————————————————————————————————————————————————————————————————————————

* https://twitter.com/FredBouchery/status/1286207296767438848 (namespace \Foo \Bar)
* https://twitter.com/FredBouchery/status/1285134865176956929 (yield '1' => 4)
* https://twitter.com/FredBouchery


@Ressources
————————————————————————————————————————————————————————————————————————————————

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

* SerializerInterface  $serializer
  dump($serializer->serialize($question, 'json', ['groups' => 'show']));
  die();
