<?php

if (!function_exists('getStaticData')) {
  function getStaticData()
  {
    return [
      (object) [
        'id' => 'angiographie',
        'title' => 'L’angiographie',
        'shortDescription' => "L'angiographie permet de voir les vaisseaux sanguins non visibles sur les radiographies et de détecter des anomalies des tissus rétiniens.",
        'poster' => '/assets/img/neurons1.png',
        'content' => " <h1>Qu'est-ce que <span>l’angiographie </span>?</h1>
                <p>
                  <strong>L' angiographie rétinienne</strong> est une technique
                  d'imagerie utilisée pour évaluer la perfusion capillaire
                  rétinienne. Elle permet d'obtenir des images détaillées des
                  vaisseaux sanguins de la rétine, ce qui peut aider l'ophtalmologue
                  à diagnostiquer et à surveiller certaines
                  <strong>affections oculaires</strong>, les maladies oculaires qui
                  peuvent nécessiter une angiographie rétinienne sont les suivantes
                  :
                </p>
                <ul>
                  <li>. Occlusion (thrombose) des vaisseaux de la rétine</li>
                  <li>. Rétinopathie diabétique</li>
                  <li>. Dégénérescence maculaire liée à l'âge (DMLA)</li>
                  <li>. Uvéite postérieure (inflammation)</li>
                  <li>. Tumeurs de la rétine</li>
                  <li>. Maladies inflammatoires de la rétine</li>
                  <li>. Hypertension artérielle</li>
                  <li>
                    . Autres maladies du fond d'œil nécessitant une analyse de la
                    circulation sanguine de la rétine
                  </li>
                </ul>
                <h3>Comment se déroule une angiographie ?</h3>
                <p>
                  L'angiographie est un examen médical utilisant des
                  <strong>rayons X</strong> pour visualiser les vaisseaux sanguins.
                  Après injection d'un produit de contraste, des images détaillées
                  sont prises pour détecter d'éventuelles anomalies vasculaires.
                </p>",
        'image' => '/assets/img/angio.jpg',
        'faq' => [
          [
            'question' => "Angiographie rétinienne est douloureuse ?",
            'answer' => "<p class='faq-content'>L'angiographie rétinienne est généralement bien tolérée et ne
                        provoque pas de douleur. Cependant, certaines personnes peuvent
                        ressentir une légère gêne lors de l'injection du coloran</p>"
          ],
          [
            'question' => "combien de temps dure une angiographie de l'oeil ?",
            'answer' => "<p class='faq-content'>La durée moyenne d'une angiographie rétinienne est d'environ 20
                        à 30 minutes, mais cela peut varier en fonction des centres
                        ophtalmologiques et des protocoles utilisés</p>"
          ],
          [
            'question' => "L'assurance maladie couvre-t-elle l'angiographie ?",
            'answer' => "<p class='faq-content'>Lectus sit amet est placerat in egestas erat imperdiet sed.
                        Mauris rhoncus aenean vel elit scelerisque. Lobortis nibh tellus
                        molestie nunc non blandit. Tellus in hac</p>"
          ],
          [
            'question' => "Angiographie pour femmes enceintes ?",
            'answer' => "<p class='faq-content'>
                        l'angiographie rétinienne peut être réalisée chez les femmes
                        enceintes. L'examen ne nécessite pas de rayonnement ionisant et
                        le produit de contraste utilisé est considéré comme sûr pour les
                        femmes enceintes. Cependant, il est important de discuter des
                        avantages et des risques de l'examen avec votre ophtalmologue et
                        votre obstétricien avant de subir l'examen
                      </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'angiographie-ultra-grand-champ',
        'title' => 'l’Angiographie Ultra Grand Champ',
        'shortDescription' => "L'angiographie ultra grand champ est une évolution technologique de l'angiographie classique qui permet d'obtenir des images plus étendues de la rétine.",
        'poster' => '/assets/img/Angiographie ultra grand champ 1.png',
        'content' => "<h1>
                Qu'est-ce que <span>l’Angiographie Ultra Grand Champ </span>?
              </h1>
              <p>
                <strong>L'angiographie ultra grand champ</strong> est une
                évolution technologique de l'angiographie classique qui permet
                d'obtenir des images plus étendues de la rétine. Cette technique
                permet de visualiser les vaisseaux sanguins et leurs branches de
                division avec un champ de vision allant jusqu'à 200 degrés. Elle
                est particulièrement utile pour l'exploration de la périphérie
                rétinienne et <strong>le dépistage </strong>de la rétinopathie
                diabétique. Le système d'imagerie ultra grand champ de dernière
                génération est le module d'angiographie ultra grand champ (UWF),
                qui fournit des images sans distorsion, d'haut contraste et
                d'illumination homogène, même dans la périphérie.
              </p>
              <h3>Les avantages de l'angiographie ultra grand champ</h3>
              <p>
                L'angiographie ultra grand champ présente plusieurs avantages en
                ophtalmologie. Cette technique permet de détecter des anomalies
                vasculaires situées en périphérie de la rétine, telles que dans la
                rétinopathie. Elle permet également un dépistage plus efficace de
                la <strong>rétinopathie diabétique</strong>. L'angiographie ultra
                grand champ dévoile plus de signes pathologiques qu'un champ de
                vision classique et apporte des preuves supplémentaires pour
                déterminer un diagnostic.
              </p>",
        'image' => '/assets/img/angio-ultra.jpg',
        'faq' => [
          [
            'question' => "Comment se déroule l'examen d'angiographie ultra grand champ ?",
            'answer' => "<p class='faq-content'>L'examen d'angiographie ultra grand champ consiste à injecter un
                        colorant dans une veine du bras du patient, puis à prendre des
                        images de la rétine à l'aide d'un ophtalmoscope laser à balayage
                        confocal (cSLO)</p>"
          ],
          [
            'question' => "Quelles sont les différences entre l'angiographie ultra grand
                        champ et l'angiographie traditionnelle ?",
            'answer' => "<p class='faq-content'>L'angiographie ultra grand champ permet d'obtenir des images de
                        l'ensemble de la rétine, y compris la périphérie, avec un champ
                        de vision allant jusqu'à 200 degrés, alors que l'angiographie
                        traditionnelle ne couvre qu'une petite partie de la rétine</p>"
          ],
          [
            'question' => "Quelles sont les pathologies rétiniennes qui peuvent être
                        diagnostiquées et surveillées à l'aide de l'angiographie ultra
                        grand champ ?",
            'answer' => "<p class='faq-content'>L'angiographie ultra grand champ peut être utilisée pour
                        diagnostiquer et surveiller les maladies rétiniennes, telles que
                        la rétinopathie diabétique et la rétinopathie drépanocytaire
                        proliférante</p>"
          ],
          [
            'question' => "Question: Quels sont les effets secondaires possibles de
                        l'angiographie ultra grand champ ?",
            'answer' => "<ul class='faq-content'>
                        <li>
                          Saignement, infection et douleur au point d'insertion du tube
                        </li>
                        <li>Réaction au colorant</li>
                        <li>Dommages aux reins (risque très faible)</li>
                        <li>
                          Dommages aux vaisseaux sanguins causés par le tube (risque
                          très faible)
                        </li>
                        <li>
                          Caillots sanguins sur le tube, qui pourraient alors bloquer
                          les vaisseaux sanguins situés ailleurs dans le corps
                        </li>
                      </ul>"
          ],
        ]
      ],
      (object) [
        'id' => 'examen-du-champ-visuel',
        'title' => 'examen du champ visuel',
        'shortDescription' => "L'examen du champ visuel est un examen ophtalmologique couramment pratiqué par les ophtalmologues ou les orthoptistes.",
        'poster' => '/assets/img/vision-binoculaire.png',
        'content' => " <h1>Qu'est-ce qu'un examen <span>du champ visuel </span>?</h1>
                <p>
                  <strong>L'examen du champ visuel </strong> est un examen
                  ophtalmologique couramment pratiqué par les ophtalmologues ou les
                  orthoptistes. Cet examen permet de mesurer la capacité d'un œil à
                  percevoir l'espace qui l'entoure. Il est utilisé pour
                  diagnostiquer et <strong>suivre l'évolution</strong> de certaines
                  pathologies oculaires, telles que le glaucome. Dans cet article,
                  nous allons vous expliquer en quoi consiste l'examen du champ
                  visuel et dans quels contextes il est utilisé.
                </p>
                <h3>Les applications de l'examen du champ visuel</h3>
                <p>
                  L'examen du champ visuel est utilisé pour diagnostiquer et
                  <strong>suivre l'évolution</strong> de certaines pathologies
                  oculaires, telles que le glaucome. Il permet de cartographier
                  l'espace que l'œil est capable de percevoir autour du point qu'il
                  fixe. L'examen du champ visuel est indispensable pour
                  <strong>diagnostiquer </strong>et suivre un glaucome. Il est
                  également utilisé pour évaluer la santé et la détérioration
                  potentielle du système visuel d'un patient.
                </p>",
        'image' => '/assets/img/fov.jpg',
        'faq' => [
          [
            'question' => "Pourquoi faire un champ visuel ?",
            'answer' => "<p class='faq-content'>
                        L'examen du champ visuel a pour but de cartographier l'espace
                        que l'œil peut percevoir autour d'un point fixe, afin de
                        diagnostiquer et de surveiller des pathologies oculaires telles
                        que le glaucome et la rétinopathie
                        </p>"
          ],
          [
            'question' => "Comment se déroule l'examen du champ visuel ?",
            'answer' => "
                        <p class='faq-content'>
                        L'examen du champ visuel se déroule généralement dans une pièce
                        sombre, où le patient est assis et fixe un point lumineux
                        central. Des stimuli lumineux sont présentés à différents
                        endroits de l'espace visuel, et le patient doit signaler leur
                        apparition en appuyant sur un bouton
                        </p>"
          ],
          [
            'question' => " Quels sont les résultats attendus de l'examen du champ visuel ?",
            'answer' => "
                        <p class='faq-content'>
                        L'examen du champ visuel permet de mesurer la capacité de l'œil
                        à voir sur le côté, et de détecter des anomalies telles que des
                        scotomes (trous dans le champ visuel) qui peuvent indiquer une
                        pathologie oculaire
                        </p>"
          ],
          [
            'question' => "Quelles sont les pathologies oculaires qui peuvent être
                        diagnostiquées et surveillées à l'aide de l'examen du champ
                        visuel ?",
            'answer' => "<p class='faq-content'>
                        L'examen du champ visuel est principalement utilisé pour
                        diagnostiquer et surveiller le glaucome, mais il peut également
                        être utile pour détecter d'autres pathologies oculaires telles
                        que la rétinopathie diabétique et la neuropathie optique
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'chirurgie-de-la-cataracte',
        'title' => 'la chirurgie de la cataracte',
        'shortDescription' => "La chirurgie de la cataracte est une intervention chirurgicale courante en ophtalmologie pour traiter la cataracte, une affection oculaire qui se caractérise par l'opacification progressive du cristallin.",
        'poster' => '/assets/img/cataracte.png',
        'content' => " <h1>Qu'est-ce que la <span>chirurgie de la cataracte </span>?</h1>
                <p>
                  <strong>La chirurgie de la cataracte</strong> est une intervention
                  chirurgicale courante en ophtalmologie pour traiter la cataracte,
                  une affection oculaire qui se caractérise par l'opacification
                  progressive du cristallin. La phacoémulsification est la technique
                  chirurgicale la plus couramment utilisée pour l'éradication de la
                  cataracte. Fonctionnement de la phacoémulsification :
                </p>
                <ol type='1'>
                  <li>
                    <strong>Fonctionnement de la phacoémulsification :</strong> La
                    phacoémulsification est une technique chirurgicale qui utilise
                    des ultrasons pour fragmenter et aspirer le cristallin opaque ou
                    la cataracte. Le chirurgien utilise une sonde ultrasonique pour
                    fragmenter la cataracte en petits morceaux, qui sont ensuite
                    aspirés par une petite incision dans l'œil.
                  </li>
                  <li>
                    <strong>Procédure de l'intervention : </strong>La
                    phacoémulsification est généralement réalisée sous anesthésie
                    locale et ne nécessite pas d'hospitalisation. Le chirurgien
                    effectue une petite incision dans l'œil pour accéder au
                    cristallin. La sonde ultrasonique est ensuite utilisée pour
                    fragmenter et aspirer la cataracte. Une lentille intraoculaire
                    est ensuite insérée dans l'œil pour remplacer le cristallin.
                  </li>
                  <li>
                    <strong>Avantages de la phacoémulsification :</strong> La
                    phacoémulsification est une technique chirurgicale rapide, sûre
                    et efficace pour traiter la cataracte. Elle permet une
                    récupération rapide et une amélioration significative de la
                    vision. Risques et effets secondaires : Bien que la
                    phacoémulsification soit généralement sûre, elle peut entraîner
                    des effets secondaires tels que des douleurs oculaires, des
                    rougeurs, une vision floue et une sensibilité à la lumière.
                  </li>
                  <li>
                    <strong>Risques et effets secondaires : </strong>Bien que la
                    phacoémulsification soit généralement sûre, elle peut entraîner
                    des effets secondaires tels que des douleurs oculaires, des
                    rougeurs, une vision floue et une sensibilité à la lumière.
                  </li>
                </ol>",
        'image' => '/assets/img/cataracte-square.jpg',
        'faq' => [
          [
            'question' => "Comment se déroule l'opération de la cataracte ?",
            'answer' => "<p class='faq-content'>
                        L'opération de la cataracte est indolore et se déroule sous
                        anesthésie locale. Elle dure environ 10 minutes et ne nécessite
                        pas de points de suture. Le chirurgien retire le cristallin
                        opacifié de l'œil à l'aide d'une petite incision, puis insère
                        une lentille intraoculaire
                        </p>"
          ],
          [
            'question' => " Quelles sont les suites post-opératoires de la chirurgie de la
                        cataracte ?",
            'answer' => "<p class='faq-content'>
                        Les suites post-opératoires de la chirurgie de la cataracte sont
                        généralement simples et ne nécessitent pas d'hospitalisation. Le
                        patient peut ressentir une légère douleur et une vision floue
                        pendant quelques jours, mais cela s'améliore rapidement. Des
                        gouttes oculaires sont prescrites pour prévenir l'infection et
                        favoriser la guérison
                        </p>"
          ],
          [
            'question' => "Quels sont les risques de la chirurgie de la cataracte ?",
            'answer' => "<p class='faq-content'>
                        Les risques de la chirurgie de la cataracte sont faibles, mais
                        peuvent inclure une infection, une inflammation, une douleur
                        oculaire, une perte de vision, une déchirure de la rétine et une
                        déformation de la lentille intraoculaire
                        </p>"
          ],
          [
            'question' => " Quel est le taux de réussite de l'opération de la cataracte ?",
            'answer' => "<p class='faq-content'>
                        Le taux de réussite de l'opération de la cataracte est très
                        élevé, atteignant jusqu'à 99 % selon certaines sources. Les
                        patients peuvent récupérer leur vision rapidement après
                        l'opération et retrouver une qualité de vie améliorée
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'la-chirurgie-des-strabismes',
        'title' => 'la chirurgie des strabismes',
        'shortDescription' => "La chirurgie des strabismes est une intervention chirurgicale utilisée pour corriger les problèmes de désalignement des yeux, communément appelés strabisme.",
        'poster' => '/assets/img/strabisme.png',
        'content' => "<h1>Qu'est-ce que <span>la chirurgie des strabismes </span>?</h1>
                <p>
                  <strong>La chirurgie des strabismes</strong> est une intervention
                  chirurgicale utilisée pour corriger les problèmes de désalignement
                  des yeux, communément appelés strabisme. Fonctionnement de la
                  chirurgie des strabismes : La chirurgie des strabismes vise à
                  modifier la position des muscles oculaires pour réaligner les yeux
                  et améliorer la vision binoculaire. Cette intervention peut être
                  réalisée sur un ou les deux yeux, selon les besoins du patient.
                </p>
                <ol>
                  <li>
                    <strong>Procédure de l'intervention :</strong> La chirurgie des
                    strabismes est généralement réalisée sous anesthésie générale et
                    peut être effectuée en ambulatoire. Le chirurgien effectue une
                    petite incision dans la conjonctive pour accéder aux muscles
                    oculaires. Les muscles sont ensuite ajustés pour réaligner les
                    yeux.
                  </li>
                  <li>
                    <strong>Avantages de la chirurgie des strabismes :</strong> La
                    chirurgie des strabismes peut améliorer la vision binoculaire,
                    réduire la fatigue oculaire et améliorer l'esthétique des yeux.
                    Elle peut également améliorer la qualité de vie du patient en
                    lui permettant de mieux fonctionner dans la vie quotidienne.
                  </li>
                  <li>
                    <strong>Risques et effets secondaires</strong> : Bien que la
                    chirurgie des strabismes soit généralement sûre, elle peut
                    entraîner des effets secondaires tels que des douleurs
                    oculaires, des rougeurs, une vision floue et une sensibilité à
                    la lumière. Dans de rares cas, elle peut également entraîner une
                    récidive du strabisme ou une perte de vision.
                  </li>
                </ol>",
        'image' => '/assets/img/strab.jpg',
        'faq' => [
          [
            'question' => "Comment se déroule l'opération du strabisme ?",
            'answer' => "<p class='faq-content'>
                        L'opération du strabisme consiste à repérer les muscles
                        oculo-moteurs et à déplacer leurs insertions à la surface du
                        globe oculaire, afin de rétablir l'alignement des yeux. Elle se
                        déroule sous anesthésie générale et peut être réglable pour
                        ajuster le résultat
                        </p>"
          ],
          [
            'question' => "Quels sont les risques de la chirurgie du strabisme ?",
            'answer' => "<p class='faq-content'>
                        Les risques de la chirurgie du strabisme sont faibles, mais
                        peuvent inclure une infection, une inflammation, une douleur
                        oculaire, une perte de vision, une déchirure de la rétine et une
                        déformation de la lentille intraoculaire
                        </p>"
          ],
          [
            'question' => "Quels sont les résultats attendus de la chirurgie du strabisme ?",
            'answer' => "<p class='faq-content'>
                        La chirurgie du strabisme permet de réduire ou d'éliminer le
                        strabisme, d'améliorer la fonction visuelle et de réduire les
                        symptômes associés, tels que la fatigue oculaire et les maux de
                        tête
                        </p>"
          ],
          [
            'question' => "Quels sont les facteurs qui peuvent influencer le taux de
                        réussite de la chirurgie du strabisme ?",
            'answer' => "
                        <ul class='faq-content'>
                        <li>
                          L'âge du patient : les enfants ont tendance à avoir un taux de
                          réussite plus élevé que les adultes
                        </li>
                        <li>
                          Le type et la gravité du strabisme : les cas de strabisme plus
                          sévères peuvent être plus difficiles à corriger
                        </li>
                        <li>
                          La qualité de l'abduction : une bonne abduction (capacité à
                          déplacer les yeux latéralement) est un facteur important pour
                          le succès de la chirurgie
                        </li>
                        <li>
                          Le nombre de chirurgies précédentes : les patients qui ont
                          subi plusieurs chirurgies de strabisme ont tendance à avoir un
                          taux de réussite plus faible
                        </li>
                        <li>
                          Le type de chirurgie : certains types de chirurgie, tels que
                          la récession musculaire, ont tendance à avoir un taux de
                          réussite plus élevé que d'autres
                        </li>
                      </ul>"
          ],
        ]
      ],
      (object) [
        'id' => 'la-chirurgie-des-voies-lacrymales',
        'title' => 'la chirurgie des voies lacrymales',
        'shortDescription' => "La chirurgie des voies lacrymales est une intervention chirurgicale utilisée pour traiter les problèmes de larmoiement excessif causés par un rétrécissement ou une obstruction des voies lacrymales naturelles.",
        'poster' => '/assets/img/voies-lacrymales.png',
        'content' => "<h1>
                Qu'est-ce que la<span> chirurgie des voies lacrymales </span>?
              </h1>
              <p>
                La <strong>chirurgie des voies lacrymales</strong> est une
                intervention chirurgicale utilisée pour traiter les problèmes de
                larmoiement excessif causés par un rétrécissement ou une
                obstruction des voies lacrymales naturelles. La chirurgie des
                voies lacrymales est une technique chirurgicale utilisée pour
                <strong>traiter le larmoiement excessif </strong>lorsque
                l'utilisation ou la réparation des voies lacrymales naturelles est
                impossible. Cette intervention est indiquée lorsque le larmoiement
                est secondaire à un rétrécissement ou à une obstruction des voies
                lacrymales.
              </p>
              <p>
                Les voies lacrymales sont responsables du
                <strong>drainage des larmes produites</strong> par les glandes
                lacrymales. Lorsqu'il y a un obstacle dans ce système de drainage,
                les larmes s'accumulent dans un sac lacrymal, provoquant un
                larmoiement excessif qui peut s'écouler sur la joue (épiphora).
                Dans certains cas, les larmes stagnantes peuvent également
                entraîner une <strong>inflammation du sac lacrymal</strong>,
                appelée dacryocystite.
              </p>
              <p>
                Le traitement chirurgical des voies lacrymales est recommandé
                lorsque le larmoiement est causé par un
                <strong>rétrécissement </strong>ou une obstruction des voies
                lacrymales. Le choix de la technique chirurgicale dépend de la
                localisation et de la nature de l'obstruction. Chez les enfants,
                une <strong>intervention chirurgicale </strong>peut être envisagée
                si le larmoiement persiste après un an de vie, car la
                reperméabilisation du canal lacrymo-nasal se produit généralement
                spontanément au cours de la première année de vie.
              </p>",
        'image' => '/assets/img/lacry.jpg',
        'faq' => [
          [
            'question' => "Comment se déroule l'opération des voies lacrymales ?",
            'answer' => "<p class='faq-content'>
                        L'opération des voies lacrymales peut être réalisée sous
                        anesthésie locale ou générale. Elle consiste à créer une
                        nouvelle voie pour les larmes en retirant une partie de l'os du
                        nez et en créant un canal pour permettre aux larmes de s'écouler
                        </p>"
          ],
          [
            'question' => " Quel est le taux de réussite de la chirurgie des voies
                        lacrymales ?",
            'answer' => "<p class='faq-content'>
                        Le taux de réussite de la chirurgie des voies lacrymales varie
                        en fonction de la technique utilisée et de la gravité du
                        problème. Les études ont montré un taux de réussite global
                        supérieur à 90 %
                        </p>"
          ],
          [
            'question' => "Quels sont les risques de la chirurgie des voies lacrymales ?",
            'answer' => "<p class='faq-content'>
                        Les risques de la chirurgie des voies lacrymales sont faibles,
                        mais peuvent inclure une infection, une inflammation, une
                        douleur, une perte de vision, une déformation de la zone opérée
                        et une récidive
                        </p>"
          ],
          [
            'question' => "Quels sont les symptômes qui peuvent indiquer la nécessité d'une
                        chirurgie des voies lacrymales ?",
            'answer' => "<p class='faq-content'>
                        Les symptômes qui peuvent indiquer la nécessité d'une chirurgie
                        des voies lacrymales sont le larmoiement excessif, les
                        infections oculaires récurrentes, les douleurs oculaires et la
                        présence d'un abcès lacrymal
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'echographie-A',
        'title' => 'l’echographie A',
        'shortDescription' => "L'échographie en mode A est une technique d'imagerie utilisée en ophtalmologie pour visualiser les structures internes de l'œil en utilisant des ondes sonores à haute fréquence. ",
        'poster' => '/assets/img/machine5.png',
        'content' => "   <h1>Qu'est-ce que <span>l’echographie a </span>?</h1>
                <p>
                  L'échographie en mode A est une technique d'imagerie utilisée en
                  ophtalmologie pour visualiser les structures internes de l'œil en
                  utilisant des ondes sonores à haute fréquence. :
                </p>
                <ul>
                  <li>
                    <strong>Fonctionnement de l'échographie mode A :</strong>
                    L'échographie mode A utilise des ondes sonores à haute fréquence
                    pour créer des images en temps réel des structures internes de
                    l'œil. Cette technique permet de visualiser les structures
                    oculaires telles que la rétine, le corps vitré, le nerf optique
                    et les muscles oculaires.
                  </li>
                  <li>
                    <strong>Applications médicales :</strong> L'échographie mode A
                    est utilisée dans de nombreux domaines médicaux, y compris
                    l'ophtalmologie, pour diagnostiquer et surveiller différentes
                    affections oculaires, telles que les tumeurs intraoculaires, les
                    décollements de rétine, les lésions orbitaires et les
                    pathologies du nerf optique.
                  </li>
                  <li>
                    <strong>Procédure de l'examen :</strong> L'examen d'échographie
                    mode A est généralement réalisé par un technologue en imagerie
                    médicale. Le patient est positionné de manière appropriée et un
                    gel est appliqué sur la peau pour faciliter la transmission des
                    ondes sonores. Le transducteur est déplacé doucement sur la peau
                    pour obtenir des images.
                  </li>
                  <li>
                    <strong>Avantages de l'échographie mode A :</strong>
                    L'échographie mode A est non invasive, indolore et ne nécessite
                    pas d'exposition aux radiations ionisantes. Elle peut fournir
                    des informations précieuses sur la structure et la fonction des
                    structures oculaires internes, y compris les couches distinctes
                    de la rétine et de la macula.
                  </li>
                </ul>",
        'image' => '/assets/img/machine5.png',
        'faq' => [
          [
            'question' => "Comment fonctionne l'échographie mode A ?",
            'answer' => "<p class='faq-content'>
                        L'échographie mode A utilise des ondes sonores à haute fréquence
                        pour produire des images en deux dimensions des structures
                        internes du corps. Les ondes sonores sont émises par une sonde
                        placée sur la peau et sont réfléchies par les tissus internes du
                        corps. Les ondes réfléchies sont ensuite captées par la sonde et
                        transformées en images en temps réel
                        </p>"
          ],
          [
            'question' => "Quels sont les avantages de l'échographie mode A ?",
            'answer' => "<p class='faq-content'>
                        L'échographie mode A est une technique d'imagerie médicale non
                        invasive et sans danger qui ne nécessite pas d'exposition aux
                        rayonnements ionisants. Elle est également relativement peu
                        coûteuse et peut être utilisée pour visualiser les organes
                        internes en temps réel
                        </p>"
          ],
          [
            'question' => "Quels sont les inconvénients de l'échographie mode A ?",
            'answer' => "<p class='faq-content'>
                        L'échographie mode A peut être moins précise que d'autres
                        techniques d'imagerie médicale, telles que l'IRM ou le scanner.
                        Elle peut également être moins utile pour visualiser les
                        structures internes profondes du corps
                        </p>"
          ],
          [
            'question' => "Quelles sont les indications de l'échographie mode A ?",
            'answer' => "<p class='faq-content'>
                        L'échographie mode A est principalement utilisée pour visualiser
                        les organes internes tels que le cœur, le foie, les reins et la
                        thyroïde. Elle peut également être utilisée pour diagnostiquer
                        des pathologies telles que les tumeurs, les kystes et les
                        malformations congénitales
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'echographie-B',
        'title' => 'l’echographie B',
        'shortDescription' => "L'échographie mode B en ophtalmologie est une méthode avancée d'imagerie médicale qui offre une visualisation en temps réel des structures internes de l'œil.",
        'poster' => '/assets/img/machine4.png',
        'content' => "<h1>Qu'est-ce que <span>l’echographie B </span>?</h1>
                <p>
                  L'échographie mode B en ophtalmologie est une méthode avancée
                  d'imagerie médicale qui offre une visualisation en temps réel des
                  structures internes de l'œil. Dans cet article, nous plongeons
                  dans les détails de l'échographie mode B en ophtalmologie, en
                  expliquant son fonctionnement, son utilisation diagnostique et ses
                  avantages pour le suivi des affections oculaires.
                </p>
                <p>
                  <strong
                    >Fonctionnement de l'Échographie Mode B en
                    Ophtalmologie:</strong
                  >
                  L'échographie mode B, également appelée échographie à balayage B,
                  utilise des ondes ultrasonores pour générer des images en coupe
                  transversale de l'œil. Un transducteur spécialisé émet ces ondes,
                  qui pénètrent dans l'œil et sont réfléchies par les tissus
                  oculaires. En mesurant le temps pris par les ondes pour revenir au
                  transducteur, un ordinateur crée des images en temps réel qui
                  représentent les différentes couches de l'œil.
                </p>
                <p>
                  <strong>Utilisation Diagnostique en Ophtalmologie:</strong>
                  L'échographie mode B en ophtalmologie joue un rôle vital dans le
                  diagnostic et la gestion des affections oculaires :
                </p>
                <ul>
                  <li>
                    Détachement de la Rétine: Elle permet de visualiser les
                    décollements de la rétine et de déterminer leur gravité, aidant
                    les médecins à choisir la meilleure approche de traitement.
                  </li>
                  <li>
                    Pathologies du Vitré: L'échographie mode B aide à évaluer les
                    problèmes du vitré, tels que les hémorragies et les corps
                    flottants, qui peuvent affecter la vision.
                  </li>
                  <li>
                    Tumeurs Intraoculaires: Cette technique offre une visualisation
                    précise des tumeurs, permettant aux médecins de surveiller leur
                    croissance et leur réponse aux traitements.
                  </li>
                  <li>
                    Dégénérescence Maculaire: Elle aide à diagnostiquer et à
                    surveiller les maladies de la macula, la partie centrale de la
                    rétine responsable de la vision fine.
                  </li>
                </ul>
                <p>Avantages de l'Échographie Mode B en Ophtalmologie:</p>
                <ul>
                  <li>
                    Précision Diagnostique: Cette technique fournit des images en
                    temps réel avec une résolution élevée, permettant une évaluation
                    précise des structures oculaires.
                  </li>
                  <li>
                    Complément aux Examens Cliniques: L'échographie mode B complète
                    les examens oculaires traditionnels, offrant des informations
                    détaillées sur les affections internes.
                  </li>
                  <li>
                    Sécurité pour le Patient: Étant non invasive, cette méthode ne
                    provoque aucune douleur ni risque pour les patients.
                  </li>
                </ul>",
        'image' => '/assets/img/machine4.png',
        'faq' => [
          [
            'question' => "Comment fonctionne l'échographie mode B ?",
            'answer' => "<p class='faq-content'>
                        L'échographie mode B en ophtalmologie utilise une sonde à haute
                        fréquence qui émet des ondes sonores qui sont réfléchies par les
                        tissus internes de l'œil. Les ondes réfléchies sont ensuite
                        captées par la sonde et transformées en images en temps réel
                        </p>"
          ],
          [
            'question' => "Quels sont les avantages de l'échographie mode B ?",
            'answer' => "<p class='faq-content'>
                        L'échographie mode B en ophtalmologie est une technique
                        d'imagerie médicale non invasive et sans danger qui ne nécessite
                        pas d'exposition aux rayonnements ionisants. Elle est également
                        relativement peu coûteuse et peut être utilisée pour visualiser
                        les structures internes de l'œil en temps réel
                        </p>"
          ],
          [
            'question' => "Quels sont les inconvénients de l'échographie mode B ?",
            'answer' => "<p class='faq-content'>
                        L'échographie mode B en ophtalmologie peut être moins précise
                        que d'autres techniques d'imagerie médicale, telles que l'IRM ou
                        le scanner. Elle peut également être moins utile pour visualiser
                        les structures internes profondes de l'œil
                        </p>"
          ],
          [
            'question' => "Quelles sont les indications de l'échographie mode B ?",
            'answer' => "<p class='faq-content'>
                        L'échographie mode B en ophtalmologie est principalement
                        utilisée pour visualiser les structures internes de l'œil,
                        telles que la rétine, le vitré et la cavité orbitaire. Elle peut
                        également être utilisée pour diagnostiquer des pathologies
                        telles que les tumeurs, les kystes et les malformations
                        congénitales
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'le-laser-argon',
        'title' => 'le laser argon',
        'shortDescription' => "Le Laser Argon est une technique de traitement de la rétine utilisée en ophtalmologie pour traiter diverses pathologies oculaires.",
        'poster' => '/assets/img/machine3.png',
        'content' => " <h1>Qu'est-ce qu'un <span>laser argon </span>?</h1>
                <p>
                  Le Laser Argon est une technique de traitement de la rétine
                  utilisée en ophtalmologie pour traiter diverses pathologies
                  oculaires. Cette technique utilise un laser à effet thermique pour
                  traiter la rétinopathie diabétique, les déchirures de la rétine,
                  les néovaisseaux périphériques et d'autres affections de la
                  rétine.
                </p>
                <h3>Comment se déroule le traitement au Laser Argon ?</h3>
                <p>
                  Le traitement au Laser Argon est généralement réalisé en
                  ambulatoire, c'est-à-dire sans hospitalisation. Le patient est
                  installé confortablement et le médecin ophtalmologiste utilise un
                  laser pour traiter la zone affectée de la rétine. Le laser à effet
                  thermique permet de cautériser la rétine et de traiter les
                  lésions. Le traitement peut durer de quelques minutes à une heure,
                  en fonction de la zone à traiter.
                </p>
                <h3>Les avantages du Laser Argon</h3>
                <p>
                  Le Laser Argon présente plusieurs avantages en ophtalmologie.
                  Cette technique est efficace pour traiter diverses pathologies de
                  la rétine. Elle est également peu invasive et peut être réalisée
                  en ambulatoire, ce qui permet une récupération rapide. Le Laser
                  Argon est une technique de traitement de la rétine parmi les plus
                  abouties et efficaces.
                </p>",
        'image' => '/assets/img/machine3.png',
        'faq' => [
          [
            'question' => "Comment fonctionne le laser Argon ?",
            'answer' => "<p class='faq-content'>
                        Le laser Argon émet un faisceau de lumière qui est absorbé par
                        les tissus de la rétine, provoquant une coagulation et une
                        cicatrisation. Cela permet de traiter les maladies de la rétine
                        en recollant la rétine dans le cas de déchirures, en réduisant
                        la néovascularisation et en augmentant l'oxygène dans l'œil
                        </p>"
          ],
          [
            'question' => "Quels sont les risques liés à l'utilisation du laser Argon ?",
            'answer' => "<p class='faq-content'>
                        Les risques liés à l'utilisation du laser Argon sont faibles,
                        mais peuvent inclure une douleur oculaire, une inflammation, une
                        infection, une perte de vision et une récidive de la maladie
                        </p>"
          ],
          [
            'question' => "Quels sont les avantages du laser Argon ?",
            'answer' => "<p class='faq-content'>
                        Le laser Argon est une technique non invasive et sans douleur
                        qui peut être réalisée en ambulatoire. Elle permet de traiter
                        les maladies de la rétine sans nécessiter d'hospitalisation et
                        avec un temps de récupération rapide
                        </p>"
          ],
          [
            'question' => "Comment se déroule une séance de traitement au laser Argon ?",
            'answer' => "<p class='faq-content'>
                        Une séance de traitement au laser Argon se déroule généralement
                        en ambulatoire et ne nécessite pas d'hospitalisation. Le patient
                        est installé confortablement et une lentille est placée sur
                        l'œil pour protéger la cornée. Le médecin utilise ensuite le
                        laser Argon pour traiter la maladie de la rétine
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'laser-SLT',
        'title' => 'le laser SLT',
        'shortDescription' => "La trabéculoplastie sélective au laser (SLT) est une technique utilisée en ophtalmologie pour traiter le glaucome.",
        'poster' => '/assets/img/machine2.png',
        'content' => "<h1>Qu'est-ce qu'un <span>laser SLT </span>?</h1>
                <p>
                  La trabéculoplastie sélective au laser (SLT) est une technique
                  utilisée en ophtalmologie pour traiter le glaucome.
                </p>
                <ol>
                  <li>
                    <strong>Fonctionnement de la SLT : </strong>La trabéculoplastie
                    sélective au laser utilise un laser de faible énergie pour
                    cibler les cellules pigmentaires dans le trabéculum, une zone de
                    drainage de l'œil. Cette technique permet d'augmenter le
                    drainage de l'humeur aqueuse et de réduire la pression
                    intraoculaire.
                  </li>
                  <li>
                    <strong>Applications médicales : </strong>La SLT est
                    principalement utilisée pour traiter le glaucome, une maladie
                    oculaire caractérisée par une pression intraoculaire élevée qui
                    peut endommager le nerf optique.
                  </li>
                  <li>
                    <strong>Procédure de traitement :</strong> La SLT est
                    généralement réalisée en ambulatoire et ne nécessite pas
                    d'anesthésie générale. Le patient est installé sur une chaise
                    d'examen et le laser est dirigé vers le trabéculum à travers une
                    lentille spéciale.
                  </li>
                  <li>
                    <strong>Avantages de la SLT : </strong>La trabéculoplastie
                    sélective au laser est non invasive et peut être effectuée
                    rapidement et facilement. Elle est également efficace pour
                    réduire la pression intraoculaire et peut aider à préserver la
                    vision.
                  </li>
                  <li>
                    <strong>Risques et effets secondaires : </strong>Bien que la SLT
                    soit généralement sûre, elle peut entraîner des effets
                    secondaires tels que des douleurs oculaires, des rougeurs, une
                    vision floue et une sensibilité à la lumière.
                  </li>
                </ol>",
        'image' => '/assets/img/machine2.png',
        'faq' => [
          [
            'question' => "Quelle est la durée d'une séance de traitement au laser SLT ?",
            'answer' => "<p class='faq-content'>
                        La durée d'une séance de traitement au laser SLT est
                        généralement d'environ 10 à 15 minutes
                        </p>"
          ],
          [
            'question' => " Quels sont les résultats attendus du traitement au laser SLT ?",
            'answer' => "<p class='faq-content'>
                        Le traitement au laser SLT permet de réduire la pression
                        intraoculaire chez la plupart des patients atteints de glaucome à
                        angle ouvert. Les résultats peuvent varier en fonction de la
                        gravité de la maladie et de la réponse individuelle du patient
                        </p>"
          ],
          [
            'question' => "Quels sont les critères d'éligibilité pour le traitement au
                        laser SLT ?",
            'answer' => "<p class='faq-content'>
                        Les critères d'éligibilité pour le traitement au laser SLT
                        comprennent un diagnostic de glaucome à angle ouvert, une
                        pression intraoculaire élevée malgré un traitement
                        médicamenteux, et une absence de contre-indications telles que
                        des antécédents de chirurgie oculaire
                        </p>"
          ],
          [
            'question' => "Quels sont les avantages du traitement au laser SLT par rapport
                        à d'autres traitements du glaucome ?",
            'answer' => "<p class='faq-content'>
                        Les avantages du traitement au laser SLT par rapport à d'autres
                        traitements du glaucome comprennent une faible incidence
                        d'effets secondaires, une procédure non invasive et sans
                        douleur, une récupération rapide et une efficacité comparable à
                        d'autres traitements
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'laser-YAG',
        'title' => 'le laser YAG',
        'shortDescription' => "Le laser YAG est une technique utilisée en ophtalmologie pour le traitement de diverses affections oculaires.",
        'poster' => '/assets/img/machine1.png',
        'content' => "
                <h1>Qu'est-ce qu'un <span>laser YAG </span>?</h1>
                <p>
                  Le <strong>laser YAG</strong> est une technique utilisée en
                  ophtalmologie pour le traitement de diverses affections oculaires.
                </p>
                <p>
                  Le laser YAG émet une lumière de longueur d'onde spécifique qui
                  est absorbée par les tissus oculaires, où elle est transformée en
                  chaleur. Cette technique est principalement utilisée pour résoudre
                  les problèmes de cataracte secondaire, tels que la formation d'une
                  capsule postérieure opacifiée après une chirurgie de la cataracte.
                  Le laser YAG permet de réaliser
                  <strong>une capsulotomie</strong>, qui consiste en une découpe
                  laser de la capsule postérieure afin de rétablir la vision. En
                  plus de la capsulotomie, le laser YAG peut également être utilisé
                  pour d'autres traitements oculaires, tels que les
                  <strong>iridotomies</strong> pour le traitement du glaucome à
                  angle fermé. Cette technique permet de créer
                  <strong>une petite ouverture dans l'iris</strong> afin de
                  faciliter la circulation de l'humeur aqueuse et de réduire la
                  pression intraoculaire.
                </p>
                <h3>Les avantages du laser YAG sont les suivants :</h3>
                <ul>
                  <li>
                    Non invasif : Le traitement au laser YAG est généralement
                    réalisé en ambulatoire, sans nécessiter d'intervention
                    chirurgicale majeure.
                  </li>
                  <li>
                    Rapide et efficace : Les procédures au laser YAG sont
                    généralement rapides, prenant seulement quelques minutes par
                    œil.
                  </li>
                  <li>
                    Récupération rapide : La récupération après un traitement au
                    laser YAG est généralement rapide, avec peu de douleur ou
                    d'inconfort postopératoire
                  </li>
                </ul>",
        'image' => '/assets/img/machine1.png',
        'faq' => [
          [
            'question' => " Quels sont les avantages du laser YAG par rapport à la chirurgie
                        traditionnelle de la cataracte ?",
            'answer' => "<p class='faq-content'>
                        Le laser YAG offre plusieurs avantages par rapport à la
                        chirurgie traditionnelle de la cataracte, notamment une
                        procédure moins invasive, une récupération plus rapide, une
                        précision accrue et une réduction des risques de complications
                        </p>"
          ],
          [
            'question' => "Quels sont les risques liés à l'utilisation du laser YAG pour
                        traiter le glaucome ?",
            'answer' => "<p class='faq-content'>
                        Les risques liés à l'utilisation du laser YAG pour traiter le
                        glaucome sont faibles, mais peuvent inclure une douleur
                        oculaire, une inflammation, une infection, une perte de vision
                        et une augmentation de la pression intraoculaire
                        </p>"
          ],
          [
            'question' => "Comment se déroule une séance de traitement au laser YAG pour la
                        cataracte secondaire ?",
            'answer' => "<p class='faq-content'>
                        Une séance de traitement au laser YAG pour la cataracte
                        secondaire est réalisée en ambulatoire et ne nécessite pas
                        d'anesthésie générale. Le patient est installé confortablement
                        et une lentille est placée sur l'œil pour protéger la cornée. Le
                        médecin utilise ensuite le laser YAG pour ouvrir la capsule
                        postérieure du cristallin
                        </p>"
          ],
          [
            'question' => "Quelles sont les indications du laser YAG pour traiter les
                        maladies oculaires autres que la cataracte et le glaucome ?",
            'answer' => "<p class='faq-content'>
                        Le laser YAG peut être utilisé pour traiter les déchirures
                        rétiniennes, les membranes épirétiniennes, les opacités
                        vitréennes et les hémorragies rétiniennes
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'OCT-angiographie',
        'title' => 'OCT - angiographie',
        'shortDescription' => "L'angiographie par tomographie par cohérence optique (OCT) est un examen d'imagerie non invasif et non irradiant utilisé en ophtalmologie pour évaluer les vaisseaux sanguins de la rétine.",
        'poster' => '/assets/img/neuron-ultra-zoom3.png',
        'content' => " <h1>Qu'est-ce que <span>OCT - angiographie </span>?</h1>
                <p>
                  <strong
                    >L'angiographie par tomographie par cohérence optique
                    (OCT)</strong
                  >
                  est un examen d'imagerie non invasif et non irradiant utilisé en
                  ophtalmologie pour évaluer les vaisseaux sanguins de la rétine.
                </p>
                <p>
                  Cette technique permet de visualiser et d'analyser la circulation
                  sanguine dans la rétine, ce qui peut aider à diagnostiquer et à
                  surveiller des affections oculaires telles que la rétinopathie
                  diabétique, la dégénérescence maculaire liée à l'âge (DMLA) et les
                  occlusions vasculaires rétiniennes.
                </p>
                <p>
                  L'OCT utilise des <strong> ondes lumineuses </strong> pour prendre
                  des photos en coupe des différentes structures de l'œil, y compris
                  la rétine, la macula, le nerf optique, la cornée et l'angle
                  irido-cornéen. Grâce à cette technique, l'ophtalmologue peut
                  visualiser les couches distinctes de l'œil et mesurer leur
                  épaisseur, ce qui est particulièrement utile dans le diagnostic
                  des <strong>pathologies maculaires</strong> et du
                  <strong>glaucome</strong>.
                </p>
                <p>
                  Lors de <strong>l'angiographie OCT</strong>, une substance
                  fluorescente est injectée dans une veine du bras du patient. Les
                  vaisseaux sanguins de la rétine sont ensuite visualisés à l'aide
                  d'un scanner OCT spécialisé, qui enregistre les variations de
                  réflectivité de la lumière. Cela permet de
                  <strong>créer des images détaillées</strong> de la circulation
                  sanguine dans la rétine et d'identifier d'éventuelles anomalies
                  vasculaires.
                </p>
                <h3>Les avantages de l'angiographie OCT sont les suivants :</h3>
                <ul>
                  <li>
                    Non invasif : L'angiographie OCT est un examen non invasif qui
                    ne nécessite pas d'intervention chirurgicale.
                  </li>
                  <li>
                    Visualisation détaillée des vaisseaux sanguins : Cette technique
                    permet de visualiser et d'analyser la circulation sanguine dans
                    la rétine avec une grande précision.
                  </li>
                  <li>
                    Aide au diagnostic et à la surveillance des affections oculaires
                    : L'angiographie OCT peut aider à diagnostiquer et à surveiller
                    des affections oculaires telles que la rétinopathie diabétique,
                    la DMLA et les occlusions vasculaires rétiniennes.
                  </li>
                </ul>",
        'image' => '/assets/img/neuron-ultra-zoom3.png',
        'faq' => [
          [
            'question' => " Comment fonctionne l'OCT-Angiographie ?",
            'answer' => "<p class='faq-content'>
                        L'OCT-Angiographie utilise la tomographie par cohérence optique
                        (OCT) pour produire des images en 2D et 3D des vaisseaux
                        sanguins de la rétine. Elle utilise la lumière pour produire des
                        images haute résolution de la rétine et de ses vaisseaux
                        sanguins, sans avoir besoin d'injection de produit de contraste
                        </p>"
          ],
          [
            'question' => "Quels sont les avantages de l'OCT-Angiographie ?",
            'answer' => "<p class='faq-content'>
                        L'OCT-Angiographie est une technique d'imagerie médicale non
                        invasive et sans douleur qui ne nécessite pas d'injection de
                        produit de contraste. Elle permet de visualiser la
                        vascularisation de la rétine avec une grande précision et de
                        détecter les plus petites lésions structurelles
                        </p>"
          ],
          [
            'question' => "Quels sont les risques liés à l'OCT-Angiographie ?",
            'answer' => "<p class='faq-content'>
                        Les risques liés à l'OCT-Angiographie sont faibles, mais peuvent
                        inclure une douleur oculaire, une inflammation, une infection,
                        une perte de vision et une réaction allergique à la lentille de
                        contact
                        </p>"
          ],
          [
            'question' => "Comment se déroule une séance d'OCT-Angiographie ?",
            'answer' => "<p class='faq-content'>
                        Une séance d'OCT-Angiographie est réalisée en ambulatoire et ne
                        nécessite pas d'anesthésie générale. Le patient est installé
                        confortablement et une lentille est placée sur l'œil pour
                        protéger la cornée. Le médecin utilise ensuite l'OCT pour
                        produire des images en 2D et 3D des vaisseaux sanguins de la
                        rétine
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'retinographie-ultra-grand-champ',
        'title' => 'la retinographie ultra grand champ',
        'shortDescription' => "La rétinographie ultra grand champ est une technique d'imagerie de la rétine qui permet d'obtenir des images de la périphérie de la rétine avec un champ de vision allant jusqu'à 220 degrés.",
        'poster' => '/assets/img/eye-ultra-zoom.png',
        'content' => " <h1>
                Qu'est-ce que la <span>retinographie ultra grand champ </span>?
              </h1>
              <p>
                La <strong>rétinographie ultra grand champ </strong> est une
                technique d'imagerie de la rétine qui permet d'obtenir des images
                de la périphérie de la rétine avec un champ de vision allant
                jusqu'à 220 degrés. Cette technique est utilisée pour
                <strong>détecter</strong> des anomalies vasculaires situées en
                périphérie de la rétine, telles que dans la rétinopathie.
              </p>
              <p>
                <strong>L'imagerie ultra grand champ</strong> peut aider à
                dévoiler plus de signes pathologiques qu'un champ de vision
                classique et apporte des preuves supplémentaires pour déterminer
                un diagnostic. La rétinographie grand champ permet ainsi de
                détecter plus facilement des anomalies vasculaires situées en
                périphérie de la rétine comme dans la rétinopathie.
              </p>
              <h3>
                Les avantages de la rétinographie ultra grand champ sont les
                suivants :
              </h3>
              <ul>
                <li>
                  Permet de détecter des anomalies vasculaires situées en
                  périphérie de la rétine
                </li>
                <li>Champ de vision allant jusqu'à 220 degrés</li>
                <li>Images de fond d'œil en haute résolution</li>
                <li>
                  Dévoile plus de signes pathologiques qu'un champ de vision
                  classique
                </li>
                <li>
                  Apporte des preuves supplémentaires pour déterminer un
                  diagnostic
                </li>
              </ul>",
        'image' => '/assets/img/eye-ultra-zoom.png',
        'faq' => [
          [
            'question' => "Comment se déroule une séance de rétinographie ultra grand champ ?",
            'answer' => "<p class='faq-content'>
                        Une séance de rétinographie ultra grand champ est réalisée en
                        ambulatoire et ne nécessite pas d'anesthésie générale. Le
                        patient est installé confortablement et une lentille est placée
                        sur l'œil pour protéger la cornée. Le médecin utilise ensuite un
                        appareil photographique spécialisé pour capturer des images
                        haute résolution de la rétine en entier
                        </p>"
          ],
          [
            'question' => "Quels sont les avantages de la rétinographie ultra grand champ
                        par rapport à la rétinographie classique ?",
            'answer' => "<p class='faq-content'>
                        La rétinographie ultra grand champ permet de visualiser la
                        rétine en entier, y compris les zones périphériques, ce qui
                        permet de détecter plus facilement des anomalies vasculaires
                        situées en périphérie de la rétine. Elle permet également de
                        détecter les lésions et les maladies de la rétine avec une
                        grande précision
                        </p>"
          ],
          [
            'question' => "Quelles sont les indications de la rétinographie ultra grand
                        champ ?",
            'answer' => "<p class='faq-content'>
                        La rétinographie ultra grand champ est utilisée pour le
                        dépistage et le suivi des maladies de la rétine, notamment la
                        rétinopathie diabétique, la dégénérescence maculaire liée à
                        l'âge, la rétinopathie hypertensive et la rétinopathie de
                        prématurité
                        </p>"
          ],
          [
            'question' => "Quels sont les risques liés à la rétinographie ultra grand champ
                        ?",
            'answer' => "<p class='faq-content'>
                        Les risques liés à la rétinographie ultra grand champ sont
                        faibles, mais peuvent inclure une douleur oculaire, une
                        inflammation, une infection, une perte de vision et une réaction
                        allergique à la lentille de contact
                        </p>"
          ],
        ]
      ],
      (object) [
        'id' => 'la-tomographie-OCT',
        'title' => 'la tomographie - OCT',
        'shortDescription' => "La tomographie par cohérence optique (OCT) est une technique d'imagerie non invasive et non irradiante utilisée en ophtalmologie pour visualiser les différentes structures de l'œil",
        'poster' => '/assets/img/eye-utlra-zoom3.png',
        'content' => " <h1>Qu'est-ce que <span>la tomographie - OCT </span>?</h1>
                <p>
                  La tomographie par cohérence optique (OCT) est une technique
                  d'imagerie non invasive et non irradiante utilisée en
                  ophtalmologie pour visualiser les différentes structures de l'œil,
                  notamment la rétine, la macula, le nerf optique, la cornée et
                  l'angle irido-cornéen.
                </p>
                <ul>
                  <li>
                    <strong>Fonctionnement de l'OCT </strong>: L'OCT utilise des
                    ondes lumineuses pour prendre des photos en épaisseur (coupe)
                    des différentes structures de l'œil. Elle envoie une onde
                    lumineuse de faible intensité et invisible à l'œil nu, et
                    analyse la réflexion de celle-ci sur votre œil à l'aide d'une
                    caméra spécifique.
                  </li>
                  <li>
                    <strong>Applications médicales</strong> : L'OCT est utilisée
                    pour diagnostiquer et surveiller différentes affections
                    oculaires, telles que la dégénérescence maculaire liée à l'âge
                    (DMLA), le glaucome, la rétinopathie diabétique, les
                    décollements de rétine, les tumeurs intraoculaires et les
                    pathologies du nerf optique.
                  </li>
                  <li>
                    <strong>Procédure de l'examen :</strong> L'examen d'OCT est
                    généralement réalisé par un technologue en imagerie médicale. Le
                    patient est positionné de manière appropriée et un gel est
                    appliqué sur la peau pour faciliter la transmission des ondes
                    lumineuses. L'OCT envoie des ondes lumineuses dans l'œil et
                    analyse la réflexion de celles-ci pour créer des images en temps
                    réel.
                  </li>
                  <li>
                    <strong>Avantages de l'OCT :</strong> L'OCT est non invasive,
                    indolore et ne nécessite pas d'exposition aux radiations
                    ionisantes. Elle peut fournir des informations précieuses sur la
                    structure et la fonction des structures oculaires internes, y
                    compris les couches distinctes de la rétine et de la macula.
                  </li>
                </ul>",
        'image' => '/assets/img/eye-utlra-zoom3.png',
        'faq' => [
          [
            'question' => "À quoi sert la tomographie en cohérence optique (OCT) en
                        ophtalmologie ?",
            'answer' => "<p class='faq-content'>
                        La tomographie en cohérence optique (OCT) est utilisée en
                        ophtalmologie pour diagnostiquer et suivre l'évolution de
                        diverses maladies de l'œil, telles que la dégénérescence
                        maculaire liée à l'âge, la rétinopathie diabétique, le glaucome
                        et la neuropathie optique
                        </p>"
          ],
          [
            'question' => "Comment se déroule une séance de tomographie en cohérence
                        optique (OCT) et est-ce douloureux ?",
            'answer' => "<p class='faq-content'>
                        Une séance de tomographie en cohérence optique (OCT) est
                        réalisée en ambulatoire et ne nécessite pas d'anesthésie
                        générale. Le patient est installé confortablement et une
                        lentille est placée sur l'œil pour protéger la cornée. Le
                        médecin utilise ensuite l'OCT pour produire des images en 2D et
                        3D des tissus de l'œil. La procédure est indolore
                        </p>"
          ],
          [
            'question' => " Quels sont les avantages de la tomographie en cohérence optique
                        (OCT) par rapport à d'autres techniques d'imagerie oculaire ?",
            'answer' => "<p class='faq-content'>
                        La tomographie en cohérence optique (OCT) offre plusieurs
                        avantages par rapport à d'autres techniques d'imagerie oculaire,
                        notamment une résolution très élevée, une précision accrue, une
                        non-invasivité et une rapidité d'exécution
                        </p>"
          ],
          [
            'question' => " Y a-t-il des risques liés à la tomographie en cohérence optique
                        (OCT) et comment les minimiser ?",
            'answer' => "<p class='faq-content'>
                        Les risques liés à la tomographie en cohérence optique (OCT)
                        sont faibles, mais peuvent inclure une douleur oculaire, une
                        inflammation, une infection, une perte de vision et une réaction
                        allergique à la lentille de contact. Pour minimiser ces risques,
                        il est important de suivre les instructions du médecin et de
                        signaler tout symptôme anormal après la procédure
                        </p>"
          ],
        ]
      ],
    ];
  }
}


if (!function_exists('getStaticPostsList')) {
  function getStaticPostsList()
  {
    return [
      (object)[
        'id' => 'article2',
        'title' => 'Quand consulter un ophtalmologue : Les signes qui ne trompent pas',
      ],
      (object)[
        'id' => 'article3',
        'title' => 'Préserver sa vue au quotidien : Les causes de la baisse de la vue et comment l\'éviter',
      ],
      (object)[
        'id' => 'article4',
        'title' => 'Comprendre la myopie : causes, symptômes et traitements',
      ],
      (object)[
        'id' => 'article5',
        'title' => 'La routine des jeunes et ses conséquences sur la vue : Protéger les yeux pour une vision durable',
      ],
      (object)[
        'id' => 'article1',
        'title' => 'Les Aliments Essentiels pour une Bonne Vue',
      ],
    ];
  }
}

if (!function_exists('getArticleByID')) {
  function getArticleByID($articleId)
  {
    $services = getStaticPostsList();
    foreach ($services as $element) {
      if ($articleId == $element->id) {
        return $element;
      }
    }
    return false;
  }
}



if (!function_exists('getServiceByID')) {
  function getServiceByID($serviceId)
  {
    $services = getStaticData();
    foreach ($services as $element) {
      if ($serviceId == $element->id) {
        return $element;
      }
    }
    return false;
  }
}
