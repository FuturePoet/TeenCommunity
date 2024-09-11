<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Parent Dashboard</title>  
    <script src="https://cdn.tailwindcss.com"></script>
    <style>  
        .navv:hover {
            color: orange;
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
            color: blue;
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
        }

        .text-blue-600 {
            color: #2b6cb0; 
        }

        /* Dark Mode Styles */
        .dark-mode .bg-white {
            background-color: #2d3748; 
        }

        .dark-mode .text-gray-800 {
            color: #e2e8f0; /* Lighter gray for dark mode */
        }

        .dark-mode .text-gray-700 {
            color: #e2e8f0; 
        }

        .dark-mode .text-blue-600 {
            color: #63b3ed; /* Lighter blue for dark mode */
        }

        h3 {
            font-size: 45px;
        }

        .dark-mode input,
        .dark-mode textarea {
            background-color: #4a5568; /* Darker background for input elements */
            color: #f7fafc; /* Lighter text for readability */
            border-color: #718096;
        }

        .dark-mode h2, .dark-mode h3, .dark-mode h6:hover {
            color: white;
        }
        .dark-mode h2,h3,li,ul,a,h6:hover{
            color:white;
        }
    </style>  
</head>  
<body class="bg-gray-100 text-gray-800" id="body">  
    <nav class="bg-blue-600 text-white p-4">  
        <div class="flex justify-between items-center" style="font-size:35px;padding-right:20px;margin-right:20px">  
            <a href="{{ route('users.showParents') }}" class="hover:text-orange-300" style="font-size:45px;">Parent Dashboard</a> 

            <ul class="flex space-x-4" style="margin-right:100px;">  
                <li> <a href="{{ route('users.showParents') }}" class="hover:underline" style="font-size:35px;color:orange;">Dashboard</a></li>      
                <li><a href="#body" class="hover:underline" style="font-size:35px;padding-right:20px;margin-right:20px;">Home</a></li>  
                <li><a href="#courses" class="hover:underline" style="font-size:35px;padding-right:20px;margin-right:20px;">Courses</a></li> 
                <li><a href="#events" class="hover:underline" style="font-size:35px;padding-right:20px;margin-right:20px;">Events</a></li> 
                <li><a href="#books" class="hover:underline" style="font-size:35px;padding-right:20px;margin-right:20px;">Books</a></li>             
            </ul>  

            <div class="relative ml-4">  
                <button class="flex items-center justify-between bg-blue-700 px-3 py-5 rounded focus:outline-none" id="userDropdown" onclick="toggleDropdown()" style="border-radius: 50%;">  
                    {{ Auth::user()->name }} ({{ Auth::user()->role }})  
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>  
                </button>  
                <div id="dropdownMenu" class="hidden absolute right-0 w-48 bg-white text-gray-800 shadow-md mt-2 rounded">
                    <a href="{{ route('users.showParents') }}">My Community</a>
                    <a href="{{ route('profile.edit') }}">Edit Profile</a>                 
                    <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
                    <form action="{{ route('profile.destroy', Auth::user()->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="block px-4 py-2 hover:bg-gray-200">Delete Account</button>
                    </form>
                </div>  
            </div>  
        </div>  
    </nav>    

    <!-- Welcome Section -->
    <section class="container mx-auto py-8">
        <h1 class="text-4xl font-bold text-center mb-6">Welcome to the Parent Dashboard</h1>
        <div class="flex justify-center space-x-6">
            <a href="#courses" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Explore Courses</a>
            <a href="#events" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Upcoming Events</a>
            <a href="#books" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Recommended Books</a>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="container mx-auto py-8" id="courses">
        <h2 class="text-3xl font-bold text-center mb-6">Courses for Parents</h2>
        <p class="text-center text-gray-700 mb-8">Enhance your parenting skills and gain valuable insights into teenage development with our curated courses.</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Course 1 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://th.bing.com/th/id/R.256e52f0b52fac51b60e85742ddbe4a6?rik=p5EayJxDi6nyWA&pid=ImgRaw&r=0" alt="Course 1" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">Understanding Teen Behavior</h3>
                <p class="text-gray-700">Learn effective strategies to understand and manage teenage behavior.</p>
                <a href="https://www.udemy.com/course/instructions-to-applied-behavioral-analysis-aba/?utm_source=bing&utm_medium=udemyads&utm_campaign=BG-Search_DSA_GammaCatchall_NonP_la.EN_cc.ROW-English&campaigntype=Search&portfolio=Bing&language=EN&product=Course&test=&audience=DSA&topic=&priority=Gamma&utm_content=deal4584&utm_term=_._ag_1321615365041640_._ad__._kw_udemy_._de_c_._dm__._pl__._ti_dat-2334400625391429%3Aloc-187_._li_154522_._pd__._&matchtype=b&msclkid=83c820e3c00015682f9d46024a331df0" class="text-blue-600 hover:underline">Enroll Now</a>
            </div>
            <!-- Course 2 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://www.easyuni.com/media/uploads/2023/08/10/welcome-backstudents-1.webp" alt="Course 2" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">Supporting Academic Success</h3>
                <p class="text-gray-700">Discover techniques to help your teen excel academically.</p>
                <a href="https://www.coursera.org/specializations/microsoft-365-fundamentals?utm_medium=sem&utm_source=bg&utm_campaign=b2c_emea_microsoft-365-fundamentals_microsoft_ftcof_specializations_arte_aug_24_dr_geo-multi-set3_sem_rsa_bing_lg-all&campaignid=662900162&adgroupid=1257842628775390&device=c&keyword=course%20excel&matchtype=p&network=o&devicemodel=&adposition=&creativeid=&hide_mobile_promo&msclkid=47db12a7aeaf1a99fb79744624d5e50a&utm_term=course%20excel&utm_content=Generic%20KWs" class="text-blue-600 hover:underline">Enroll Now</a>
            </div>
            <!-- Course 3 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://th.bing.com/th/id/OIP.0J43YsX0eCwewm4OuYzlxgHaFj?rs=1&pid=ImgDetMain" alt="Course 3" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">Effective Communication with Teens</h3>
                <p class="text-gray-700">Learn how to build strong communication channels with your teen.</p>
                <a href="https://www.udemy.com/course/mastering-effective-communication/?utm_source=bing&utm_medium=udemyads&utm_campaign=BG-Search_DSA_Beta_Prof_la.EN_cc.ROW-English&campaigntype=Search&portfolio=Bing&language=EN&product=Course&test=&audience=DSA&topic=&priority=Beta&utm_content=deal4584&utm_term=_._ag_1323814388459850_._ad__._kw_Business+en_._de_c_._dm__._pl__._ti_dat-2334538064298664%3Aloc-187_._li_154522_._pd__._&matchtype=b&msclkid=55ca244fee2f1c85e3b542ae64866ff7&couponCode=2021PM25" class="text-blue-600 hover:underline">Enroll Now</a>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="container mx-auto py-8" id="events">
        <h2 class="text-3xl font-bold text-center mb-6">Upcoming Events</h2>
        <p class="text-center text-gray-700 mb-8">Join our events to connect with other parents, learn from experts, and participate in activities that support your teen’s development.</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Event 1 -->
            <div class="bg-white p-4 shadow-md">
            <img src="https://th.bing.com/th/id/R.5d1e2e18b1b516d022076c602142aef4?rik=M9sFccugjlVagg&pid=ImgRaw&r=0" alt="Event 2" class="w-full h-50 object-cover mb-4">

                <h3 class="text-xl font-semibold">Parenting Workshop</h3>
                <p class="text-gray-700">A workshop focusing on effective parenting strategies for teenagers.</p>
                <a href="https://www.eventbrite.com/" class="text-blue-600 hover:underline">Register Now</a>
            </div>
            <!-- Event 2 -->
            <div class="bg-white p-4 shadow-md">
                <h3 class="text-xl font-semibold">Teen Career Day</h3>
                <img src="https://th.bing.com/th/id/OIP.q3q0cuiJ_A7X5UVUtNE0PAHaEA?w=333&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Event 1" class="w-full h-50 object-cover mb-4">

                <p class="text-gray-700">An event designed to help teens explore potential career paths.</p>
                <a href="https://www.meetup.com/" class="text-blue-600 hover:underline">Register Now</a>
            </div>
            <!-- Event 3 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://th.bing.com/th/id/R.24f886d20e4ccc92e69e6df2b6a88a0a?rik=UcvObLsX9mkoyg&pid=ImgRaw&r=0" alt="Event 3" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">Mental Health Seminar</h3>
                <p class="text-gray-700">A seminar focusing on mental health issues affecting teenagers and how parents can help.</p>
                <a href="https://www.eventbrite.com/" class="text-blue-600 hover:underline">Register Now</a>
            </div>
        </div>
    </section>

    <!-- Books Section -->
    <section class="container mx-auto py-8" id="books">
        <h2 class="text-3xl font-bold text-center mb-6">Recommended Books</h2>
        <p class="text-center text-gray-700 mb-8">Discover books that can help you understand and support your teen’s development.</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Book 1 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://th.bing.com/th/id/OIP.oXzJ4sG7OESxF7DcHG7edgAAAA?rs=1&pid=ImgDetMain" alt="Book 1" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">The Art of Parenting Teenagers</h3>
                <p class="text-gray-700">A Complete Guide to Parenting Teens with Love and Logic</p>
                <a href="https://goodreads.com/book/show/26033347-the-art-of-parenting-teenagers" class="text-blue-600 hover:underline">Buy Now</a>
            </div>
            <!-- Book 2 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1388202256i/223798.jpg" alt="Book 2" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">Parenting Teens with Love and Logic</h3>
                <p class="text-gray-700">A book offering practical advice for parents on raising teenagers with love and logic.</p>
                <a href="https://www.goodreads.com/book/show/223798.Parenting_Teens_With_Love_And_Logic?from_search=true&from_srp=true&qid=s0E7e4ri7A&rank=1" class="text-blue-600 hover:underline">Buy Now</a>
            </div>
            <!-- Book 3 -->
            <div class="bg-white p-4 shadow-md">
                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1356176923i/16210004.jpg" alt="Book 3" class="w-full h-50 object-cover mb-4">
                <h3 class="text-xl font-semibold">Slow Parenting Teens</h3>
                <p class="text-gray-700">Insight into the adolescent brain and how parents can best support their teen’s mental and emotional growth.</p>
                <a href="https://www.goodreads.com/book/show/16210004-slow-parenting-teens" class="text-blue-600 hover:underline">Buy Now</a>
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
            document.getElementById('dropdownMenu').classList.toggle('hidden');
        }

        function toggleDarkMode() {
            const body = document.getElementById('body');
            body.classList.toggle('dark-mode');
        }
        
        // Dark Mode Toggle  
        const toggleDarkModeBtn = document.getElementById('toggleDarkMode');  
        const body = document.getElementById('body');  

        toggleDarkModeBtn.addEventListener('click', function() {  
            body.classList.toggle('dark-mode');  
        });  
    </script>  
</body>  
</html>
