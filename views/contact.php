<?php
require_once __DIR__ . '/../bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Configure Tailwind for Inter font and custom colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-500': '#6366f1', // Indigo-500
                        'primary-600': '#4f46e5', // Indigo-600
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <!-- Lucide Icons (optional but nice for the header) -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-4 font-sans">
	<div class="w-full max-w-lg bg-white shadow-2xl rounded-xl p-6 sm:p-10 border border-gray-100 transform hover:shadow-primary-500/20 transition duration-300">
		<div class="mb-8 text-center">
			<div class="flex items-center justify-center text-primary-600 mb-2">
				<i class="fa-regular fa-envelope text-3xl mr-2"></i>
				<h1 class="text-3xl font-extrabold text-gray-900">Get In Touch</h1>
			</div>
			<p class="mt-2 text-gray-500">We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible.</p>
		</div>
		<!-- Form Start -->
		 <form action="" class="">
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-3">
				<div>
					<label for="" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
					<input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition duration-150 outline-none">
				</div>
				<!-- Email Address -->
				<div>
					<label for="" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
					<input type="text" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition duration-150 outline-none">
				</div>
			</div>
			<!-- Subject -->
			<div class="grid grid-cols-1 mb-3">
				<div>
					<label for="" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
					<input type="text" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition duration-150 outline-none">
				</div>
			</div>
			<!-- Message Box -->
			<div class="grid grid-cols-1 mb-3">
				<div>
                	<label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                	<textarea id="message" name="message" rows="4" required name="message"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition duration-150 outline-none resize-y"
                          placeholder="Your detailed message..."></textarea>
            	</div>
			</div>
			<!-- Submit Button -->
            <div>
                <button type="submit"
                        class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg shadow-md text-lg font-semibold text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out transform hover:scale-[1.01] active:scale-[0.99]">
                    Send Message
                </button>
            </div>
		 </form>
	</div>

</body>
</html>
