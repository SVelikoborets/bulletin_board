<x-layout>
    <x-slot:title>
      {{ $category->name }}
    </x-slot>
    <div class="container">
        <div class="row justify-content-around">
            <h1 class="my-3 text-center">Рубрики</h1>
            <div class="row justify-content-center  ">
                @foreach($category->subcategories as $subcategory)
                    <div class="form-flex brick">
                        <a class="nav-item nav-link" href="{{ route('advts', ['category' =>$category->slug, 'subcategory' => $subcategory->slug]) }}">
                            <h4>{{ $subcategory->name }}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
</x-layout>

