<x-layout>    
    <x-buttonCreate></x-buttonCreate>

    <!-- Modal -->
    <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCreateLabel">Adicionar CARRO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="ex: NERO"  name="name" id="name" aria-label="Nome">
                        </div>         
                        <div class="col">
                            <input type="text" class="form-control" placeholder="ex: $1.200.000"  name="price" id="price" aria-label="Price">
                        </div>         
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="0" selected disabled><b>-- CATEGORIA --</b></option>
                                @foreach ($aDatas['category'] as $data)
                                    <option value="{{ $data['id'] }}"><b>{{ $data['name'] }}</b></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="0" selected disabled><b>-- MARCA --</b></option>
                                @foreach ($aDatas['brand'] as $data)
                                    <option value="{{ $data['id'] }}"><b>{{ $data['name'] }}</b></option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <select name="convertible" id="convertible" class="form-control">
                                <option value="" class="text-success" selected disabled><b>-- CONVERSIVEL --</b></option>
                                <option value="1" class="text-success"><b>Sim</b></option>
                                <option value="0" class="text-danger"><b>Não</b></option>
                            </select>
                            
                        </div>
                        <div class="col">
                            <select name="status" id="status" class="form-control">
                                <option value="0" class="text-success" selected disabled><b>-- STATUS --</b></option>
                                <option value="1" class="text-success"><b>Ativo</b></option>
                                <option value="0" class="text-danger"><b>Inativo</b></option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" id="add" class="btn btn-success" onclick="add()" aria-label="Close">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
    
    <table class="table table-dark table-striped table-hover mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Nome</th>
                <th scope="col" class="text-center">Categoria</th>
                <th scope="col" class="text-center">Marca</th>
                <th scope="col" class="text-center">Preço</th>
                <th scope="col" class="text-center">Conversivel</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody id="content">
            @foreach ($aDatas['car'] as $data)
                <tr>
                    <th class="text-center" scope="row">{{ $data['id'] }}</th>
                    <td class="text-center">{{ $data['name'] }}</td>
                    <td class="text-center">{{ isset($data->category['name']) ? $data->category['name'] : 'SEM CATEGORIA' }}</td>
                    <td class="text-center">{{ isset($data->brand['name']) ? $data->brand['name'] : 'SEM MARCA' }}</td>
                    <td class="text-center">{{ $data['price'] }}</td>
                    <td class="text-center {{ $data['convertible'] == 1 ? 'text-success' : 'text-danger' }}">{{ $data['convertible'] == 1 ? 'Sim'   : 'Não' }}</td>
                    <td class="text-center {{ $data['status']      == 1 ? 'text-success' : 'text-danger' }}">{{ $data['status']      == 1 ? 'Ativo' : 'Inativo' }}</td>
                    <td class="text-center">
                        <a href="#{{ $data['id'] }}" style="text-decoration: none" class="text-white me-2" data-bs-toggle="modal" data-bs-target="#modalEdit{{$data['id']}}">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                width="18" 
                                height="18" 
                                fill="currentColor" 
                                class="bi bi-pencil success-hover" 
                                viewBox="0 0 16 16"
                            >
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </a>
                        <a href="#{{ $data['id'] }}" style="text-decoration: none" class="text-white" onclick="destroy({{ $data['id'] }})">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                width="18" 
                                height="18" 
                                fill="currentColor" 
                                class="bi bi-trash3-fill danger-hover" 
                                viewBox="0 0 16 16"
                            >
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </a>
                    </td>
                    
                    <!-- Modal EDITAR -->
                    <div class="modal fade" id="modalEdit{{$data['id']}}" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditLabel">Editar CARRO</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="{{ $data['name'] }}" value="{{ $data['name'] }}" name="nameEdit" id="nameEdit-{{ $data['id'] }}" aria-label="Nome">
                                            </div>         
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="ex: $1.200.000" value="{{ $data['price'] }}" name="priceEdit" id="priceEdit" aria-label="Price">
                                            </div>         
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <select name="categoryEdit" id="categoryEdit-{{ $data['id'] }}" class="form-control">
                                                    <option value="0" selected disabled><b>-- CATEGORIA --</b></option>
                                                    @foreach ($aDatas['category'] as $category)
                                                        <option value="{{ $category['id'] }}" {{ $data['category_id'] == $category['id'] ? 'selected' : '' }}><b>{{ $category['name'] }}</b></option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select name="brandEdit" id="brandEdit-{{ $data['id'] }}" class="form-control">
                                                    <option value="0" selected disabled><b>-- MARCA --</b></option>
                                                    @foreach ($aDatas['brand'] as $brand)
                                                        <option value="{{ $brand['id'] }}" {{ $data['brand_id'] == $brand['id'] ? 'selected' : '' }}><b>{{ $brand['name'] }}</b></option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <select name="convertibleEdit" id="convertibleEdit-{{ $data['id'] }}" class="form-control">
                                                    <option value="" class="text-success" selected disabled><b>-- CONVERSIVEL --</b></option>
                                                    <option value="1" class="text-success" {{ $data['convertible'] == 1 ? 'selected' : '' }}><b>Sim</b></option>
                                                    <option value="0" class="text-danger"  {{ $data['convertible'] == 0 ? 'selected' : '' }}><b>Não</b></option>
                                                </select>
                                                
                                            </div>
                                            <div class="col">
                                                <select name="statusEdit" id="statusEdit-{{ $data['id'] }}" class="form-control">
                                                    <option value="0" class="text-success" selected disabled><b>-- STATUS --</b></option>
                                                    <option value="1" class="text-success" {{ $data['status'] == 1 ? 'selected' : '' }} ><b>Ativo</b></option>
                                                    <option value="0" class="text-danger"  {{ $data['status'] == 0 ? 'selected' : '' }}><b>Inativo</b></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="add" class="btn btn-success" onclick="edit({{ $data['id'] }})" aria-label="Close">Editar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        const baseUrl   = window.location.origin
        const container = document.getElementById('content')
        function add(){
            let name        = $('#name').val()
            let price       = $('#price').val()
            let status      = $('#status      option:selected').val()
            let brand_id    = $('#brand_id    option:selected').val()
            let category_id = $('#category_id option:selected').val()
            let convertible = $('#convertible option:selected').val()

            if(name == "" || category_id == "" || brand_id == "" || convertible == "" || status == "" || price == ""){
                return false
            }
            
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:`${baseUrl}/car/store`,
                async:true,
                dataType:'json',
                data:{
                    name:name,
                    price:price,
                    category_id:category_id,
                    brand_id:brand_id,
                    convertible:convertible,
                    status:status
                },
                success: function(datas){
                    foreachHtml(datas)
                    $('#name').val("")
                }
            })
        }
        
        function edit(id){
            let name        = $(`#nameEdit-${id}`).val()
            let priceEdit   = $(`#priceEdit-${id}`).val()
            let brand_id    = $(`#brandEdit-${id}       option:selected`).val()
            let status      = $(`#statusEdit-${id}      option:selected`).val()
            let category_id = $(`#categoryEdit-${id}    option:selected`).val()
            let convertible = $(`#convertibleEdit-${id} option:selected`).val()

            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:`${baseUrl}/car/updated`,
                async:true,
                dataType:'json',
                data:{
                    id:id,
                    name:name,
                    price:priceEdit,
                    category_id:category_id,
                    brand_id:brand_id,
                    convertible:convertible,
                    status:status
                },
                success: function(datas){
                    foreachHtml(datas)
                }
            })
        }

        function destroy(id){
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:`${baseUrl}/car/destroy`,
                async:true,
                dataType:'json',
                data:{
                    id:id
                },
                success: function(datas){
                    foreachHtml(datas)
                }
            })
        }


        function foreachHtml(datas){
            container.innerHTML  = ""

            datas['car'].forEach(function(data){
                let convertible  = data['convertible'] == 1 ? 'Sim' : 'Não'
                let convStatus   = data['convertible'] == 1 ? 'text-success' : 'text-danger'
                let convtSelec1  = data['convertible'] == 1 ? 'selected' : (data['convertible'] == 0 ? 'selected' : '')
                let status       = data['status']      == 1 ? 'Ativo' : 'Inativo'
                let statuStatus  = data['convertible'] == 1 ? 'text-success' : 'text-danger'
                let status1      = data['status']      == 1 ? 'selected' : ''
                let status2      = data['status']      == 0 ? 'selected' : ''

                container.innerHTML +=  `
                    <tr>
                        <th class="text-center" scope="row">${data['id']}</th>
                        <td class="text-center">${data['name']}</td>
                        <td class="text-center">${data['category']['name']}</td>
                        <td class="text-center">${data['brand']['name']}</td>
                        <td class="text-center"${data['price']}</td>
                        <td class="text-center ${convStatus}"> ${convertible} </td>
                        <td class="text-center ${statuStatus}">${status}</td>
                        <td class="text-center">
                            <a href="#${data['id']}" style="text-decoration: none" class="text-white me-2" data-bs-toggle="modal" data-bs-target="#modalEdit${data['id']}">
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    width="18" 
                                    height="18" 
                                    fill="currentColor" 
                                    class="bi bi-pencil success-hover" 
                                    viewBox="0 0 16 16"
                                >
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                            <a href="#${data['id']}" style="text-decoration: none" class="text-white" onclick="destroy(${data['id']})">
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    width="18" 
                                    height="18" 
                                    fill="currentColor" 
                                    class="bi bi-trash3-fill danger-hover" 
                                    viewBox="0 0 16 16"
                                >
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                </svg>
                            </a>
                        </td>
                        
                        <!-- Modal EDITAR -->
                        <div class="modal fade" id="modalEdit${data['id']}" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditLabel">Editar CARRO</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="${data['name']}" value="${data['name']}" name="nameEdit" id="nameEdit-${data['id']}" aria-label="Nome">
                                                </div>         
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <select name="categoryEdit" id="categoryEdit-${data['id']}" class="form-control">
                                                        <option value="">-- Categoria --</option>
                                                        @foreach ($aDatas['category'] as $category)
                                                            <option value="{{ $category['id'] }}" {{ $data['category_id'] == $category['id'] ? 'selected' : '' }}><b>{{ $category['name'] }}</b></option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="brandEdit" id="brandEdit-${data['id']}" class="form-control">
                                                        <option value="0" selected disabled><b>-- MARCA --</b><optio>
                                                            @foreach ($aDatas['brand'] as $brand)                                                                
                                                                <option value="{{ $brand['id'] }}" {{ $data['brand_id'] == $brand['id'] ? 'selected' : '' }}><b>{{ $brand['name'] }}</b></option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <select name="convertibleEdit" id="convertibleEdit-${data['id']}" class="form-control">
                                                        <option value="" class="text-success" selected disabled><b>-- CONVERSIVEL --</b></option>
                                                        <option value="1" class="text-success" ${convtSelec1}><b>Sim</b></option>
                                                        <option value="0" class="text-danger"  ${convtSelec1}><b>Não</b></option>
                                                    </select>
                                                    
                                                </div>
                                                <div class="col">
                                                    <select name="statusEdit" id="statusEdit-${data['id']}" class="form-control">
                                                        <option value="0" class="text-success" selected disabled><b>-- STATUS --</b></option>
                                                        <option value="1" class="text-success" ${status1}><b>Ativo</b></option>
                                                        <option value="0" class="text-danger"  ${status2}><b>Inativo</b></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="add" class="btn btn-success" onclick="edit(${data['id']})" aria-label="Close">Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                `
            })
        }
    </script>
</x-layout>