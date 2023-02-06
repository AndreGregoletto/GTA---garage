<x-layout>
    <div class="row">
        <div class="col-6">
            <div class="row justify-content-center">
                <div class="col-8 mb-3">
                    <label class="visually-hidden" for="name">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Veículo">
                </div>
                <div class="row justify-content-center p-0">
                    <div class="col-4">
                        <label class="visually-hidden" for="car_id">Categoria</label>
                        <select class="form-select" id="car_id">
                            <option selected>-- Categoria --</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label class="visually-hidden" for="brand_id">Marca</label>
                        <select class="form-select" id="brand_id">
                            <option selected>-- Marca --</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Adicionar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data['name'] }}</td>
                            <td>{{ isset($data->category->name) ? $data->category->name : '- - -' }}</td>
                            <td>{{ isset($data->brand->name)    ? $data->brand->name : '- - -' }}</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle text-success" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>