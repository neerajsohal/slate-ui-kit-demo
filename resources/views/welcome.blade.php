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
		
		<div class="px-4 py-4">
			<x-slate::content>
				<x-slate::heading tag="h1" font-medium>Welcome to Slate UI Kit</x-slate::heading>
				<p>Slate UI Kit is a set of anonymous blade components built using TailwindCSS.</p>
			</x-slate::content>
			<x-slate::prism>
				<x-slot name="code" lang="bash">
					$ composer require neerajsohal/slate
				</x-slot>
			</x-slate::prism>
		</div>


	</x-slate::shell>
</x-slate::html>