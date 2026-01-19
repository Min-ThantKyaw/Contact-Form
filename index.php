<?php
session_start();
$status = '';
if(isset($_SESSION['message'])) {
    $status = $_SESSION['message'];
    unset($_SESSION['message']); // Clear message after displaying
}
?>
<!DOCTYPE html>>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-4xl w-full bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">
        
        <!-- Sidebar Info -->
        <div class="md:w-1/3 bg-indigo-600 p-8 text-white flex flex-col justify-between">
            <div>
                <h2 class="text-3xl font-bold mb-4">Get in touch</h2>
                <p class="text-indigo-100 mb-8 leading-relaxed">
                    Have a question or a project in mind? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-indigo-500/30 p-2 rounded-lg">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-wider opacity-70">Email</p>
                            <p class="text-lg">hello@example.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-indigo-500/30 p-2 rounded-lg">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-wider opacity-70">Phone</p>
                            <p class="text-lg">+1 (555) 000-0000</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-indigo-500/30 p-2 rounded-lg">
                            <i class="fas fa-location-dot text-white"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-wider opacity-70">Office</p>
                            <p class="text-lg">123 Design St, New York, NY</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex space-x-4 mt-12">
                <a href="#" class="hover:text-indigo-200 transition-colors"><i class="fab fa-twitter text-xl"></i></a>
                <a href="#" class="hover:text-indigo-200 transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                <a href="#" class="hover:text-indigo-200 transition-colors"><i class="fab fa-github text-xl"></i></a>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="md:w-2/3 p-8 md:p-12">
            <!-- Messages -->
            <?php if($status == 'success'): ?>
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-center space-x-3">
                <i class="fas fa-check-circle text-xl"></i>
                <p>Thank you! Your message has been sent successfully.</p>
            </div>
            <?php elseif($status == 'error'): ?>
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-center space-x-3">
                <i class="fas fa-exclamation-circle text-xl"></i>
                <p>Error! Failed to send email. Please try again later.</p>
            </div>
            <?php endif; ?>
            
            <form id="contactForm" method="POST" action="contact.php"  class="space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- First Name -->
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input type="text" id="firstName" name="first_name" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                            placeholder="John">
                    </div>
                    <!-- Last Name -->
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input type="text" id="lastName" name="last_name" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                            placeholder="Doe">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="john@example.com">
                </div>

                <!-- Subject -->
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                    <select id="subject" name="subject"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all bg-white">
                        <option value="general">General Inquiry</option>
                        <option value="support">Technical Support</option>
                        <option value="billing">Billing Questions</option>
                        <option value="partnership">Partnership</option>
                    </select>
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all resize-none"
                        placeholder="How can we help you?"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-lg shadow-lg hover:shadow-indigo-500/30 transition-all duration-300 flex items-center justify-center space-x-2 group">
                    <span>Send Message</span>
                    <i class="fas fa-paper-plane text-sm group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- <script src="app.js"></script> -->
</body>
</html>