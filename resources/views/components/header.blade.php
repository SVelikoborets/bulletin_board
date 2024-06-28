<div class="container-fluid">
    @guest
        <a href="/" class="nav-item nav-link blue-link">
            Главная
        </a>
        <button type="button" class="btn ">
            <a href="{{ route('login') }}"  class="nav-item nav-link ">
                Вход
            </a>
        </button>
        <button type="button" class="btn ">
            <a href="{{ route('register') }}"  class="nav-item nav-link ">
                Регистрация
            </a>
        </button>
    @endguest

    @auth
        <button type="button" class="btn btn-light">
            <a href="{{route('ad.create')}}" class="nav-item nav-link blue-link">
                Добавить объявление
            </a>
        </button>
        <form action="{{ route('logout') }}" method="POST" class="form-inline">
            @csrf
            <input type="submit" class="btn btn-danger" value="Выход">
        </form>
    @endauth
</div>
