<x-layout>
    <x-slot:title>
    {{ $title }}
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="my-3 text-center">Список объявлений</h1>

            <div class="row mb-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Автор</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Рубрика</th>
                        <th scope="col">Статус</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($ads as $ad)
                        <tr>
                            <th scope="row">{{ $ad->id }}</th>
                            <td>
                                <p>{{ $ad->user->name }}</p>
                            </td>
                            <td>
                                <p>{{ $ad->title }}</p>
                            </td>
                            <td>
                                <button type="button" class="btn btn-light">
                                    <a class ="blue-link" href="{{ route('ad.show', ['ad' => $ad->id])}}">
                                        Читать
                                    </a>
                                </button>
                            </td>
                            <td>
                                <p>{{ $ad->category->name }}</p>
                            </td> <td>
                                <p>{{ $ad->subcategory->name }}</p>
                            </td>
                            <td>
                                <p>{{ $ad->status }}</p>
                            </td>
                            <td>
                                <button type="button" class="btn btn-light">
                                    <a class ="blue-link" href="{{ route('ad.edit', ['ad' => $ad->id])}}">
                                        Редактировать
                                    </a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination justify-content-center">
                {{ $ads->links() }}
            </div>
        </div>
    </div>
</x-layout>

