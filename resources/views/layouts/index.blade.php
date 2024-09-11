<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teen Community</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color:rgb(238, 238, 238);
        }

        .container {
            width: 85%;
            margin: auto;
        }

        /* Header Styles */
        header {
            background-color: #333;
            padding: 20px 0;
        }

        header .logo h1 {
            color: #fff;
            text-align: center;
            font-size: 35px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        .nav-links li {
            margin: 0 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 15px;
            transition: color 0.3s;
            font-size:25px;

        }

        .nav-links a:hover {
            color: #f39c12;
            font-size:larger;
        }

        /* Hero Section */
        .hero {
            position: relative;
            background-image: url('https://th.bing.com/th/id/OIP.shbAszDZb4xud64azQE9EwHaDt?w=1024&h=512&rs=1&pid=ImgDetMain');
            background-repeat: no-repeat;
            background-size: cover;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            z-index: 2;
        }

        .hero-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-content p {
            margin: 20px ;
            font-size: 1.2rem;
        }

        .hero-content .btn {
            background-color: #f39c12;
            padding: 10px 20px;
            color: #fff;
            border: none;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .hero-content .btn:hover {
            background-color: #d35400;
        }

        /* Section Styles */
        section {
            padding: 60px 0;
            background-color: #fff;
            max-width: 75%;
            margin: 40px auto;
        }

        .about,
        .public-info {
            background-color: #e3f2fd;
        }

        .video {
            background-color: rgb(36, 36, 36);
        }

        /* Flexbox for inline content */
        .about-content,
        .public-info-content {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            align-items: left;
        }

        .about-content img,
        .public-info-content img {
            max-width: 35%;
            border-radius: 50%;
        }
    
        .about-content p,
        .public-info-content p {
            font-size: 30px;
            line-height: 1.9;
            max-width: 100%;
        }

        /* Video Section Styles */
        .video-container {
            display: flex;
            justify-content: center;
        }

        iframe {
            max-width: 100%;
            border: none;
        }

        /* About Section */
        .about {
            background-color: #e3f2fd;
            padding: 60px 0;
            padding-left:10px;

        }

        .about-content {
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;


        }

        .about-content img {
            max-width: 40%;
            border-radius: 10px;
            flex-shrink: 0;
            display: inline;
            margin-left:20px;


        }

        .about-content div {
            max-width: 40%;
            display: inline;
            margin-right:10px;


        }

        /* Public Info Section */
        .public-info {
            background-color: orang;
        }

        .public-info-content {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
            padding: 0 20px;
        }

        .public-info-content img {
            max-width: 40%;
            border-radius: 10px;
        }

        .public-info-content p {
            font-size: 1.2rem;
            line-height: 1.6;
            max-width: 60%;
        }

        /* Data Overview Section */
        .data-overview {
            background-color: #f1f8e9;
            padding: 60px 0;
        }

        .data-overview-content {
            display: flex;
            flex-direction: row;
            gap: 40px;
            text-align: center;
            flex-wrap: wrap;
        }

        .data-item {
            display: flex;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
            text-align: center;

        }

        .data-item img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        .data-item div {
            max-width: 100%;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer .social-icons {
            margin-top: 15px;
        }

        footer .social-icons a {
            margin: 0 10px;
            display: inline-block;
        }

        footer .social-icons img {
            width: 30px;
        }

        /* Button Styles */
        .btn {
            background-color: #f39c12;
            padding: 10px 20px;
            color: #fff;
            border: none;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #d35400;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <h1 style="fonr-size:45;"><span style="color:red;">Teen </span><span style="color:orange;">Comm</span>un<span style="color:green;">ity </span></h1><BR><BR>
                </div>
                <ul class="nav-links">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#public-info">Public Info</a></li>
                    <li><a href="#data-overview">Data Overview</a></li>
                    <li><a href="#video">About Teens</a></li>

                    <li><a href="{{ route('register')}}" class="block px-4 py-2 hover:bg-gray-200">Join Us</a></li>
                </ul>
                <div class="toggle-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
<br><br><br>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay">
            <div class="hero-content container" ><br><br><br>
            <div style="text-align:left;margin-bottom:50px;color:orange;text-decoration:bold;display:inline;font-size:65px;"><br>
                <h2 >Empowering Teens <br>to Build <br>a Brighter Future</h2> </div><br><br>
                <b>
                 <div style="text-align:left;margin-bottom:50px;color:white;text-decoration:bold;display:inline;font-size:35px;"> <p >Discover the importance of a supportive teen <br><br>community to help shape the future.<br> <br>Together, we learn, grow, and inspire.</p> </div><br></b>
                <div style="text-align:left;margin-bottom:50px;color:blue;text-decoration:bold;display:inline;">  <a href="#about" class="btn" >Learn More</a> </div>
            </div>
        </div>
    </section>
 <!-- About Section -->
 <section id="about" class="about">
        <div class="container">
            
            <div class="about-content">
            <h1 style="text-align:center;font-size:50px;color:orange;"> <b>Welcome to [Teens' Community]!</b></h1> <br>

                <img src="https://s3.amazonaws.com/creativity-post/uploads/_articleBody/iStock-944923432.jpg" alt="Teens Community" style="margin-right:70px;">
                <div>
                <div style="margin-right:20px; ">
           <br>    <b> <p style="color:green;">We are online community for teens, parents, and educators....offers: </b></p><br><br>
    <ul>
        <li><b>Educational Resources:</b> Courses, events, and books for teenage growth.</li>
        <li><b>Community Engagement:</b> A space for teens to connect and participate in events.</li>
        <li><b>Parental Involvement:</b> Tools for parents to support their child's development.</li>
        <li><b>Administrative Tools:</b> Features for effective platform management.</li>
    </ul>
                </div>
            </div>
    </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            
            <div class="about-content">
                <img src="https://th.bing.com/th/id/OIP.TmgQx9FtGpkUK6L4lwr0VgHaE6?rs=1&pid=ImgDetMain" alt="Teens Community" style="margin-right:70px;">
                <div>
                <h1 style="text-align:center;font-size:50px;color:orange;">Why Teens Are Key to the Future?</h1> <br><br>
                <p >Teens have the potential to bring about change and innovation. Our platform is designed to empower teens through education, creativity, and community engagement. Learn more about how teens can influence the future through their unique perspectives and energy.</p>
            </div>
    </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video">
        <div class="container">
            <div class="video-container" id="video">
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/z_1Zv_ECy0g" title="Skills Every Child Will Need to Succeed in 21st century | Dr. Laura A. Jana | TEDxChandigarh" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Public Information About Teens Section -->
    <section id="public-info" class="public-info">
        <div class="container">
            <h1 style="text-align:center;font-size:45px;color:blue;">What exactly do teens need?</h1><br><br>
            <div class="public-info-content">
                <p style="font-size:35px;">Understanding teens' needs, interests, and challenges is crucial for supporting their development. Explore resources and insights into what shapes the lives of young people today.</p>
            </div>
        </div>
    </section>
<!-- Data Overview Section -->
<section id="data-overview" class="data-overview">
        <div class="container">
        <h1 style="text-align:center;font-size:55px;color:red;">What we are offer for you:</h1><br><br>
            <div class="data-overview-content">
            <div class="data-item">
                <img src="https://www.weetechsolution.com/wp-content/uploads/2023/05/Mobile-app-development-trends.jpg" alt="Teens courses" style="margin-right:70px;">
 
                <div>
                    <h1 style="font-size:45px;">Courses</h1>
                    <p style="font-size:25px;color:Green;">A variety of educational courses designed to enhance skills and knowledge.</p>
                </div>
            </div>
            <div class="data-item">
                <img src="https://th.bing.com/th/id/OIP.jiDdwx5xerMT--6_xV5mQwHaJP?rs=1&pid=ImgDetMain" alt="Teens books" style="margin-right:70px;">
                <div>
                    <h1 style="font-size:45px;">Books</h1>
                    <p style="font-size:25px;color:black;">A curated selection of books for personal growth and learning.</p>
                </div>
            </div>
            <div class="data-item">
                <img src="https://d112y698adiu2z.cloudfront.net/photos/production/challenge_thumbnails/002/982/695/datas/medium_square.png" alt="Teens events" style="margin-right:70px;">
                <div>
                    <h1 style="font-size:45px;">Events</h1>
                    <p style="font-size:25px;color:blue;">Engaging events to connect with like-minded individuals.</p>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>
 

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Teen Community. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="images/facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="images/twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="images/instagram-icon.png" alt="Instagram"></a>
        </div>
    </footer>
</body>
</html>
