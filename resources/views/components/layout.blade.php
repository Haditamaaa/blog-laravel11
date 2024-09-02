<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- dark mode --}}
    {{-- <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script> --}}
    <title>Blog Kece</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>


    {{-- <script src="js/script.js"></script> --}}
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      const checkbox = document.querySelector('.theme-controller');
      const currentTheme = localStorage.getItem('theme');

      if (currentTheme) {
        document.body.setAttribute('data-theme', currentTheme);
        checkbox.checked = currentTheme === 'dark';
      }

      checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
          document.body.setAttribute('data-theme', 'dark');
          localStorage.setItem('theme', 'dark');
        } else {
          document.body.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
        }
      });
    });
  </script>

</html>
