<x-layout>    
    <x-buttonCreate></x-buttonCreate>
    <!-- Modal -->
    <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCreateLabel">Adicionar Marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="ex: Bravado"  name="name" id="name" aria-label="Nome">
                        </div>
                        <div class="col">
                            <select name="status" id="status" class="form-control">
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                    </div>
                </form>

                <div class="modal-footer">
                    <button type="button" id="add" class="btn btn-success" onclick="add()" aria-label="Close">Adicionar</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-dark table-striped table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody id="content">
            @foreach($aData as $data)
                <tr>
                    <th scope="row">{{ $data['id'] }}</th>
                    <td>{{ $data['name'] }}</td>
                    <td class="{{ $data['status'] == 1 ? 'text-success' : 'text-danger' }}"> 
                        {{ $data['status'] == 1 ? 'Ativo' : 'Inativo' }} 
                    </td>
                    <td class="text-center">
                        <a href="#" style="text-decoration: none" class="text-white me-2">
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
                        <a href="#" style="text-decoration: none" class="text-white" onclick="destroy({{ $data['id'] }})">
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
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        const baseUrl   = window.location.origin
        const container = document.getElementById('content')
        function add(){
            let name   = $('#name').val()
            let status = $('#status').val()
            
            if(name == ""){
                return false
            }
            
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:`${baseUrl}/brand/store`,
                async:true,
                dataType:'json',
                data:{
                    name:name,
                    status:status
                },
                success: function(datas){
                    foreachHtml(datas)
                    $('#name').val("")
                }
            })
        }

        function destroy(id){
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:`${baseUrl}/brand/destroy`,
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
            container.innerHTML = ''  
            datas.forEach(function(data){
                var status = data['status'] == 1 ? 'Ativo' : 'Inativo'
                var classStatus = data['status'] == 1 ? 'text-success' : 'text-danger'
                console.log(data['status'])
                container.innerHTML +=
                    `<tr>
                        <th scope="row">${data['id']}</th>
                        <td>${data['name']}</td>
                        <td class="${classStatus}">${status}</td>
                        <td class="text-center">
                            <a href="#" style="text-decoration: none" class="text-white me-2">
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
                            <a href="#" style="text-decoration: none" class="text-white" onclick="destroy(${data['id']})">
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
                    </tr>`
            })
        }
    </script>
</x-layout>