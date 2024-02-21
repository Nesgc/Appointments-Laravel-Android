<x-app-layout>
    <div class="px-6 pt-16 flex justify-end"><a href="{{ url('specialties/create') }}" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Add new</a>


    </div>


    <!-- component -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind Contact Form</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #1a202c;
                color: #e2e8f0;
            }

            .form-container {
                animation: fadeIn 0.5s ease forwards;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>

    <body>
        <div class="max-w-md mx-auto p-8 bg-gray-800 rounded-md shadow-md form-container">
            <h2 class="text-2xl font-semibold text-white mb-6">Say Something!</h2>
            <form action="https://fabform.io/f/insert-form-id" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="john@example.com" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-300 text-sm font-bold mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="How can we help you?" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white"></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    Send Message
                </button>
                <p class="mt-5 text-gray-300">If you are not a fan of forms you can email us instead <a
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                        href="https://veilmail.io/e/FkKh7o">https://veilmail.io/e/FkKh7o</a></p>
            </form>
        </div>
    </body>

    </html>

</x-app-layout>
