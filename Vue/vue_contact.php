<?php 
    $title = "Me contacter";
    $css = "contact";
    ob_start();
?>
<section class="conteneur-contact"> 
    <div class="contact-form">
        <h1>Me contacter</h1>
        <p>Vous pouvez directement m'envoyer un mail avec ce formulaire ou à mon adresse <span>glopez-dev@proton.me</span></p>
        <form>
            <div class="form-group">
                <label for="firstname">Nom</label>
                <input type="text" name="firstname" id="firstname" required class="form-element" placeholder="Dupont" />
            </div>
            <div class="form-group">
                <label for="lastname">Prenom</label>
                <input type="text" name="lastname" id="lastname" required class="form-element" placeholder="Michel" />
            </div> 
            <div class="form-group full">
                <label for="email"> e-mail </label>
                <input type="text" name="email" id="email" required class="form-element" placeholder="m.dupont@example.com" />
            </div>
            <div class="form-group full">
                <label for="message">Que puis-je faire pour vous ?</label>
            <textarea name="message" id="message" class="form-element" placeholder="J'aimerais discuter... "></textarea>
            </div>
            <div class="submit-group">
                <input type="submit" value="ENVOYER" />
            </div>
        </form>
  </div>
</section> 
<?php
    $content = ob_get_clean();
    require 'Vue/vue_header.php';
    echo $content;
    require 'Vue/vue_footer.php';
?>
