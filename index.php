<?php

$conn = mysqli_connect('localhost','root','','contact_form') or die('connection failed');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $stmt = $conn->prepare("INSERT INTO `contact_form` (name, email, number, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $number, $date);

    if($stmt->execute()){
        $message[] = 'Appointment made successfully!';
    } else {
        $message[] = 'Appointment failed';
    }
    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People's Life Care Hospital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>PLC</strong>Hospital </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="home" id="home">

    <div class="image">
        <img src="image/hero.jpg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>


<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>10+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>10000+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>30+</h3>
        <p>bed facility</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Welcome to People's Life Care Hospital, where compassionate care meets advanced medical expertise. Our dedicated team of doctors, nurses, and healthcare professionals is committed to providing exceptional care to every patient. </p>
            <p> With state-of-the-art facilities and a patient-centered approach, we aim to make healthcare accessible and comfortable for all. At People's Life Care Hospital, your health and well-being are our top priority.</p>
        </div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Health Camps</h3>
            <p>People's Life Care Hospital organizes health camps to provide free screenings, consultations, and health education to the community. Join us to access quality care and take steps towards better health..</p>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Our 24/7 ambulance service ensures that emergency care is always within reach. We are committed to providing rapid and reliable transportation, anytime you need it.

            </p>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>At People's Life Care Hospital, our team of expert doctors is dedicated to providing the highest standard of care. With specialized knowledge and years of experience, they are here to ensure the best possible outcomes for every patient.</p>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>We offer a comprehensive range of medications through our well-stocked pharmacy. We ensure the availability of quality medicines, prescribed by our experts, to support your recovery and well-being.</p>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>We provide comfortable and well-equipped bed facilities to ensure a restful and healing environment for our patients. With a range of options to meet different needs, we prioritize your comfort and care.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doctor1.jpg" alt="">
            <h3>Dr. Rajan Luitel</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="https://www.facebook.com/rajan.luitel.1" class="fab fa-facebook-f"></a>
                <a href="https://www.instagram.com/drrajanluitel/" class="fab fa-instagram"></a>
                <a href="tel:+9779851098946" class="fa fa-phone"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Doctor 2</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="https://www.facebook.com/rajan.luitel.1" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/drrajanluitel/" class="fab fa-instagram"></a>
            <a href="tel:+9779851098946" class="fa fa-phone"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Doctor3</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="https://www.facebook.com/rajan.luitel.1" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/drrajanluitel/" class="fab fa-instagram"></a>
            <a href="tel:+9779851098946" class="fa fa-phone"></a>
            </div>
        </div>

            </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <?php if(isset($message)) { foreach($message as $msg) { echo '<p class="message">'.$msg.'</p>'; }} ?>
    <h3>Make Appointment</h3>
    <input type="text" name="name" placeholder="Your Name" class="box" required>
    <input type="number" name="number" placeholder="Your Number" class="box" required>
    <input type="email" name="email" placeholder="Your Email" class="box" required>
    <input type="date" name="date" class="box" required>
    <input type="submit" name="submit" value="Appointment Now" class="btn">
</form>

    </div>

</section>

<!-- appointmenting section ends -->
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
        </div>
        <div class="box">
            <h3>appointment info</h3>
            <a > <i class="fas fa-phone"></i> 984-9210112 </a>
            <a> <i class="fas fa-envelope"></i> plchospital69@gmail.com</a>
            <a > <i class="fas fa-map-marker-alt"></i> Salambutar Jungle, Sankhu </a>
            <a href=https://www.facebook.com/peopleslifecare> <i class="fab fa-facebook-f"></i> facebook </a>
        </div>
</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="script.js"></script>

</body>
</html>
