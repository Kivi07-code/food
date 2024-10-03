<x-layout>
    <x-slot:heading>
        Menu
    </x-slot:heading>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
</head>
  <h1><strong>Online Menu</strong></h1>
  <p> Here you can choose your desired foods and add them to your cart! after you have decided on what you want just check out to cart and give us your details and we will deliver it straight to your doorstep</p>
  <br>
  <div class="space-y-4">

     @foreach ($menu as $food)
     <ul>
        <a href="/menu/{{ $food['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
        <strong>{{ $food['foodname']}}:</strong> costs {{ $food['cost']}} per a singlar item.

    </a>

    </ul>
     @endforeach

    
</x-layout>