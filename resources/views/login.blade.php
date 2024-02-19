@extends('layout')
@section('title', 'Login')

@section('content')
    <body class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="max-w-md w-full px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-center text-3xl font-extrabold text-gray-900">Login</h2>
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <div class="mt-1">
                        <input id="username" name="username" type="text" required autofocus
                            class="appearance-none block w-full px-3 py-2 border rounded-md shadow-sm 
                                  placeholder-gray-400 focus:outline-none focus:ring-indigo-500 
                                  focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" required
                            class="appearance-none block w-full px-3 py-2 border rounded-md shadow-sm 
                                  placeholder-gray-400 focus:outline-none focus:ring-indigo-500 
                                  focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="mt-4 w-full flex justify-center py-2 px-4 border 
                                                border-transparent rounded-md shadow-sm text-sm 
                                                font-medium text-white bg-indigo-600 hover:bg-indigo-700 
                                                focus:outline-none focus:ring-2 focus:ring-offset-2 
                                                focus:ring-indigo-500">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </body>

@endsection
