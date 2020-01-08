</main>
        <!-- End of Main Section -->
        <!-- Start of Footer Section -->
        <footer id="main-footer">
            <ul id="social-navigation">
                <li><a href="https://www.xing.com/profile/Ariane_Feldmann" target="_blank"><i class="fab fa-xing"></i></a></li>
                <li><a href="https://de.linkedin.com/in/ariane-feldmann" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://github.com/FeliOdras?tab=repositories" target="_blank"><i class="fab fa-github"></i></a></li>
            </ul>
        </footer>
        <!-- End of Footer Section -->
        <nav id="meta-menu">
            <ul>
                <li><a href="http://www.digitalcareerinstitute.org" title="Digital Career Institute">DCI</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="disclaimer.php">Imprint and Disclaimer</a></li>
            </ul>
        </nav>
        
        <?php if ($pageID === 'Projects') 
        { echo '<script src="./assets/js/projects.js"></script>';}
        elseif ($pageID === 'index') 
        { echo '<script src="./assets/js/frontpage.js"></script>';}?>
</body>

</html>
