@extends('main.home')
@section('isi')
    <div class=" rounded-xl lg:mx-40 md:mx-40 my-10 p-6 shadow-lg border-t-2">
        <h2 class=" mx-auto text-center pb-4 border-b-2 font-semibold font-sans text-xl w-1/2 md:font-sm">Login Here</h2>
        @if (session()->has('pesan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p> {{ session('pesan') }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session()->has('gagal'))
               <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200 w-1/2 mx-auto my-4" role="alert">
                <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                    Login gagal. Username atau password salah.
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-collapse-toggle="alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                </div>
            @endif
        <form class="mt-4 mx-auto  " action="/login" method="POST">
            @csrf
            <label for="username">
                <span
                    class=" font-semibold text-slate-700 after:content-['*'] after:text-pink-700 after:ml-0.5 dark:text-slate-50">Username</span>
                <input
                    class="mb-4 w-full px-3 py-2 border shadow rounded block text-sm placeholder:text-slate-900 focus:outline-none focus:ring-1 focus:ring-lime-500 focus:border-lime-500 invalid:text-pink-700 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer dark:text-slate-900"
                    type="username" id="username" name="name" required placeholder="Enter username">
            </label>
            <label for="Password">
                <span
                    class=" font-semibold text-slate-700  after:text-pink-700 after:ml-0.5 dark:text-slate-50">Password</span>
                <input
                    class="mb-4 w-full px-3 py-2 border shadow rounded block text-sm placeholder:text-slate-900 focus:outline-none focus:ring-1 focus:ring-lime-500 focus:border-lime-500 invalid:text-pink-700 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer dark:text-slate-900"
                    type="password" id="Password" required placeholder="Enter Password" name="password">
            </label>
            <button type="submit"
                class="btn bg-lime-200 px-4 py-2 my-5 rounded-lg font-semibold hover:shadow-xl hover:bg-lime-600 hover:text-white block ml-auto">Login</button>
            {{-- <p class="text-center mt-3">Belum punya Account? <a href="/register">Register Now</a></p> --}}
        </form>
    </div>
@endsection
