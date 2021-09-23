<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Your Dashboard') }}</title>

		<!-- Fonts -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
		rel="stylesheet"
		/>

		<!-- Styles -->
		<link rel="stylesheet" href="{{ mix('css/app.css') }}">
		@livewireStyles

		<!-- Scripts -->
		<script src="{{ mix('js/app.js') }}" defer></script>
		<script src="{{ asset('js/init-view.js') }}" ></script>
		<script src="{{ asset('js/focus-trap.js') }}" ></script>
	</head>
	<body class="font-sans antialiased">
		<div :class="{ 'overflow-hidden': isSideMenuOpen}" class="flex h-screen bg-gray-50 dark:bg-gray-900">
			<!-- Sidebars -->
            <x-sidebar.desktop />
            <x-sidebar.mobile />
            <!-- /Sidebars -->

            <!-- Main Layout -->
            <x-layout.main>

                <!-- Top Nav -->
                <x-nav.top-nav />
                <!-- /Top Nav -->

                <!-- Body -->
                <x-layout.body>
                    {{ $slot }}
                </x-layout.body>
                <!-- Body -->

            </x-layout.main>
            <!-- /Main Layout -->
		</div>
		@stack('scripts')
		@stack('modals')
		@livewireScripts
	</body>
</html>
