<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		
		 <div class="container horizontal_space_lg">
               <div class="row od_footer horizontal_space">
                   <div class="col-md-4 col-sm-4 col-xs-12">
                       <h6>LINKS</h6>
                       
                       <ul>
                           <li> 
                               <a href="/wp/index.php/about-open-data/">About Open Data</a>
                           </li>
                           <li> 
                               <a href="">Enabling Federal Laws</a>
                           </li>
                           <li> 
                               <a href="/organization">Publishers</a>
                           </li>
                           <li> 
                               <a href="">Partners  & <br> Stakeholders</a>
                           </li>
                           <li> 
                               <a href="/wp/index.php/forums/forum/11-2/">Request a Dataset</a>
                           </li>
                           <li> 
                               <a href="/wp/index.php/frequently-asked-questions">FAQ</a>
                           </li>
                           <li> 
                               <a href="/wp/index.php/contact/">Contact Us</a>
                           </li>
                       </ul>
                   </div>
                   <div class="col-md-4 col-sm-4 col-xs-12 horizontal_space">
                       <div class="joomla_stw">
                        <a class="twitter-timeline" width="280" height="300" data-theme="light" data-link-color="#0084b4" data-chrome="   " data-border-color="#e8e8e8" data-tweet-limit="0" data-related="" data-screen-name="ngrcommtech" data-show-replies="false" data-aria-polite="Polite" lang="EN" href="https://twitter.com/ngrcommtech" data-widget-id="443342916686053376">Tweets by @ngrcommtech</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                   </div>
                   <div class="col-md-4 col-sm-4 col-xs-12 horizontal_space">
                       <h6>RELATED</h6>
                       <?php get_sidebar( 'main' ); ?>
                   </div>
               </div>
           </div>
      </div>
      <hr>
      <footer>
          <div class="container">
              <p>Copyright(c) 2015 Federal Open Data Portal powered by Federal Ministry of Communication Technology. All Rights Reserved.</p>   
          </div>
      </footer>
      
		
	</div><!-- #page -->
	
	<?php wp_footer(); ?>
</body>
</html>