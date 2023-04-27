<?php
  $now = time();
  $birthDate = strtotime('2004-07-09');
  $age  = dateDiff($now, $birthDate);
?>

<section id="a-propos-de-moi">
  <h1 class="title">à propos de moi</h1>
  <hr class="separator">
    <article class="paragraph">
         <p>J'ai <?= $age ?> ans, je suis originaire de la Réunion et j'habite
           actuellement à Saint-Benoît.
           <br><br>
           Passionné par le fonctionnement des programmes informatiques, j’ai appris les bases
           du Python que j’ai approfondi de manière autonome depuis quelques temps.
           Je me suis entraîné à réaliser de petits programmes de plus en plus complexes en fonction de mes connaissances. 
           J'ai par la suite poursuivi mes études en BTS Services Informatiques aux Organisations (SIO).
           <br><br>

         C'est en ayant alimenté mon envie naturelle de connaissances en la matière
         que j'ai décidé d'en faire mon métier.

         <br>

         En dehors de ma passion pour l'informatique,
         je suis passioné de musique, je chante et je produit quelques fois.

         <br>
           C'est un domaine assez complexe à appréhender mais c'est parce qu'il existe
           une réelle difficulté dans ce domaine,que je m'y suis pris de passion.
         </p>
         <a href="#formation"><button type="button" name="btnNext" class="btnNext">Découvrir mes formations</button></a>

    </article>

    <article class="paragraph">
         <p>
           J'ai intégré une filière générale au lycée et j'ai obtenu mon baccalauréat (qui bénéficiait d'un côté plus informatique)
           avec option Numérique et Sciences Informatiques (NSI) et Mathématiques.

           <br><br>

           Après l'obtention de mon baccalauréat
           J'ai pu intégrer une formation en BTS SIO option
           Solutions Logicielles et Applications Métiers (SLAM) que je prépare
           actuellement au Lycée Nelson Mandela.
         </p>
         <a href="#competences"><button type="button" name="btnNext" class="btnNext">Découvrir mes compétences</button></a>
    </article>

    <h1 class="center">- Mes qualités -</h1>

    <br>

    <div class="qualites">
        <div class="content">
          <h2>Aidant</h2>
          <br><br>
          <img src="/public/img/help.svg" alt="Help">
        </div>

        <div class="content">
          <h2>Autonome</h2>
          <br><br>
          <img src="/public/img/route.svg" alt="Help">
        </div>

        <div class="content">
          <h2>Curieux</h2>
          <br><br>
          <img src="/public/img/question.svg" alt="Help">
        </div>
    </div>
</section>
