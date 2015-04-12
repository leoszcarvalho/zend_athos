<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Se Atualize!</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Cadastre seu email e receba toda semana nossa newsletter para se manter informado sobre as novidades da Athos.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Últimos Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contate-nos</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Endereço:</strong> <?php echo $endereco;?></p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Telefone:</strong> <?php echo $telefone;?></p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Redes Sociais</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="http://www.facebook.com/<?php echo $facebook;?>" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="http://www.twitter.com/<?php echo $twitter;?>" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="http://www.linkedin.com/<?php echo $linkedin;?>" target="_blank" data-placement="bottom" data-tooltip title="Linkedin">Linkedin</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<a href="/" class="logo">
									<img alt="Porto Website Template" style="width:120px;" class="img-responsive" src="<?php echo $dominio;?>/img/logo_rodape.png">
								</a>
							</div>
							<div class="col-md-6" align="center">
								<p>© Copyright 2015. Todos os direitos reservados a Athos Publicidade.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="<?php echo $dominio; ?>/athos/cases-e-temas">Cases e Temas</a></li>
										<li><a href="<?php echo $dominio; ?>/athos/serviços">Serviços</a></li>
										<li><a href="<?php echo $dominio; ?>/athos/contato">Contato</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
            
            
           