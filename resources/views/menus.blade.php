<x-layout>
    <x-slot:heading>
        Menus
    </x-slot:heading>
  
    <h2 class="font-bold text-lg">{{ $menus['foodname'] }}</h2>
    <p>
      This item costs {{ $menus['cost']}} each.
    </p>

    <p class="mt-6">
        <x-button href="/menus/{{ $menus['id'] }} /cart">Add to Cart</x-button>
    </p>
</x-layout>