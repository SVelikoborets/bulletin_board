<x-layout>
    <x-slot:title>
    homepage
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="my-3 text-center">Доска объявлений</h1>

            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @else
                        <div class="alert alert-success" role="alert">
                            Добро пожаловать, {{Auth::user()->name}}!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
