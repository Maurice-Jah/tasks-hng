<?php

require 'connection.php';

$name = $email = $comment = "";

  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =  $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['message'];

    $sql = "INSERT INTO feedback(name, email, message) VALUES ('$name', 
   '$email', '$comment')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

     
    header("Location: submit.php");
    exit();
  }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- fontawesome icons -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="css/style.css" />

    <title>Resume</title>
  </head>
  <body>
      <div class="wrapper">
    <div class="header">
      <nav class="header__nav">
        <h3 class="header__nav-title">My Resume</h3>
        <ul class="header__nav-links">
          <li class="header__nav-links--item"><a href="#about">About</a></li>
          <li class="header__nav-links--item"><a href="#skills">Skills</a></li>
          <li class="header__nav-links--item"><a href="#">Portfolio</a></li>
          <li class="header__nav-links--item"><a href="#experience">Experience</a></li>
          <li class="header__nav-links--item"><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>

    <!-- hero section -->
    <div class="hero">
      <div class="hero__picture">
        <img
          src="images/IMG_2241.JPG"
          alt="profile-image"
          class="hero__picture-img"
        />
      </div>
     
      <div class="hero__detail">
      <h2 class="hero__name">Maurice Okeke</h2>
      <p class="hero__title">Web Developer, UI/Ux Designer</p>
      <a href="#contact" role="button"> Hire me </a>
    </div>

      <!-- <div class="hero__links">
        <a href="#"
          ><i
            class="fa fa-facebook"
            aria-hidden="true"
            class="hero__links-facebook"
          ></i
        ></a>
        <a href="#">
          <i
            class="fa fa-twitter"
            aria-hidden="true"
            class="hero__links-twitter"
          ></i
        ></a>
        <a href="#"
          ><i
            class="fa fa-linkedin"
            aria-hidden="true"
            class="hero__links-linkedin"
          ></i
        ></a>
        <a href="#"
          ><i
            class="fa fa-instagram"
            aria-hidden="true"
            class="hero__links-instagram"
          ></i>
        </a>
      </div> -->
    </div>
</div>

    <section class="information">
      <div class="information__about">
          <h1 id="about">Professional Summary</h1>
        <p class="information__about-text">
            A graduate of Computer Science with a knowledge in Web Design and Digital marketing
            seeking for an organization to put into use my learned and innate skills for self-improvement
            and actualization of the organisation’s goals and objectives. I am very passionate about
            imparting knowledge and adding values to the lives of people through the use of technology.
        </p>
      </div>
      <div class="information__information-basic">
        <h1 class="information__information-basic--title">Basic Information</h1>
        <p class="information__information-basic--gender">
          Gender <span>Male</span>
        </p>
        <p class="information__information-basic--email">
          Email
          <span>mauriceokeke20@gmail.com</span>
        </p>
        <p class="information__information-basic--phone">
          Phone <span>+2348161803849 </span>
        </p>
        <p class="information__information-basic--address">
          Address <span>Ilorin </span>
        </p>
        <p class="information__information-basic--country">
          Country <span>Nigeria </span>
        </p>
      </div>
    </section>

    <!-- Skills -->

    <section class="skills" id="skills">
      <h1 class="skills__title">Professional skills</h1>
    
      <div class="progresses">
        <h3>HTML <span>90%</span></h3>
        <progress id="file" value="90" max="100"> 90%</progress>
        
      <h3>CSS <span>80%</span></h3>
      <progress id="file" value="80" max="100">80%</progress>
   
      <h3>JAVASCRIPT <span>32%</span></h3>
      <progress id="file" value="32" max="100">32%</progress>
 

      <h3>SASS <span>70%</span></h3>
      <progress id="file" value="70" max="100">70%</progress>

      <h3>UI/UX <span>60%</span></h3>
      <progress id="file" value="60" max="100">60%</progress>

      <h3>PHP <span>20%</span></h3>
      <progress id="file" value="20" max="100">20%</progress>
    </div>
  
    </section>


    <!-- portflio -->
    <!-- <span>Coming soon</p> -->

    <!-- Education -->
    <section class="education">
        <h1 class="education__title">Education</h1>
        <div class="higher">
        <h3 class="education__cert"> Certificate in Computer Science  <p class="education__year">2018</p></h3>
        <p class="education__qualification">Higher National Diploma (HND)</p>
        <p class="education__school">Federal Polytechnic Oko, Anambra State</p>
       
    </div>

    <div class="higher1">
        <h3 class="education__cert"> Certificate in Computer Science  <p class="education__year">2015</p> </h3>
        <p class="education__qualification"> Ordinary National Diploma (OND)</p>
        <p class="education__school">Federal Polytechnic Oko, Anambra State</p>
       
    </div>

    <div class="high">
        <h3 class="education__cert"> West African Senior School Certificate (WAEC/SSCE)  <p class="education__year">2011</p> </h3>
        <p class="education__school"> St. JohnBosco Seminary, Isuaniocha, Anambra State</p>
       
    </div>
       
    </section>

    <!-- Experience -->
    <section class="experience" id="experience">
      <h1 class="experience__title">Work Experience</h1>
      <p class="experience__main">
        CAV Official /Marketer, ESPN Courier Services and Logistics, 5/7 Jagun
        Street, off Wempco Road, Ogba, Ikeja, Lagos. <i style="font-weight: normal; font-size: 1rem;">(January, 2020 – October,
        2020) </i>
        <ul class="experience__list">
            <li>Attended to Customer’s Request</li>
            <li>Wrote out and keyed in Bank Addresses for verification</li>
            <li>Ensuring adequate supply of equipment for the daily running of the office</li>
        </ul>
      </p>
      <p class="experience__main">
        IT Personnel, Afrihub ICT Resources, Chukwuemeka Odumegwu University, Igbariam,
         Anambra State.  <i style="font-weight: normal; font-size: 1rem;"> (March 2015 – March, 2016) </i>
        <ul class="experience__list">
            <li>Cyber Café Managert</li>
            <li>Helped in conducting and maintaining of Examination Ethics</li>
            <li>In charge of Students’ ICT course registration</li>
        </ul>
      </p>
    </section>


    <!-- Trainings -->
    <section class="training">
        <h1 class="training__title">TRANINGS AND CERTIFICATIONS</h1>
        <p class="training__cert"> <strong> HNG Internship (Php) August 2021 - Present </strong></p>
        <p class="training__cert"> <strong> Certification by Google on The Fundamentals of Digital Marketing </strong> (April 2020)</p>
        <p class="training__cert"> <strong> Certification by Open Classroom (Facebook) on Web Design </strong>(February 2020) </p>
    </section>

    <!-- contact form -->
    <h1 class="form__title" id="contact">Contact Me</h1>
    <p class="form__message">Drop a message for me. All thanks to <img src="images/20210818_111827.jpg" alt="zuri-logo" width="150px" height="100px"></p>
    <form action="index.php" method="POST">
        <label for="name">
            <input type="text" name="name" id="name" placeholder="Name" required>
        </label>
        <label for="email">
            <input type="email" name="email" id="email"  placeholder="Email" required>
        </label>
        <label for="message">
         <textarea name="message" id="message"placeholder="Message" required></textarea>
        </label>

        <button type="submit" name="submit" class="submit">Submit</button>
    </form>

    <footer class="footer">
        <p>Designed by maurice during Internship @ <img src="images/20210818_111827.jpg" alt="zuri-logo" width="50px" height="50px">  </p>
        <p>copyright: All Rights reserved &copy; 2021</p>
    </footer>
  </body>
</html>
