<?php
/*
  Template Name: contact
*/
?>

<?php get_header();?>

<h1 class="p-5 m-5 text-center text-primary">Contact</h1>

<!-- formulaire de contact -->

<div class="text-center">
<?php echo apply_shortcodes( '[ninja_form id=2]	' ) ?>
</div>
<!-- <form action="" class="m-5 ">
    <div class="row text-center">
      <div class="col-md-6 col-sm-12 ">
        <input type="text" placeholder="Nom" class="form-control m-md-2 m-sm-0">
        <input type="text" placeholder="Email"  class="form-control m-md-2 m-sm-0">
      </div>
      <textarea class="form-control col m-2" placeholder="Message, question demande de date réservation" id="floatingTextarea2" style="height: 100px"></textarea>
    </div>
    <div class="d-grid gap-2 col-3 mx-auto  ">
      <button type="button" class="btn btn-primary">Envoyer</button>
    </div>
</form> -->

<!-- Accès -->
<h1 class="p-5 m-5 text-center text-primary"> Accès</h1>

<div class="container mb-5">
  <div class="d-flex row  ">
      <p class="adresse col-md-6 col-sm-12 text-center px-0 py-5">Le gîte aux anges <br>
        82 grande rue <br>
        51300 Thieblemont-Farémont <br>
        France</p>
      <iframe class="col-md-6 col-sm-12 px-0 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.802012774779!2d4.722656915041287!3d48.6901498792714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eb8bef77bb7053%3A0x92c7488ed0c24cfb!2s82%20Grande%20Rue%2C%2051300%20Thi%C3%A9blemont-Far%C3%A9mont!5e0!3m2!1sfr!2sfr!4v1632819723904!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <div class="d-flex row ">
    <iframe  class="col-md-6 col-sm-12 px-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.086314132838!2d4.383818715041023!3d48.68471437927087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ebf91872eaa3d9%3A0xb0492cd187f1b33a!2s27%20Rue%20Royer%20Collard%2C%2051320%20Sompuis!5e0!3m2!1sfr!2sfr!4v1632820865687!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <p class="adresse col-md-6 col-sm-12 text-center px-0 py-5">La chambre d'hôtes <br>
        27 rue Royer Collard <br>
        51320 Sompuis
    </p>
  </div>
</div>

    <?php get_footer(); ?>