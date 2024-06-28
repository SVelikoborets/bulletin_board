<x-layout>
    <x-slot:title>
        {{$category}}
        </x-slot>
        <div class="container">
            <div class="row justify-content-around">
                <h1 class="my-3 text-center">{{$subcategory->name}}</h1>
                <div class="row justify-content-center ">
                    @guest
                        <h5 class="my-3 text-center">Чтобы добавить объявление <a class="blue-link" href="{{ route('register') }}">зарегистрируйтесь</a> или <a class="blue-link" href="{{ route('login') }}">войдите</a></h5>
                    @endguest

                    @auth
                    <button type="button" class="btn btn-light brick">
                        <a class="nav-item nav-link " href="{{ route('ad.create', ['selected'=>$subcategory->slug]) }}">
                            <h4>+</h4>
                            <p>добавить объявление</p>
                        </a>
                    </button>
                     @endauth

                    @if(count($ads)>0)
                        @foreach($ads as $ad)
                            <div class="form-flex brick">
                                <h3 class="my-3 text-center">{{$ad->title}}</h3>
                                <a class="nav-item nav-link text-center" href="{{ route('ad.show', ['ad' => $ad->id]) }}">
                                    Читать
                                </a>
                            </div>
                        @endforeach

                        <div class="pagination justify-content-center">
                            {{ $ads->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
</x-layout>

