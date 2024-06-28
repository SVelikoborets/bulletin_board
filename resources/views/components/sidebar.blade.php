<div class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">Доска объявлений</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-item nav-link" >
                Главная
            </a>
        </li>

        @guest
        <li>
            <a href="{{ route('login') }}"  class="nav-item nav-link">
                Вход
            </a>
        </li>
        <li>
            <a href="{{ route('register') }}"  class="nav-item nav-link">
                Регистрация
            </a>
        </li>
        @endguest

        @auth
            @if (auth()->user()->isAdmin())
                <a href="{{route('admin.dashboard')}}" class="nav-item nav-link link-dark">
                    Админ-панель
                </a>
            @else
                <li>
                    <a href="{{route('ad.create')}}" class="nav-item nav-link link-dark">
                        Добавить объявление
                    </a>
                </li>
            @endif
        <li>
            <form action="{{ route('logout') }}" method="POST"
                  class="form-inline">
                @csrf
                <input type="submit" class=" nav-item nav-link" value="Выход">
            </form>
        </li>
        @endauth

    </ul>
    <hr>

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Объявления</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            @foreach($categories as $category)
                <li>
                    <a class="dropdown-item" href="{{ route('sublist',['category' =>$category->slug]) }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>




