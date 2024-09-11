<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Admin</title>  
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
            <a href="{{ route('users.showAdmins') }}" class="hover:text-orange-300" style="font-size:45px;">Admins</a> 

            <ul class="flex space-x-4" style="margin-right:100px;">  
                <li><a href="{{ route('users.showTeens') }}" class="hover:underline"style="font-size:25px;" style="font-size:25px;">Manage Teens</a></li> 
                <li><a href="{{ route('users.showParents') }}" style="font-size:25px;">Parents Mangements</li> 
                <li><a href="{{ route('admin.reports') }}" class="hover:underline" style="font-size:25px;">Reports</a></li>  
                <li><a href="{{ route('admin.settings') }}" class="hover:underline" style="font-size:25px;">Settings</a></li>  
                <li><a href="{{ route('admin.help') }}" class="hover:underline" style="font-size:25px;">Help</a></li>  
            </ul>  

            <div class="relative ml-4">  
                <button class="flex items-center justify-between bg-blue-700 px-3 py-5 rounded focus:outline-none" id="userDropdown" onclick="toggleDropdown()" style="border-radius: 50%;">  
                    {{ Auth::user()->name }} ({{ Auth::user()->role }})  
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>  
                </button>  
                <div id="dropdownMenu" class="hidden absolute right-0 w-48 bg-white text-gray-800 shadow-md mt-2 rounded">
                <a href="{{ route('users.showAdmins') }}">Show my community</a>
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

    <div class="container mx-auto p-6 flex flex-col items-center">  
        <!-- Admin Dashboard Overview -->  
        <a href="{{ route('users.showAdmins') }}" class="text-blue-600 hover:underline"><h1 class="text-4xl font-bold mb-8">Admin Dashboard</h1></a>
        <a href="{{ route('users.showTeens') }}" class="text-blue-600 hover:underline">Manage Users</a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- User Management -->
            <div class="bg-white p-4 shadow-md">
                <h2 class="text-xl font-semibold mb-4">Teens Management</h2>
                <p class="text-gray-700 mb-4">Manage users, view their details, and control user roles.</p>
                <a href="{{ route('users.showTeens') }}" class="text-blue-600 hover:underline">Teens Users</a>
            </div>
             <!-- User Management -->
             <div class="bg-white p-4 shadow-md">
                <h2 class="text-xl font-semibold mb-4">Parents Management</h2>
                <p class="text-gray-700 mb-4">Manage parents, view their details, and control parent roles.</p>
                <a href="{{ route('users.showParents') }}">Parents Mangements</a>
                </div>

            <!-- Reports -->
            <div class="bg-white p-4 shadow-md">
                <h2 class="text-xl font-semibold mb-4">Reports</h2>
                <p class="text-gray-700 mb-4">View and generate reports on website activities and user interactions.</p>
                <a href="C:\xampp\htdocs\final_project\resources\views\reports.blade.php" class="text-blue-600 hover:underline">View Reports</a>
            </div>
            <!-- Settings -->
            <div class="bg-white p-4 shadow-md">
                <h2 class="text-xl font-semibold mb-4">Settings</h2>
                <p class="text-gray-700 mb-4">Update website settings and manage configurations.</p>
                <a href="C:\xampp\htdocs\final_project\resources\views\settings.blade.php" class="text-blue-600 hover:underline">Update Settings</a>
            </div>
        </div>
    </div>  

   
    <body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-6 flex flex-col items-center">
    <!-- Courses Table -->
    <div id="courses-container" class="w-full">
        <h2 class="text-2xl font-semibold mb-6 text-blue-600">Courses</h2>

        <!-- Add Course Button -->
        <div class="flex justify-end mb-4">
            <button id="add-course" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 shadow-lg transition ease-in-out duration-300">
                Add Course
            </button>
        </div>

        <!-- Responsive Table -->
        <div class="overflow-x-auto shadow-lg rounded-lg border border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light" id="courses-tbody">
                    <!-- Data will be injected here -->
                </tbody>
            </table>
        </div>

    <div class="mt-4">
        <button id="prev-courses" class="bg-gray-500 text-white px-4 py-1 rounded">Prev</button>
        <button id="next-courses" class="bg-gray-500 text-white px-4 py-1 rounded">Next</button>
    </div>
</div>
<div class="container mx-auto p-6 flex flex-col items-center">
    <!-- Courses Table -->
    <div id="courses-container" class="w-full">
        <h2 class="text-2xl font-semibold mb-6 text-blue-600">Events</h2>

        <!-- Add Course Button -->
        <div class="flex justify-end mb-4">
            <button id="add-course" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 shadow-lg transition ease-in-out duration-300">
               <h1> Add Events</h1>
            </button>
        </div>

        <!-- Responsive Table -->
        <div class="overflow-x-auto shadow-lg rounded-lg border border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light" id="courses-tbody">
                <tr>
                    <td class="py-2 px-4 border-b">1</td>
                    <td class="py-2 px-4 border-b">Participate in a 48-hour coding challenge</td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">2</td>
                    <td class="py-2 px-4 border-b">AI Workshop</td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">3</td>
                    <td class="py-2 px-4 border-b">Entrepreneur Meetup</td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr></tbody>
            </table>
        </div>
        <div class="mt-4">
        <button id="prev-courses" class="bg-gray-500 text-white px-4 py-1 rounded">Prev</button>
        <button id="next-courses" class="bg-gray-500 text-white px-4 py-1 rounded">Next</button>
    </div>
</div>
<div class="container mx-auto p-6 flex flex-col items-center">
    <!-- Courses Table -->
    <div id="courses-container" class="w-full">
        <h2 class="text-2xl font-semibold mb-6 text-blue-600">Books</h2>

        <!-- Add Course Button -->
        <div class="flex justify-end mb-4">
            <button id="add-course" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 shadow-lg transition ease-in-out duration-300">
               <h1> Add Books</h1>
            </button>
        </div>

        <!-- Responsive Table -->
        <div class="overflow-x-auto shadow-lg rounded-lg border border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light" id="courses-tbody">
                <tr>
                    <td class="py-2 px-4 border-b">1</td>
                    <td class="py-2 px-4 border-b">The Perks of Being a Wallflower </td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">2</td>
                    <td class="py-2 px-4 border-b">The Hate U Give</td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">3</td>
                    <td class="py-2 px-4 border-b">Some Mistakes Were Made</td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr></tbody>
            </table>
        </div>
        <div class="mt-4">
        <button id="prev-courses" class="bg-gray-500 text-white px-4 py-1 rounded">Prev</button>
        <button id="next-courses" class="bg-gray-500 text-white px-4 py-1 rounded">Next</button>
    </div>
</div>
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
    <div class="mt-6">
            <nav class="flex justify-center">
                <ul class="flex space-x-2">
                    <li>
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded">Previous</a>
                    </li>
                    <li>
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded">1</a>
                    </li>
                    <li>
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded">2</a>
                    </li>
                    <li>
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded">3</a>
                    </li>
                    <li>
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
    <script>  
        function toggleDropdown() {  
            const dropdown = document.getElementById('dropdownMenu');  
            dropdown.classList.toggle('hidden');  
        }  

        // Dark Mode Toggle  
        const toggleDarkModeBtn = document.getElementById('toggleDarkMode');  
        const body = document.getElementById('body');  

        toggleDarkModeBtn.addEventListener('click', function() {  
            body.classList.toggle('dark-mode');  
        });  
         // Sample data
    const courses = [
        {id: 1, name: 'Web Development'}, {id: 2, name: 'App Development'}, {id: 3, name: 'Data Science'}, 
       
    ];

    const itemsPerPage = 5;
    let currentPage = 1;

    function paginateData(data, page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = page * itemsPerPage;
        return data.slice(startIndex, endIndex);
    }

    function renderTable(data, tbodyId) {
        const tbody = document.getElementById(tbodyId);
        tbody.innerHTML = ''; // Clear previous content
        data.forEach(item => {
            const row = `
                <tr>
                    <td class="py-2 px-4 border-b">${item.id}</td>
                    <td class="py-2 px-4 border-b">${item.name}</td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <button class="bg-red-500 text-white px-4 py-1 rounded">Delete</button>
                    </td>
                </tr>`;
            tbody.innerHTML += row;
        });
    }

    function updatePaginationButtons(data, page, prevBtnId, nextBtnId) {
        const prevBtn = document.getElementById(prevBtnId);
        const nextBtn = document.getElementById(nextBtnId);

        prevBtn.disabled = page === 1;
        nextBtn.disabled = page * itemsPerPage >= data.length;
    }

    function setupPagination(data, tbodyId, prevBtnId, nextBtnId) {
        function loadPage(page) {
            const paginatedData = paginateData(data, page);
            renderTable(paginatedData, tbodyId);
            updatePaginationButtons(data, page, prevBtnId, nextBtnId);
        }

        loadPage(currentPage);

        document.getElementById(prevBtnId).addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                loadPage(currentPage);
            }
        });

        document.getElementById(nextBtnId).addEventListener('click', () => {
            if (currentPage * itemsPerPage < data.length) {
                currentPage++;
                loadPage(currentPage);
            }
        });
    }

    // Initialize pagination for the courses table
    setupPagination(courses, 'courses-tbody', 'prev-courses', 'next-courses');

    // You can repeat the same process for Events, Books, and Reviews
    </script>  
</body>  
</html>
