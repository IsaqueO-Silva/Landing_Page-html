<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale:1.0">
    <!--CSS-->
    <link rel="stylesheet" href="resources/css/style.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,600&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
        $name = $email = $subject = $comment = '';
        $nameError = $emailError = $subjectError = $commentError = '';
        //Name
        if(empty($_POST['name'])){
            $nameError = 'Name required!';
        }else if(!preg_match("/^[a-zA-z ]+$/", $_POST['name'])){
            $nameError = 'Only letters and whitespace allowed!';
        }else{
            $name = sanitize($_POST['name']);
        }
        //Email
        if(empty($_POST['email'])){
            $emailError = 'Email required!';
        }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $emailError = 'Invalid email format!';
        }else{
            $email = sanitize($_POST['email']);
        }
        //Subject
        if(empty($_POST['subject'])){
            $subjectError = 'Subject required!';
        }else if(!preg_match("/^[a-zA-z0-9 ]+$/", $_POST['subject'])){
            $subjectError = 'Only letters, whitespace and numbers allowed!';   
        }else{
            $subject = sanitize($_POST['subject']);
        }
        //Comment
        if(empty($_POST['comment'])){
            $commentError = 'Comment required!';
        }else{
            $comment = sanitize($_POST['comment']);
        }

        function sanitize($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div id="logo">
                        <h2>Logo here</h2>
                    </div>
                </div>
                <div class="col-7">
                    <div id="menu">
                        <ul>
                            <li>Portfolio</li>
                            <li>About</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Welcome!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>This site uses ...</p>
                </div>
            </div>
            <div clas="row">
                <div class="col-12">
                    <p>HTML - CSS - Bootstrap - PHP</p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="h1">PORTFOLIO</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="resources/img/project1.png" alt="project 1">
                            <p class="card-title">Project 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="resources/img/project2.png" alt="project 2">
                            <p class="card-title">Project 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="resources/img/project3.png" alt="project 3">
                            <p class="card-title">Project 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span class="h1">ABOUT</span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet odio eu dolor efficitur
                        ultricies. Sed auctor felis turpis, non sodales orci volutpat non. Vestibulum condimentum semper
                        dapibus.
                    </p>
                </div>
                <div class="col-6">
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet odio eu dolor efficitur
                        ultricies. Sed auctor felis turpis, non sodales orci volutpat non. Vestibulum condimentum semper
                        dapibus. 
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span class="h2">This site uses... </span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="link-1" href="https://www.php.net/"><img src="resources/img/php7-2.png" alt="php-7"></a>
                    <a class="link-1" href="https://getbootstrap.com/"><img src="resources/img/bootstrap-1.png" alt="bootstrap-5"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span class="h1">Contact Me</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <span class="error"><?php echo $nameError;?></span><br>
                                <input type="text" id="name" name="name" placeholder="Name">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="error"><?php echo $emailError;?></span><br>
                                <input type="email" id="email" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="error"><?php echo $subjectError;?></span><br>
                                <input type="text" id="subject" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="error"><?php echo $commentError;?></span><br>
                                <textarea placeholder="Comment" id="comment" name="comment"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" id="btnSubmit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Copyright &copy; Isaque Ordonhes Silva - 2020</p>
                </div>
            </div>
        </div>
    </footer>
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>