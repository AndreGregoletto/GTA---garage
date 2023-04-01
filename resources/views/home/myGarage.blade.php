<x-layout>

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="row">
                <div class="col-5">
                    <label class="visually-hidden" for="car">Veículo</label>
                    <select class="form-select" id="car">
                        <option value="" selected class="text-center" disabled>Veículos</option>
                    </select>
                </div>
                <div class="col-5">
                    <label class="visually-hidden" for="garage">Garagem</label>
                    <select class="form-select" id="garage">
                        <option value="" selected class="text-center" disabled>Garagem</option>
                    </select>
                </div>
                <div class="col-2">
                    <button class="btn btn-success">Adicionar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        @if($response)
            @foreach ($response as $value)        
                <div class="col-4 mt-5">

                    <div class="card boarder bg-secondary bg-dark text-white p-1">
                        <h5 class="card-title" style="text-indent: 2em"><b>{{ array_keys($value)[0].' Vagas'}}</b></h5>
                        <table class="table text-white text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Vaga</th>
                                    <th scope="col">Veículo</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            @if(isset($value[array_keys($value)[0]][0]['cars'][0]))
                            <tbody>                
                                @foreach ($value[array_keys($value)[0]] as $car)
                                    <tr>
                                        <th scope="row"><b>{{ $loop->iteration }}</b></th>
                                        <td><b>{{ $car['cars'][0]['name'] }}</b></td>
                                        <td scope="row">
                                            <b>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eraser text-danger" viewBox="0 0 16 16">
                                                    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                                                </svg>
                                            </b>
                                        </td>
                                    </tr>
                                @endforeach                                    
                            </tbody>  
                            @else
                                <tbody>
                                    <tr>
                                        <td></td><td><b class="text-danger">Garagem Vazia</b></td><td></td>
                                    </tr>                                 
                                </tbody> 
                            @endif
                        </table>                
                    </div>

                </div>    
            @endforeach
        @endif
    </div>
</x-layout>
<script>
    const baseUrl   = window.location.origin
    $(document).ready(function(){
        $.ajax({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'GET',
            url:`${baseUrl}/myGarage/selectData`,                
            async:true,
            dataType:'json',            
            success: function(response){                
                response.forEach(function(datas){
                    datas.forEach(function(data){
                        $(`#${data['combo']}`).append(`<option value="${data['id']}">${data['name']}</option>`)
                    })                                        
                })
            }
        })
    })
</script>