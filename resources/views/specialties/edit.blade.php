<x-app-layout>
    <div class="px-6 pt-16 flex justify-end"><a href="{{ url('specialties/create') }}" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Back</a>


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
            <h2 class="text-2xl font-semibold text-white mb-6">Add Specialty</h2>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            @endif
            <form action="{{ url('specialties') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Specialty Name</label>
                    <input type="text" id="name" name="name" placeholder="Doctor" required
                        value="{{ old('name') }}"
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-300 text-sm font-bold mb-2">Description</label>
                    <input type="text" id="description" name="description" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                </div>

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    Enter
                </button>

            </form>
        </div>
    </body>

    </html>

</x-app-layout>
