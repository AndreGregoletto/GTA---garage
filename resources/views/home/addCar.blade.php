<x-layout>
    <div class="row" id="page">
        <div class="col-6">
            <div class="row justify-content-center">
                <div class="col-8 mb-3">
                    <label class="visually-hidden" for="name">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Veículo">
                </div>
                <div class="row justify-content-center p-0">
                    <div class="col-4">
                        <label class="visually-hidden" for="category_id">Categoria</label>
                        <select class="form-select" id="category_id">
                            <option selected>-- Categoria --</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label class="visually-hidden" for="brand_id">Marca</label>
                        <select class="form-select" id="brand_id">
                            <option selected>-- Marca --</option>
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
                <tbody id="carTable">
                    
                </tbody>
            </table>
            <div class="row" id="paginas">

            </div>
        </div>
    </div>
    <script>
        const baseUrl   = window.location.origin
        const container = document.getElementById('carTable')
        const paginas   = document.getElementById('paginas')

        function pagAjax(pag){
            const pagAjax = pag
            const pagina  = pagAjax * 10
    
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:`${baseUrl}/addCarAjax`,                
                async:true,
                dataType:'json',
                data:{
                    pag:pagina,
                },
                success: function(datas){
                    const pagination    = Math.ceil(datas['paginas'] / 10)
                    const lastPag       = pagination - 1
                    let pagNegativ1     = pagAjax < 1 ? 'hidden' : ''
                    let pagNegativ2     = pagAjax < 2 ? 'hidden' : ''
                    let pagLimit1       = pagAjax > lastPag - 1 ? 'hidden' : ''
                    let pagLimit2       = pagAjax > lastPag - 2 ? 'hidden' : ''                    
                    container.innerHTML = ""
                    
                    datas['cars'].forEach(function(data){
                        container.innerHTML += `
                            <tr>
                                <td>${data['name']}</td>
                                <td>${data['category']['name']}</td>
                                <td>${data['brand']['name']}</td>
                                <td class="text-center">
                                    <a href="#${data['id']}" onclick="addCar(${data['id']})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle text-success" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>    
                                    </a>
                                </td>
                            </tr>
                        `
                    })

                    paginas.innerHTML = `
                        <div class="justify-content-center">
                            <div class="bg-dark p-2 rounded-3 border d-flex justify-content-between">
                                <a href="#" onclick="pagAjax(0)" class="text-danger bg-white rounded-3 border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                                    </svg>    
                                </a>
                                
                                <a href="#" onclick="pagAjax(${pagAjax - 2})" class="link-light fs-3"    ${pagNegativ2} > ${pagAjax - 2} </a>
                                <a href="#" onclick="pagAjax(${pagAjax - 1})" class="link-light fs-3"    ${pagNegativ1} > ${pagAjax - 1} </a>
                                <a href="#" onclick="pagAjax(${pagAjax})"     class="link-light fs-3 fst-italic text-danger"> ${pagAjax} </a>
                                <a href="#" onclick="pagAjax(${pagAjax + 1})" class="link-light fs-3"      ${pagLimit1} > ${pagAjax + 1} </a>
                                <a href="#" onclick="pagAjax(${pagAjax + 2})" class="link-light fs-3"      ${pagLimit2} > ${pagAjax + 2} </a>
                                

                                <a href="#" onclick="pagAjax(${lastPag})" class="text-danger bg-white rounded-3 border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    `
                }
            })
        }

        function comboBrandCategor(){
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'GET',
                url:`${baseUrl}/comboBrandCategor`,   
                async:false,
                dataType:'json',
                success: function(data){
                    let queue = ['category_id', 'brand_id']
                    ajaxCombo(queue, data)
                }
            })
        }

        function ajaxCombo(queue, data){

            queue.forEach(function(id){                
                data[id].forEach(function(value){
                    $(`#${id}`).append(`<option value="${value['id']}">${value['name']}</option>`)
                })
            })
            
        }

        function addCar(id){
            alert(id)
        }
    </script>
</x-layout>
<script>
$(document).ready(function() {
    comboBrandCategor()
    pagAjax(0)
});
</script>