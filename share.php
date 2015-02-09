<?php $titre = "Contact"; include 'includes/header.php'; ?>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js"><\/script>')</script>
<script src="twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.48287.js"></script>
<script src="js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
<script src="js/prettyPhoto_3.1.5/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/restart_theme.js"></script>

<div class="main">  

     <section class="hgroup"><div class="container">
          <h1><b>Contact</b> | Proposer un fichier</h1>
          <h2>Envoyez nous un .jar ou un plugins/mods/jar que vous souhaitez avoir sur le site.</h2>
               <ul class="breadcrumb pull-right">
                    <li>
                         <a href="index">Accueil</a>
                    </li>
                    <li class="active">Proposer un fichier</li>
               </ul>
          </div>
     </section>
               
     <section>
          <div class="container">
               <div class="row">
                    <div class="contact_form">
                         <form>
                              <div class="row">
                                   <div class="col-sm-4 col-md-4">
                                        <label>Prénom <i>ou</i> Pseudo</label>
                                        <input class="form-control" type="text" placeholder="Mon prénom">
                                   </div>
                                   <div class="col-sm-4 col-md-4">
                                        <label>Adresse mail</label>
                                        <input class="form-control" type="text" placeholder="exemple@exemple.fr">
                                   </div>
                                   <div class="col-sm-8 col-md-8">
                                        <label>Titre du message</label>
                                        <input class="form-control" type="text" placeholder="Le titre doit être en rapport avec votre message">
                                   </div>
                                   <div class="col-sm-8 col-md-8">
                                        <label>Votre message</label>
                                        <textarea rows="5" class="form-control"></textarea>
                                   </div>
                                   <div class="col-sm-8 col-md-8">
                                        <label for="exampleInputFile">Choisir un fichier</label>
                                        <input type="file" id="exampleInputFile">
                                        <p class="help-block">Le format du fichier doit être en <b>.jar</b>. Vous n'êtes pas obligé de mettre un fichier.</p>
                                   </div>
                                   <center>
                                        <div class="col-sm-8 col-md-8"><br/>
                                             <a class="btn btn-success btn-lg">
                                                  <span>Envoyer le message</span>
                                             </a>
                                        </div>
                                   </center>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </section>

<?php include 'includes/footer.php'; ?>
