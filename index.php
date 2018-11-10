<?php 
    $pageID	    = 'index';
    $headTitle	= 'Ariane Feldmann - Frontend.Developer by passion';
    $pageTitle	= 'Make code <em>Beautiful</em>';

    include 'includes/head.php';
    include 'includes/header/headerFront.php'; 
    include 'includes/content/frontpage/about.php'; 
?>
        
            
            <!-- Start of Section 'Skills' -->
            <a id="skills"></a>
            <section id="home_skills">
                <div class="main_wrapper">
                    <h3 class="sectionheading aligncenter">Skills</h3>
                    <!-- Used flexbox model to display the four items responsively -->
                    <div class="flexbox">
                        <!-- Start of .flexboxitem 'Coding'-->
                        <div class="flexboxitem">
                            <figure>
                                <a href="skills.html#coding" title="Coding skills and programming languages">
                                    <img src="images/coding.jpg" alt="Coding" class="roundimg">
                                </a>
                                <figcaption><h4>Coding</h4></figcaption>                                
                            </figure>
                        </div>
                        <!-- End of .flexboxitem 'Coding' -->
                        <!-- Start of .flexboxitem 'CMS' -->
                        <div class="flexboxitem">
                            <figure>
                                <a href="skills.html#cms" title="Content Management Systems I have worked with">
                                    <img src="images/cms.jpg" alt="CMS" class="roundimg">
                                </a>
                                <figcaption><h4>CMS</h4></figcaption>
                            </figure>
                        </div>
                        <!-- End of .flexboxitem 'CMS' -->
                        <!-- Start of .flexboxitem 'Graphic Design' -->
                        <div class="flexboxitem">
                            <figure>
                                <a href="skills.html#Graphic" title="Image Editing and Manipulation">
                                    <img src="images/home-office.jpg" alt="Graphic Design" class="roundimg">
                                </a>
                                <figcaption><h4>Graphic Design</h4></figcaption>                                    
                            </figure>
                        </div>
                        <!-- End of .flexboxitem 'Graphic Design' -->

                        <!-- Start of .flexboxitem 'Languages' -->
                        <div class="flexboxitem">
                            <figure>
                                <a href="skills.html#lang" title="Known Languages">
                                    <img src="images/project.jpg" alt="Languages" class="roundimg">
                                </a>
                                <figcaption><h4>Languages</h4></figcaption>          
                            </figure>
                        </div>
                        <!-- End of .flexboxitem 'Languages' -->
                    </div>
                    <!-- End of .flexbox Row -->
                </div>
            </section>
            <!-- End of Section 'Skills' -->
            <!-- Start of Section 'Code and Project' -->
            <a id="projects"></a>
            <section id="home_code" class="inverse">
                <div class="main_wrapper">
                    <h3 class="sectionheading alignleft">Code and Projects</h3>
                    <div class="flexbox">
                        <div class="flexboxitem box">
                            <a href="projects.html#html">
                                <div class="icons">
                                    <i class="fa fa-html5"></i>
                                    <i class="fa fa-css3"></i>
                                </div>
                                <h4>HTML and CSS</h4>
                                <p>Code examples for some fancy effects with CSS3.</p>
                            </a>
                        </div>
                        <div class="flexboxitem box">
                            <a href="projects.html#themes">
                                <div class="icons"><i class="fa fa-wordpress"></i>
                                    <i class="fa fa-joomla"></i>
                                </div>
                                <h4>Themes and Templates for CMS</h4>
                                <p>Individually styled WordPress sites</p>
                            </a>
                        </div>
                        <div class="flexboxitem box">
                            <a href="projects.html#javascript">
                                <div class="icons">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>JavaScript and its Frameworks</h4>
                                <p>Coming soon...</p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Section 'Code and Projects' -->
        </main>
        <!-- End of Main Section -->
        <!-- Start of Footer Section -->
        <footer id="main-footer">
            <ul id="social-navigation">
                <li><a href="https://www.xing.com/profile/Ariane_Feldmann" target="_blank"><i class="fa fa-xing"></i></a></li>
                <li><a href="https://de.linkedin.com/in/ariane-feldmann" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/FeliOdras?tab=repositories" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
        </footer>
        <!-- End of Footer Section -->
        <nav id="meta-menu">
            <ul>
                <li><a href="dci.html" title="Working Materials for the courses at Digital Career Institute">DCI</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="disclaimer.html">Imprint and Disclaimer</a></li>
            </ul>
        </nav>
        <div class="validation">
            <a href="http://validator.w3.org/check/referer" target="_blank" title="Validate MarkUp">Valid HTML5 <i class="fa fa-html5"></i></a> | <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fme.odras.de%2Fstyle%2Fstyle.css" title="Validate Stylesheet" target="_blank" rel="nofollow">Valid CSS3 <i class="fa fa-css3"></i></a></div>
        </div>
</body>

</html>
