<!-- Notice Section START -->
<div class="notice-section-grey notice-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-12">
                <div class="single">
                    <form action="index#newsletter" method="post" id="newsletter">
                        <div class="input-group">
                            <input type="email" name="newsletter" class="form-control" placeholder="inscription à la Newsletter" required>
                            <span class="btn-newsletter">
                                <button class="button-md  article-btn btn-newsletter" type="submit">INSCRIVEZ-VOUS</button>
                            </span>
                            <?php
                            if (isset($_POST['newsletter'])) {
                                $email = isset($_POST['newsletter']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['newsletter']) : "";
                                $rapport = "Votre méssage a bien été envoyé";
                                $entete  = 'MIME-Version: 1.0' . "\r\n";
                                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                                $entete .= 'From: ' . $_POST['newsletter'] . "\r\n";

                                $mail = '<html>
                                        <h4>Cette personne souhaite recevoir le newsletter</h4>
                                                       <b>Email : </b>' . $email . '<br>
                                                       </html>';

                                $retour = mail('unpi5962@orange.fr', 'Cette personne souhaite recevoir le newsletter', $mail, $entete);

                                if ($retour) {
                                    echo '<div class="alert alert-success col-md-12 mt-5"><p>Votre inscription à la newsletter a bien été prise en compte</p> </div>';
                                }
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2">

            </div>

            <div class="col-md-5 col-sm-12 col-12 mt-15-xs">
                <div class="row" style="justify-content: flex-end;">
                    <div class="col">
                        <h6>Envie de nous rejoindre ?</h6>
                        <div class="section-heading-line-left"></div>
                    </div>
                    <div class="col-auto">
                        <div class="right-holder-md">
                            <a href="<?= URL ?>rejoindre?param=adherer" class="primary-button button-md ">Cliquez ici !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
  
    </style>
<!-- <div class="invisible-div"></div> -->

</div>
