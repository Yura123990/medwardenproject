<header class="bg-white shadow">
    <div class="flex justify-between max-w-7xl mx-auto py-4 px-3 sm:px-6 mb-5 lg:px-8">
        <div class="sm:block">
            <a href="{{ route('home') }}" class="text-lg font-bold w-auto">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <div class="sm:block">
            <a href="{{ route('login') }}" class="text-base text-gray-700 hover:text-purple-700">Login</a>
            <a href="{{ route('register') }}" class="ml-4 text-base text-gray-700 hover:text-purple-700">Register</a>
        </div>
    </div>
</header>