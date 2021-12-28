<x-slate::html>
	<x-slot name="head">

		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

	</x-slot>
	<x-slate::shell id="app" brand="{{ env('APP_NAME', '') }}">
		
		<x-slot name="header">
			<x-slate::dark-mode-toggle></x-slate::dark-mode-toggle>
			<x-slate::icon icon="carbon-notification" size="xs" color="gray"></x-slate::icon>
			<div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
				<div>
					<button @click="open = !open"
						class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
						<img class="h-8 w-8 rounded-full"
							src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
							alt="" />
					</button>
				</div>
				<div x-show="open" x-transition:enter="transition ease-out duration-200"
					x-transition:enter-start="transform opacity-0 scale-95"
					x-transition:enter-end="transform opacity-100 scale-100"
					x-transition:leave="transition ease-in duration-75"
					x-transition:leave-start="transform opacity-100 scale-100"
					x-transition:leave-end="transform opacity-0 scale-95"
					class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
					<div class="py-1 rounded-md bg-white shadow-xs">
						<a href="#"
							class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Your
							Profile</a>
						<a href="#"
							class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Settings</a>
						<a href="#"
							class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Sign
							out</a>
					</div>
				</div>
			</div>
		</x-slot>
		<x-slot name="sidebar">
			@include('navigation.sidebar')
		</x-slot>
		
		
		<x-slate::header>

			<x-slot name="heading">
				License
			</x-slot name="heading">

		</x-slate::header>
		<div class="px-4 py-4">
			<x-slate::content>
				
				<p>Slate UI Kit is licensed under MIT License.</p>
				<p>It's a short and simple permissive license with conditions only requiring preservation of copyright and license notices. Licensed works, modifications, and larger works may be distributed under different terms and without source code.</p>
				<p><strong>IMPORTANT:</strong> Though we try to keep the below license text in sync with the Github Repo'slicense. It's advised to refer to LICENSE file in the repo.</p>

				<pre class="bg-gray-300 text-gray-900">
MIT License

Copyright 2021 (&copy;) Neeraj Kumar (hello@neerajkumar.name)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.</pre>
			</x-slate::content>
		</div>


	</x-slate::shell>
</x-slate::html>