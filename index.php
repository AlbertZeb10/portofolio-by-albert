<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porfolio Albert Saputra Zebua</title>
    <link rel="icon" type="image/x-icon" href="./Images/favicon.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" media="screen and (max-width: 821px)" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <!-- Navbar Section -->
    <nav id="navbar" class="flex s-around bg-color">
        <div class="left-nav">
            <h2 class="t-white">Albert Saputra Zebua</h2>
        </div>
        <div class="right-nav">
            <ul class="flex">
                <li><a href="#home" class="t-white roboto">Home</a></li>
                <li><a href="#about" class="t-white roboto">About Me</a></li>
                <li><a href="#skills" class="t-white roboto">Skills</a></li>
                <li><a href="#services" class="t-white roboto">services</a></li>
                <li><a href="#projects" class="t-white roboto">Projects</a></li>
            </ul>
        </div>
    </nav>

    <!-- Bottom Navigator -->
    <section id="bottom">
        <div class="bottom-nav flex s-center items-center">
            <ul class="flex s-around items-center">
                <a href="#home">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-house"></i></li>
                </a>
                <a href="#about">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-user"></i></li>
                </a>
                <a href="#skills">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-code"></i></li>
                </a>
                <a href="#services">
                    <li class="bottomo-hover flex s-center items-center">
                        <i class="fa-solid fa-rocket"></i>
                    </li>
                </a>
            </ul>
        </div>
    </section>

    <!-- Home Section -->
    <section id="home" class="flex s-around sw-80 m-auto">
        <div class="home-left flex items-center">
            <div class="home-content">
                <h6 class="poppinss">Hi, I'm</h6>
                <h1 class="t-white">Albert Saputra Zebua</h1>
                <h4 class="poppinss">College Student</h4>
                <a href="#" target="_blank"><button
                        class="btn poppins">Resume</button></a>
                <a class="btn live poppins" id="hireme" href="https://www.linkedin.com/in/albert-zebua-25aa68260/"
                    target="_blank">Let's Talk</a>
            </div>
        </div>
        <div class="home-right flex s-center items-center">
            <div class="circle flex s-center items-center" id="mainImage">
                <!-- Here in src replace the given link with your image link -->
                <img src="images/Albert.png" alt="">
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h1 class="t-center my-2 t-white f-2">About Me</h1>
        <div class="about-container flex s-around ">
            <div class=" about-left flex s-center items-center">
                <!-- Here in src replade the given link with your secondary image link -->
                <img src="./Images/secondary.jpg" alt="" style="width: 50%;">
            </div>

            <div class="about-right flex">
                <div class="about-content">
                    <h1 class="t-white m-b-1 poppins">Albert Saputra Zebua</h1>
                    <p class="t-white poppins">Informatics students with academic performance and good 
                        interpersonal. Have skills in Web Developer such as FrontEnd and BackEnd. Now I want to
                        develop my skills in the field of Development.</p>
                    <a class="btn live poppins" id="hireme"
                        href="https://github.com/AlbertZeb10">Hire Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h1 class="t-center my-2 t-white f-2">Skills</h1>
        <div class="skill-container flex s-around h-50"">
        <div class=" skills-left flex s-center items-center">
            <img src="/Images/skills.png" alt="">
        </div>

        <div class="skills-right flex items-center">
            <div class="skillss-container">
                <div class="html bar p-relative"><span class="bar-content left t-white">HTML</span><span
                        class="bar-content right-skills t-white">90%</span></div>
                <div class="php bar p-relative"><span class="bar-content left t-white">PHP</span><span
                        class="bar-content right-skills t-white">90%</span></div>
                <div class="css bar p-relative"><span class="bar-content left t-white">CSS</span><span
                        class="bar-content right-skills t-white">80%</span></div>
                <div class="js bar p-relative"><span class="bar-content left t-white">JavaScript</span><span
                        class="bar-content right-skills t-white">80%</span></div>
                <div class="bootstrap bar p-relative"><span class="bar-content left t-white">Bootstrap</span><span
                        class="bar-content right-skills t-white">80%</span></div>
                <div class="reactjs bar p-relative"><span class="bar-content left t-white">ReactJs</span><span
                        class="bar-content right-skills t-white">70%</span></div>
            </div>
        </div>
        </div>
    </section>

    <!-- Skill Section -->
    <section id="skill">
        <h1 class=" t-center my-2 t-white f-2">Skill</h1>
        <div class="skill-container flex s-center">
            <div class="test-item flex f-col items-center">
                <img src="./Images//developer.png" alt="">
                <h1 class="t-white poppins">Web Development</h1>
                <p class="t-white poppins">Web Development is envolving everywhere. Every startup and every bussines
                    have their own websites. As my passion I will help you to build your clean and fast website for your
                    startup or your bussines by using several Programming Languages.</p>
            </div>
            <div class="test-item flex f-col items-center">
                <img src="./Images//social-media-management.png" alt="">
                <h1 class="t-white poppins">Web Design</h1>
                <p class="t-white poppins">Web Design is envolving everywhere. Every startup and every bussines have their own 
                    Website Design. As my passion I will help you to build your easily and fast Website Design for your startup or 
                    your bussines.</p>
            </div>
            <div class="test-item flex f-col items-center">
                <img src="./Images//startup.png" alt="">
                <h1 class="t-white poppins">Growth Strategies</h1>
                <p class="t-white poppins">As a web developer also I will help your brand to grow up . I will provide
                    the growth strategies for your brand. And also help in searching techniques for your brand.</p>
            </div>

        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h1 class=" t-center my-2 t-white f-2">Projects</h1>
        <div class="projects-container flex s-center">
            <div class="projects-item flex f-col s-center items-center">
                <h1 class="t-white poppins">Music Go</h1>
                <p class="t-white poppins"> Music website using PHP, CSS, JAVASCRIPT and Bootstrap 5. Retrieving songs from 
                    downloads using Youtube, Javascript and MySQL as PHPMYADMIN.</p>
                <div class="buttons flex s-around">
                    <a href="https://github.com/AlbertZeb10/code-informatika-ukrida"
                        target="_blanks" class="btn mx-1 m-top">GitHub</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <h1 class="t-white poppins">Project Movie</h1>
                <p class="t-white poppins">Web Project Movie menggunakan HTML, CSS dan JAVASCRIPT.</p>
                <div class="buttons flex s-around">
                    <a href="https://github.com/AlbertZeb10/Project-Movie" target="_blanks"
                        class="btn mx-1 m-top">GitHub</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <h1 class="t-white poppins">BEM UKRIDA</h1>
                <p class="t-white poppins">Web BEM UKRIDA uses PHP, CSS and JAVASCRIPT. Web BEM UKRIDA is an organization within the UKRIDA campus.</sp>
                <div class="buttons flex s-around">
                    <a href="https://github.com/AlbertZeb10/BEM_UKRIDA" target="_blank"
                        class="btn mx-1 m-top">GitHub</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <h1 class="t-white poppins">Psychological Disorders</h1>
                <p class="t-white poppins">Web Psychological Disorders using HTML, CSS, PHP, JAVASCRIPT, SCSS. Web Psychological Disorders also uses Artifical Intelligent or Expert System that diagnoses a psychological disorder.</p>
                <div class="buttons flex s-around">
                    <a href="https://github.com/AlbertZeb10/PyschologicalDisorders" target="_blank"
                        class="btn mx-1 m-top">GitHub</a>
                </div>
            </div>

            <div class="projects-item flex f-col s-center items-center">
                <h1 class="t-white poppins">More Project</h1>
                <p class="t-white poppins">Some of my projects can be seen in the following GitHub</p>
                <div class="buttons flex s-around">
                    <a href="https://github.com/AlbertZeb10" target="_blank"
                        class="btn mx-1 m-top">GitHub</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Me Section -->
    <section id="contact" class="m-b-1">
        <h1 class=" t-center my-2 t-white f-2">Contact Me</h1>
        <div class="contact-container flex s-around items-centers">
            <div class="form" id="contactForm">
                <form action="" id="contactFrom">
                    <div class="name form-div">
                        <input type="text" name="name" id="name" class="poppins" placeholder="Enter Your Name">
                    </div>
                    <div class="email form-div">
                        <input type="email" name="email" id="email" class="poppins" placeholder="Enter Your Email"
                            required>
                    </div>
                    <div class="phone form-div">
                        <input type="phone" name="phone" id="phone" class="poppins" placeholder="Enter Your Phone"
                            required>
                    </div>
                    <div class="textarea form-div">
                        <textarea name="text" id="textarea" cols="30" rows="10" class="poppins"
                            placeholder="Enter Messages"></textarea>
                    </div>
                    <button type="submit" class="btn poppins" id="submit">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer id="footer">
        <ul class="flex s-center w-80 m-auto my-2 res">
            <li><a href="#home" class="poppinss">Home</a></li>
            <li><a href="#about" class="poppinss">About</a></li>
            <li><a href="#skills" class="poppinss">Skills</a></li>
            <li><a href="#projects" class="poppinss">Projects</a></li>
            <li><a href="#portfolio" class="poppinss">Portfolio</a></li>
        </ul>
        <ul class="flex s-center w-80 font-awesome ">
            <a href="https://www.linkedin.com/in/albert-zebua-25aa68260/" target="_blank">
                <li><i class="fa-brands fa-linkedin-in"></i></li>
            </a>
            <a href="https://github.com/AlbertZeb10" target="_blank">
                <li><i class="fa-brands fa-github"></i></li>
            </a>
            <a href="https://www.instagram.com/albertsaputra10" target="_blank">
                <li><i class="fa-brands fa-instagram"></i></li>
            </a>
        </ul>
        <p class="t-center my-2 poppins">&copy; All Rights Reserved - <span class="cpy-white poppins">Albert
            Saputra Zebua 
        </span></p>

    </footer>

    <div id="scroll-top" onclick="scrolltop()">
        <span><i class="fa-solid fa-arrow-up"></i></span>
    </div>

</body>
<script src="js/index.js"></script>

</html>