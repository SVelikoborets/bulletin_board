<x-layout>
    <x-slot:title>
    {{ $title }}
    </x-slot>
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="my-3 text-center">Список пользователей</h1>
                <div class="row mb-3">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Имя</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Редактировать</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>
                                    <p>{{ $user->name }}</p>
                                </td>
                                <td>
                                    <p>{{ $user->email }}</p>
                                </td>
                                <td>
                                    @if($user->banned)
                                    <p>Забанен</p>
                                    @else
                                    <p>Активный</p>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light">
                                        <a class ="blue-link" href="{{ route('user.edit', ['user' => $user->id])}}">Редактировать</a>
                                    </button>
                                </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination justify-content-center">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
</x-layout>
