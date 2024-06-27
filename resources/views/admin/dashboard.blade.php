<x-layout>
    <x-slot:title>
        Админ-панель
        </x-slot>
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="my-3 text-center">Админ-панель</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <button type="button" class="btn btn-light">
                                <a class="nav-item nav-link " href="{{ route('admin.users') }}">
                                    <h4>Пользователи</h4>
                                </a>
                            </button>
                        </div>
                        <div class="row mb-3">
                            <button type="button" class="btn btn-light">
                                <a class="nav-item nav-link " href="{{ route('admin.ads') }}">
                                    <h4>Объявления</h4>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>

