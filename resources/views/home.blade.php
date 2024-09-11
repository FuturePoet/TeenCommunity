<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Teen Website</title>  
    <script src="https://cdn.tailwindcss.com"></script>  
    <style>  
    .navv:hover{
     color:orange;
    }
        .slider {  
            position: relative;  
            overflow: hidden;  
            width: 100%;  
            max-width: 600px; 
            margin: auto;   
        }  
        .slides {  
            display: flex;  
            transition: transform 0.5s ease;  
        }  
        .slide {  
            min-width: 100%;  
            box-sizing: border-box;  
        }  

 /* Light Mode Background */
body {
  background-color: #f7fafc; /* Tailwind gray-100 */
  color:blue;
}

/* Dark Mode Background */
.dark-mode {
  background-color: #1a202c; /* Tailwind gray-900 */
  color: #f7fafc; /* Tailwind gray-100 */
  background-image: linear-gradient(to bottom, #1a202c, #2b4360); /* Gradient for dark mode */
 
}

/* Light Mode Styles */
.bg-white {
  background-color: #ffffff; /* Light background for cards and sections */
  
}

.text-gray-800 {
  color: #2d3748; 
  
  
}

.text-gray-700 {
  color: #4a5568; /* Tailwind gray-700 for light mode text */
  h2,h3{
    color:white;
  }
}


.text-blue-600 {
  color: #2b6cb0; 
  h2,h3{
    color:white;
  }
}

/* Dark Mode Styles */
.dark-mode .bg-white {
  background-color: #2d3748; 
  h2,h3{
    color:white;
  }
}

.dark-mode .text-gray-800 {
  h2,h3{
    color:white;
  }
}

.dark-mode .text-gray-700 {
  color: #e2e8f0; 
  h2,h3{
    color:white;
  }
}

.dark-mode .text-blue-600 {
  color: #63b3ed; /* Lighter blue for dark mode */
  h2,h3{
    color:white;
  }
}
h3{
    font-size:45px;
}
.dark-mode input,
.dark-mode textarea {
  background-color: #4a5568; /* Darker background for input elements */
  color: #f7fafc; /* Lighter text for readability */
  border-color: #718096;
}
.dark-mode h2,h3,h6:hover{
    color:white;
    
}
    </style>  
</head>  
<body class="bg-gray-100 text-gray-800" id="body">  
    <nav class="bg-blue-600 text-white p-4">  
    <div class="flex justify-between items-center" style="font-size:35px;padding-right:20px;margin-right:20px">  
    <a href="{{ route('home') }}" class="hover:color:Blue"style="color :orange;font-size:45px;" >Profile</a></li> 

            <ul class="flex space-x-4" style="margin-right:100px;" id="nav">  
                <li ><a href="{{ route('home') }}" class="hover:underline"style="font-size:35px;padding-right:20px;margin-right:20px; " >Home</a></li>  
                <li><a href="#corses" class="hover:underline" style="font-size:35px;padding-right:20px;margin-right:20px;">Courses</a></li> 
                  <li><a href="#events" class="hover:underline "style="font-size:35px;padding-right:20px;margin-right:20px;">Events</a></li> 
                <li><a href="#books" class="hover:underline ">Books</a></li>  
                
            </ul>  

            <div class="relative ml-4">  
                <button class="flex items-center justify-between bg-blue-700 px-3 py-5 rounded focus:outline-none" id="userDropdown" onclick="toggleDropdown()" style="    border-radius: 50%;">  
                    {{ Auth::user()->name }} ({{ Auth::user()->role }})  
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>  
                </button>  
                <div id="dropdownMenu" class="hidden absolute right-0 w-48 bg-white text-gray-800 shadow-md mt-2 rounded">
                <a href="{{ route('users.showTeens') }}">Show my community</a>
                <a href="{{ route('profile.edit') }}">Edit Profile</a>
                <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-200">Logout</a>  
                   
                    <form action="{{ route('profile.destroy', Auth::user()->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Account</button>
</form>
                </div>  
            </div>  
        </div>  
    </nav>  
    
    <div class="container mx-auto p-6 flex flex-col items-center">  
        <!-- Image Slider -->  
        <div class="slider">  
            <div class="slides">  
                <div class="slide"><img src="https://th.bing.com/th/id/R.b69f75b2e521921bb8bc753b3d2c7d25?rik=14e5OSPsTHdf5Q&pid=ImgRaw&r=0" alt="Teens' community" class="w-full" /></div>  
                <div class="slide"><img src="https://www.digilearnings.com/wp-content/uploads/2022/03/What-are-Data-Science-1024x576.jpg" alt="Events and activity" class="w-full" /></div>  
                <div class="slide"><img src="https://d112y698adiu2z.cloudfront.net/photos/production/challenge_thumbnails/002/982/695/datas/medium_square.png" alt="About courses" class="w-full" /></div>  
                <div class="slide"><img src="https://th.bing.com/th/id/OIP.GpYgEwmkGh5wP9Ly9TrVuAHaHa?w=540&h=540&rs=1&pid=ImgDetMain" alt="Book about teens" class="w-full" /></div>  
                <div class="slide"><img src="https://th.bing.com/th/id/OIP.TmgQx9FtGpkUK6L4lwr0VgHaE6?rs=1&pid=ImgDetMain" alt="teens is the future" class="w-full" /></div>  
            </div>  
        </div>  
    </div>  
    <!-- Course Section -->
<section class="container mx-auto py-8" id="corses">
        <h2 class="text-3xl font-bold text-center mb-6">Courses</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Course 1 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://th.bing.com/th/id/OIP.Jg35DTU8xEFi-BbUaql9CQHaEI?rs=1&pid=ImgDetMain" alt="Course 1" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">Web Development</h3>
                <p class="text-gray-700">Learn the basics of web development.</p>
                <a href="https://www.w3schools.com/" class="text-blue-600 hover:underline">Submit</a>
            </div>
            <!-- Course 2 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://www.weetechsolution.com/wp-content/uploads/2023/05/Mobile-app-development-trends.jpg" alt="Course 2" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">App Development</h3>
                <p class="text-gray-700">Build your first mobile app.</p>
                <a href="https://www.codecademy.com/" class="text-blue-600 hover:underline">Submit</a>
            </div>
            <!-- Course 3 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://www.digilearnings.com/wp-content/uploads/2022/03/What-are-Data-Science-1024x576.jpg" alt="Course 3" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">Data Science</h3>
                <p class="text-gray-700">Master the world of data science.</p>
                <a href="https://www.coursera.org/" class="text-blue-600 hover:underline">Submit</a>
            </div>
        </div>
    </section>
    
    <!-- Events Section -->
    <section class="container mx-auto py-8">
        <h2 class="text-3xl font-bold text-center mb-6"id="events">Events & Activities</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Event 1 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://d112y698adiu2z.cloudfront.net/photos/production/challenge_thumbnails/002/982/695/datas/medium_square.png" alt="Event 1" class="w-full h-45 object-cover mb-4">
                <h3 class="text-xl font-semibold">Hackathon</h3>
                <p class="text-gray-700">Participate in a 48-hour coding challenge.</p>
                <a href="https://coding-cup.devpost.com/?ref_feature=challenge&ref_medium=discover" class="text-blue-600 hover:underline">Join Now</a>
            </div>
            <!-- Event 2 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://d112y698adiu2z.cloudfront.net/photos/production/challenge_thumbnails/002/998/207/datas/medium_square.jpg" alt="Event 2" class="w-full h-45 object-cover mb-4">
                <h3 class="text-xl font-semibold">AI Workshop</h3>
                <p class="text-gray-700">Learn the basics of AI and machine learning.</p>
                <a href="https://googlecloudjapanaihackathon.devpost.com/" class="text-blue-600 hover:underline">Join Now</a>
            </div>
            <!-- Event 3 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://d112y698adiu2z.cloudfront.net/photos/production/challenge_thumbnails/002/252/343/datas/medium_square.png" alt="Event 3" class="w-full h-45 object-cover mb-4">
                <h3 class="text-xl font-semibold">Entrepreneur Meetup</h3>
                <p class="text-gray-700">Connect with aspiring entrepreneurs.</p>
                <a href="https://blockhack-global-fe-2022.devpost.com/?ref_feature=challenge&ref_medium=discover" class="text-blue-600 hover:underline">Join Now</a>
            </div>
        </div>
    </section>
    
    <!-- Books Section -->
    <section class="container mx-auto py-8">
        <h2 class="text-3xl font-bold text-center mb-6" id="books">Books</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Book 1 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://th.bing.com/th/id/R.9f8987499806ada0a63af9d89edc312b?rik=%2bitn6uo2lP6aQg&pid=ImgRaw&r=0" alt="Book 1" class="w-full h-45 object-cover mb-4">
                <h3 class="text-xl font-semibold">The Perks of Being a Wallflower </h3>
                <p class="text-gray-700">Genre: Coming-of-age For fans of: Looking for Alaska by John Green</p>
                <a href="https://www.amazon.com/Perks-Being-Wallflower-Stephen-Chbosky/dp/1451696191/?tag=readerwp-20&asc_refurl=https://rd.com/list/best-books-for-teens&asc_source=https://www.bing.com/&asin=1451696191&revisionId=&format=4&depth=1" class="text-blue-600 hover:underline">Read</a>
            </div>
            <!-- Book 2 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://th.bing.com/th/id/OIP.GpYgEwmkGh5wP9Ly9TrVuAHaHa?w=540&h=540&rs=1&pid=ImgDetMain" alt="Book 2" class="w-full h-45 object-cover mb-4">
                <h3 class="text-xl font-semibold">The Hate U Give</h3>
                <p class="text-gray-700">Genre: Contemporary fiction For fans of: Dear Martin by Nic Stone</p>
                <a href="https://www.amazon.com/Hate-U-Give-Angie-Thomas/dp/0062498533/?tag=readerwp-20&asc_refurl=https://www.rd.com/list/best-books-for-teens/&asc_source=https://www.bing.com/&asin=0062498533&revisionId=&format=4&depth=1" class="text-blue-600 hover:underline">Read</a>
            </div>
            <!-- Book 3 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://th.bing.com/th/id/OIP.jiDdwx5xerMT--6_xV5mQwHaJP?rs=1&pid=ImgDetMain" alt="Book 3" class="w-full h-45 object-cover mb-4">
                <h3 class="text-xl font-semibold">Some Mistakes Were Made </h3>
                <p class="text-gray-700">Genre: Romance For fans of: The Beginning of Everything by Robyn Schneider</p>
                <a href="https://www.amazon.com/Some-Mistakes-Were-Kristin-Dwyer/dp/0063088533?tag=readerwp-20&asc_refurl=https://www.rd.com/list/best-books-for-teens/&asc_source=https://www.bing.com/&asin=0063088533&revisionId=&format=4&depth=1" class="text-blue-600 hover:underline">Read</a>
            </div>
        </div>
    </section>
     <section class="games">
        <div class="container">
        
                <iframe src="https://wormszone.io/" width="800" height="600" frameborder="0" style="margin-left:400px;"></iframe>
            </div>
        </div>
    </section>
    <!-- Dark Mode Toggle Button -->
    <div class="flex items-center justify-center mt-6">
        <button id="toggleDarkMode" class="bg-gray-800 text-white px-4 py-2 rounded">Toggle Dark Mode</button>  
    </div>
     
    <footer class="bg-gray-800 text-white p-4 mt-6">  
        <div class="flex justify-between">  
            <div>  
                <h4 class="font-bold">Follow Us</h4>  
                <ul class="flex space-x-4">  
                    <li><a href="#" class="hover:underline">WhatsApp</a></li>  
                    <li><a href="#" class="hover:underline">Facebook</a></li>  
                    <li><a href="#" class="hover:underline">Instagram</a></li>  
                    <li><a href="#" class="hover:underline">LinkedIn</a></li>  
                </ul>  
            </div>  
            
        </div>  
    </footer>  

    <script>  
        function toggleDropdown() {  
            const dropdown = document.getElementById('dropdownMenu');  
            dropdown.classList.toggle('hidden');  
        }  

        // Image slider functionality  
        let currentIndex = 0;  
        const slides = document.querySelector('.slides');  
        const totalSlides = document.querySelectorAll('.slide').length;  

        function showNextSlide() {  
            currentIndex = (currentIndex + 1) % totalSlides;  
            const offset = -currentIndex * 100; // Move to the next slide  
            slides.style.transform = `translateX(${offset}%)`;  
        }  

        setInterval(showNextSlide, 2000); // Change slide every 2 seconds 

        // Dark Mode Toggle  
        const toggleDarkModeBtn = document.getElementById('toggleDarkMode');  
        const body = document.getElementById('body');  

        toggleDarkModeBtn.addEventListener('click', function() {  
            body.classList.toggle('dark-mode');  
        });  
    </script>  
</body>  
</html>
