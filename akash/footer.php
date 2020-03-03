<footer>
	<div id="newsletter">
		<form action="" method="get">
			<fieldset>
				<legend>Sign Up for Our Newsletter</legend>
				<label for="nl_email">Email address</label>
				<input id="nl_email" type="text" placeholder="Enter your email address for updates" />
				<input type="submit" value="Sign Up" />
			</fieldset>
		</form>
	</div>

<div class="deskfooter">
		<h2>Navigation</h2>
		<ul>
		    <li> <img src="<?php echo get_template_directory_uri(); ?>/img/akash-logo-white.svg" alt="Logo"> </li>
			<li>
				<a href="">About</a>
				<ul>
					<li><a href="">Team</a></li>
					<li><a href="">Vision</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Press</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</li>
			<li>
				<a href="">Developers</a>
				<ul>
					<li><a href="">Docs</a></li>
					<li><a href="">Forum</a></li>
					<li><a href="">Chat</a></li>
					<li><a href="">GitHub</a></li>
					<li><a href="">Roadmap</a></li>
				</ul>
			</li>
			<li>
				<a href="">Products</a>
				<ul>
					<li><a href="">Supercloud</a></li>
					<li><a href="">Supermini</a></li>
				</ul>
			</li>
			<li>
				<a href="">Resources</a>
				<ul>
					<li><a href="">White Papers</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">FAQ</a></li>
					<li><a href="">Brand Assets</a></li>
				</ul>
			</li>
			<li>
				<a href="">Community</a>
				<ul>
					<li><a href="">Validators</a></li>
				</ul>
				<ul class="social">
					<li class="twitter"><a href="" title="Twitter"><span>Twitter</span></a></li>
					<li class="facebook"><a href="" title="Facebook"><span>Facebook</span></a></li>
					<li class="instagram"><a href="" title="Instagram"><span>Instagram</span></a></li>
					<li class="reddit"><a href="" title="Reddit"><span>Reddit</span></a></li>
					<li class="riot"><a href="" title="Riot"><span>Riot</span></a></li>
					<li class="telegram"><a href="" title="Telegram"><span>Telegram</span></a></li>
				</ul>
			</li>
		</ul>
  </div>
  
  <div class="mobilefooter">
        <ul>
		    <li> <img src="<?php echo get_template_directory_uri(); ?>/img/akash-logo-white.svg" alt="Logo"> 
		         <span class="tagline">The Unstoppable Cloud™️</span>
		    </li>
		    <li><h3>About</h3></li>
		    <li><h3>Developers</h3></li>
		    <li><h3>Resources</h3></li>
		    <li><h3>Products</h3></li>
		    <li><h3>Community</h3></li>
		    <li><ul class="social">
					<li class="twitter"><a href="" title="Twitter"><span>Twitter</span></a></li>
					<li class="facebook"><a href="" title="Facebook"><span>Facebook</span></a></li>
					<li class="instagram"><a href="" title="Instagram"><span>Instagram</span></a></li>
					<li class="reddit"><a href="" title="Reddit"><span>Reddit</span></a></li>
					<li class="riot"><a href="" title="Riot"><span>Riot</span></a></li>
					<li class="telegram"><a href="" title="Telegram"><span>Telegram</span></a></li>
				</ul></li>
		    
		</ul>
  </div>
  
	<div class="copyright">
		<div>&copy; <?php echo esc_html( date_i18n( __( 'Y', 'akash' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> All rights reserved.</div>
		<ul>
			<li><a href="">Terms of Service</a></li>
			<li><a href="">Privacy</a></li>
		</ul>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>