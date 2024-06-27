<x-layout>
    <x-slot:title>
        Главная
        </x-slot>
        @if(count($categories)>0)
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <h1 class="my-3 text-center">Объявления</h1>
                        <div class="row justify-content-center m-auto">
                            @foreach($categories as $category)
                                <div class="col-md-3 brick">
                                    <a class="nav-item nav-link" href="{{ route('sublist', ['category' => $category->slug]) }}">
                                        <h4 class="clrchg">{{ $category->name }}</h4>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    @endif
</x-layout>
