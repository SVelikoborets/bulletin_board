<x-layout>
    <x-slot:title>
    {{ $ad->title }}
    </x-slot>
    <div class="container">
        <div class="row justify-content-center brick">
            <a href="{{ route('sublist', ['category' => $ad->category->slug]) }}">
                <h4>{{$ad->category->name}}</h4>
            </a>
            <a href="{{ route('advts', ['category' =>$ad->category->slug, 'subcategory' => $ad->subcategory->slug])}}">
                • {{$ad->subcategory->name}}
            </a>

            <div class="card">
                <div class="card-body">
                    <h2>{{ $ad->title }}</h2>
                    <p>{{ $ad->description }}</p>
                    <p>Автор: {{ $ad->user->name}}</p>
                    <p>Дата создания: {{ $ad->created_at->format('d.m.Y') }}</p>
                    <p>Обновлено: {{ $ad->updated_at->format('d.m.Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
