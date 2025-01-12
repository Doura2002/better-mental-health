<?php 
include_once "db/conn.php";


if(isset($_GET['entry']) && isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  $entry = $_GET['entry'];
  $update = mysqli_query($conn,"UPDATE `users` SET `disease`='$entry' WHERE email = '$email'");
}
?>

<body>
  <header>
    <div class="containerr">
      <div class="brand">Better Mental Health</div>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="ourservices.html">Our Services</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section class="home">
    <div class="description">
      <h1 class="title">
        <link rel="stylesheet" href="Advice.css">
        <span class="gradient-text">There is hope</span> 
      </h1>
      <p class="paragraph">
        When addressing social phobia, stress, anxiety, or depression , 
        it's crucial to advocate for seeking professional assistance 
       from a licensed and good therapist.Central to this journey is acknowledging 
       that experiencing these challenges is a natural part of the human 
       condition. here you go some advices that may help you.
      </p>
     
    </div>

    <div class="users-color-container">
      <span class="item" style="--i: 1"></span>
      <img
        class="item"
        src="image/image1.png"
        style="--i: 2"
        alt="" />
      <span class="item" style="--i: 3"></span>
      <img
        class="item"
        src="image/image2.png"
        style="--i: 4"
        alt="" />

      <img
        class="item"
        src="image/image3.png"
        style="--i: 10"
        alt="" />
      <span class="item" style="--i: 11"></span>
      <img class="item" src="image/image8.png" style="--i: 12" alt="" />
      <span class="item" style="--i: 5"></span>

      <span class="item" style="--i: 9"></span>
      <img class="item" src="image/image4.png" style="--i: 8" alt="" />
      <span class="item" style="--i: 7"></span>
      <img class="item" src="image/image7.png" style="--i: 6" alt="" />
    </div>
  </section>

  <section class="card-container" id="card-container">
    <div class="slider">

     <!--  <div class="card" data-tilt>
        <div class="content">
          <img src="image/image9.png" alt="" />
          <h1>Your advice for social phobia</h1>
          <p>
            Seek Support from a trusted friend, family member, or
            or counselor who can provide support and understanding,
            Be kind to yourself and try to Practice relaxation
             techniques such as deep breathing, meditation. 
          </p>
          
        </div>
      </div>



      <div class="card" data-tilt>
        <div class="content">
          <img src="image/image5.png" alt="" />
          <h1>Your advice for anxiety</h1>
          <p>Challenge negative or irrational thoughts that contribute to your anxiety.
           and take a walk in the nature 
          </p>
          
        </div>
      </div>


      <div class="card" data-tilt>
        <div class="content">
          <img src="image/image1O.png" alt="" />
          <h1>Your advice for Depression</h1>
          <p>
           Creat a morning pampering routine  that nurtures your body and mind.
           Pay attention to your physical health by eating a balanced diet,
           getting enough sleep, and be always grateful.
          </p>
          
        </div>
      </div>

      <div class="card" data-tilt>
        <div class="content">
          <img src="image/image6.png" alt="" />
          <h1>Your advice for stress</h1>
          <p>
            Regular physical activity is an excellent way to reduce stress
           and improve your mood,  Learn to say no to additional commitments 
           or responsibilities when you're feeling overwhelmed. 
          </p>
          
        </div>
      </div> -->

    </div>

    <ul class="control" id="custom-control">
      <li class="prev">
        <ion-icon class="arrow" name="caret-back-outline"></ion-icon>
      </li>
      <li class="next">
        <ion-icon class="arrow" name="caret-forward-outline"></ion-icon>
      </li>
    </ul>

  </section defer>

  <script>
    // we declare this function for render specific DOM elment
    function renderEntry(){
      const searchParams = new URLSearchParams(window.location.search); // get the entry query from the current URL
        const entry = searchParams.get('entry');

        const card_container = document.getElementById('card-container'); // select card_container dom element

        //render each card baed on entry query from URL
        switch(entry) {
        case "social_phobia":  
          card_container.innerHTML = `<div class="card" data-tilt>
        <div class="content">
          <img src="image/image9.png" alt="" />
          <h1>Your advice for social phobia</h1>
          <p>
            Seek Support from a trusted friend, family member, or
            or counselor who can provide support and understanding,
            Be kind to yourself and try to Practice relaxation
             techniques such as deep breathing, meditation. 
          </p>
          
        </div>
      </div>`        
          break;

        case "Depresion":
          card_container.innerHTML = `<div class="card" data-tilt>
        <div class="content">
          <img src="image/image5.png" alt="" />
          <h1>Your advice for anxiety</h1>
          <p>Challenge negative or irrational thoughts that contribute to your anxiety.
           and take a walk in the nature 
          </p>
          
        </div>
      </div>`
          break;

        case "Anxiety":
          card_container.innerHTML = `<div class="card" data-tilt>
        <div class="content">
          <img src="image/image10.png" alt="" />
          <h1>Your advice for Depression</h1>
          <p>
           Creat a morning pampering routine  that nurtures your body and mind.
           Pay attention to your physical health by eating a balanced diet,
           getting enough sleep, and be always grateful.
          </p>
          
        </div>
      </div>`
          break;

        case "stress":
          card_container.innerHTML = `<div class="card" data-tilt>
        <div class="content">
          <img src="image/image6.png" alt="" />
          <h1>Your advice for stress</h1>
          <p>
            Regular physical activity is an excellent way to reduce stress
           and improve your mood,  Learn to say no to additional commitments 
           or responsibilities when you're feeling overwhelmed. 
          </p>
          
        </div>
      </div>`
          break;    

          // if the user didn't choose any answer it will render all cards
        default:card_container.innerHTML = `<div class="card" data-tilt>
        <div class="content">
          <img src="image/image9.png" alt="" />
          <h1>Your advice for social phobia</h1>
          <p>
            Seek Support from a trusted friend, family member, or
            or counselor who can provide support and understanding,
            Be kind to yourself and try to Practice relaxation
             techniques such as deep breathing, meditation. 
          </p>
          
        </div>
      </div>



      <div class="card" data-tilt>
        <div class="content">
          <img src="image/image5.png" alt="" />
          <h1>Your advice for anxiety</h1>
          <p>Challenge negative or irrational thoughts that contribute to your anxiety.
           and take a walk in the nature 
          </p>
          
        </div>
      </div>


      <div class="card" data-tilt>
        <div class="content">
          <img src="image/image10.png" alt="" />
          <h1>Your advice for Depression</h1>
          <p>
           Creat a morning pampering routine  that nurtures your body and mind.
           Pay attention to your physical health by eating a balanced diet,
           getting enough sleep, and be always grateful.
          </p>
          
        </div>
      </div>

      <div class="card" data-tilt>
        <div class="content">
          <img src="image/image6.png" alt="" />
          <h1>Your advice for stress</h1>
          <p>
            Regular physical activity is an excellent way to reduce stress
           and improve your mood,  Learn to say no to additional commitments 
           or responsibilities when you're feeling overwhelmed. 
          </p>
          
        </div>
      </div>`

        }

      }

      // we call renderEntry() 
      renderEntry()
  </script>

<style>  header {
  margin-top: 20px;
  background-color: #33333300;
  color: #fff;
  padding: 10px 0;
  background: lightgray;
}
  
  .containerr {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80%;
    margin: 0 auto;
  }
  
  .brand {
    font-weight: bold;
  }
  
  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  nav ul li {
    display: inline;
  }
  
  nav ul li a {
    color:  #1b5f40;
    text-decoration: none;
    padding: 10px 20px;
  }
  
  nav ul li a:hover {
   color: rgb(217, 255, 0);
  }
  







@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&family=Tilt+Neon&display=swap");

@property --gradient-angle {
  syntax: "<angle>";
  initial-value: 0deg;
  inherits: false;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Nunito", sans-serif;
}

html {
  scroll-behavior: smooth;
}

img {
  width: 100%;
  pointer-events: none;
  user-select: none;
}

/* SECTION - HOME */

.home {
  display: grid;
  grid-template-columns: 45% 50%;
  place-items: center;
  gap: 50px;
  background: rgb(11, 98, 68);
  background: radial-gradient(
    circle,
    rgb(11, 69, 56) 3%,
    rgb(20, 131, 88) 60%
  );
  overflow: hidden;
  padding: 130px 80px;
}

.description {
  color: #fff;
  padding: 0 50px;
}

.description > h1 {
  font-family: "Tilt Neon", sans-serif;
  font-size: clamp(2.3rem, 5vw, 4rem);
  line-height: 1.1;
  margin-bottom: 30px;
}

.gradient-text {
  font-family: "Tilt Neon", sans-serif;
  background-image: linear-gradient(
    90deg,
    rgb(118, 167, 63) 0%,
    rgb(51, 143, 118) 40%,
    rgb(55, 141, 167) 50%,
    rgb(117, 152, 242) 70%,
    rgb(144, 118, 236) 100%
  );
  color: transparent;
  background-size: contain;
  background-clip: text;
  -webkit-background-clip: text;
}

.description > p {
  font-family: "Nunito", sans-serif;
  font-size: 1.2rem;
  line-height: 1.5;
  margin-bottom: 30px;
}

#form {
  position: relative;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
}

input {
  padding-inline-end: 10px;
  padding-inline-start: 10px;
  background-color: transparent;
  outline: transparent;
  border: 0;
  border-bottom: 2px solid rgba(255, 255, 255, 0.3);
  margin-right: 10px;
  transition: all 0.3s ease-in;
  -webkit-transition: all 0.3s ease-in;
}

input::placeholder {
  color: rgb(10, 104, 57);
  opacity: 0.5;
  font-weight: 500;
}

input[type="email"] {
  color: rgba(255, 255, 255, 0.7);
  font-weight: 500;
  font-size: 1rem;
}

input[type="email"]:focus {
  border: transparent;
  outline: 2px dotted rgb(117, 152, 242);
  outline-offset: -3px;
}

.btn {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 3px;
  max-width: max-content;
  background: linear-gradient(
    90deg,
    rgb(118, 167, 63) 0%,
    rgb(51, 143, 118) 40%,
    rgb(55, 141, 167) 50%,
    rgb(117, 152, 242) 70%,
    rgb(144, 118, 236) 100%
  );
  background-size: 200%;
  background-position: left;
  color: #fff;
  font-size: 1.2rem;
  font-weight: 500;
  border: 0;
  padding: 12px 16px;
  border-radius: 5px;
  box-shadow: 0 6px 8px rgba(0, 0, 0, 0.5),
    inset 0px 2px 2px rgba(255, 255, 255, 0.2);
  cursor: pointer;
  transition: all 0.3s ease-in;
}

.btn:is(:hover, :focus-visible) {
  background-position: right;
}

.users-color-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(3, 1fr);
  gap: 20px;
}

.item {
  max-width: 200px;
  aspect-ratio: 1/1;
  box-shadow: 0 8px 8px rgba(0, 0, 0, 0.5),
    inset 0px 2px 2px rgba(255, 255, 255, 0.2);
  animation: fadeIn 0.5s linear 1 forwards;
  animation-delay: calc(0.2s * var(--i));
  opacity: 0;
}

.item:nth-child(1) {
  background-color: #67d7e1;
  border-radius: 50% 50% 0 50%;
}

.item:nth-child(2) {
  border-radius: 50% 50% 0 0;
}

.item:nth-child(3) {
  background-color: #6cc164;
  border-radius: 50%;
}

.item:nth-child(4) {
  border-radius: 0 0 0 50%;
}

.item:nth-child(5) {
  border-radius: 0 50% 50% 0;
}

.item:nth-child(6) {
  background-color: #8071a8;
  border-radius: 0 50% 50% 50%;
}

.item:nth-child(7) {
  border-radius: 50% 50% 0 50%;
}

.item:nth-child(8) {
  background-color: #fe7519;
  border-radius: 50% 0 0 50%;
}

.item:nth-child(9) {
  background-color: #f5bec3;
  border-radius: 0 50% 50% 0;
}

.item:nth-child(10) {
  border-radius: 50%;
}

.item:nth-child(11) {
  background-color: #fcd659;
  border-radius: 50% 0 50% 50%;
}

.item:nth-child(12) {
  border-radius: 50% 0 0 0;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: scale(0);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

/* SECTION - CARD CONTAINER */

.card-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 30px;
  width: 100%;
  min-height: 100vh;
  background: rgb(67, 112, 80);
  background: radial-gradient(
    circle,
    rgb(10, 104, 57) 3%,
    rgb(10, 104, 57) 60%
  );
  overflow: hidden;
  padding: 90px 50px;
}

.card {
  max-width: 300px;
  aspect-ratio: 3/5;
  border-radius: 15px;
  margin: 20px;
  overflow: hidden;
  border-top: 1px solid rgba(255, 255, 255, 0.7);
  border-left: 1px solid rgba(255, 255, 255, 0.7);
  box-shadow: 0 8px 10px rgba(0, 0, 0, 0.5),
    inset 0px 2px 2px rgba(255, 255, 255, 0.2);
  cursor: grab;
}

.content {
  position: relative;
  display: grid;
  place-items: center;
  grid-template-columns: 1fr;
  grid-template-rows: repeat(10, 1fr);
  padding: 20px;
  background: rgba(104, 104, 104, 0.5);
  user-select: none;
}

.content::before,
.content::after {
  content: "";
  position: absolute;
  inset: 0;
  z-index: -1;
  border-radius: inherit;
  background: conic-gradient(
    from var(--gradient-angle),
    rgb(109, 186, 22),
    rgb(30, 119, 95),
    rgb(55, 141, 167),
    rgb(59, 91, 174),
    rgb(236, 118, 118),
    rgb(59, 91, 174),
    rgb(55, 141, 167),
    rgb(30, 119, 95),
    rgb(109, 186, 22)
  );
  animation: rotation 8s linear infinite;
}

.content::after {
  filter: blur(30px);
}

@keyframes rotation {
  0% {
    --gradient-angle: 0deg;
  }
  100% {
    --gradient-angle: 360deg;
  }
}

.content img {
  aspect-ratio: 3/2;
  border-radius: 10px;
  grid-row: 1 / 5;
  margin-bottom: 20px;
  user-select: none;
  object-fit: cover;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.5);
}

.content h1 {
  font-size: 1.2rem;
  color: #fff;
  text-align: center;
  grid-row: 5 / 6;
}

.content p {
  font-size: 1rem;
  font-weight: 400;
  color: #fff;
  grid-row: 6 / 9;
}

.btn-grad {
  background-image: linear-gradient(
    to right,
    #ece9e6 0%,
    #ffffff 51%,
    #ece9e6 100%
  );
  padding: 10px 16px;
  color: #000;
  box-shadow: 0 0 5px #eee;
  outline: 0;
  font-size: 1rem;
  font-weight: 400;
  grid-row: 9 / 10;
  cursor: pointer;
  transition: all 0.5s ease-in;
}

.btn-grad:is(:hover, :focus-visible) {
  text-decoration: none;
}

.control {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  list-style: none;
  gap: 14px;
}

.control li {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(to bottom, #559b9a, #3b3d8a);
  box-shadow: 0 8px 20px rgba(149, 20, 20, 0.5),
    inset 0px 4px 4px rgba(36, 36, 36, 0.2);
  padding: 16px;
  border-radius: 50%;
  cursor: pointer;
  transform: scale(1);
}

.control li::before {
  position: absolute;
  content: "";
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: linear-gradient(to right, #559b9a, #126a22);
  border-radius: 50%;
  z-index: -1;
  transition: all 0.5s ease-in;
  opacity: 0;
}

.control li:hover::before {
  opacity: 1;
}

.arrow {
  font-size: 1.5rem;
  color: #fff;
}

@media (max-width: 1215px) {
  .description > p {
    font-size: 1rem;
  }

  .btn {
    font-size: 1rem;
  }
}

@media (max-width: 1015px) {
  .home {
    grid-template-columns: 45% 50%;
    gap: 50px;
    padding: 140px 50px;
  }
  
  .description > p {
    font-size: 1rem;
  }

  .btn {
    padding: 8px 12px;
  }

  .btn-grad {
    padding: 8px 12px;
  }
}

@media (max-width: 865px) {
  .home {
    grid-template-columns: 45% 50%;
    gap: 60px;
    padding: 130px 70px;
  }
}

@media (max-width: 815px) {
  .home {
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr;
    grid-template-areas:
      "userscolorcontainer"
      "description";
    gap: 30px;
    padding: 90px 80px 70px;
  }

  .users-color-container {
    grid-area: userscolorcontainer;
  }

  .description {
    grid-area: description;
    padding: 0;
    text-align: center;
  }

  .description > p {
    font-size: 1.1rem;
  }

  #form {
    justify-content: center;
  }
}

@media (max-width: 815px) {
  .description > p {
    font-size: 1rem;
  }
}

@media (max-width: 460px) {
   .home {
    gap: 0;
    padding: 30px 40px;
  }
  
  #form {
    flex-direction: column;
    align-items: center;
    gap: 30px;
    margin-top: 20px;
  }
  
  input[type="email"]:focus {
    outline-offset: 6px;
  }
  

}
</style>
</body>