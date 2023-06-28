const contenedor = document.getElementById('contentphp');

/* document.querySelectorAll('.enlace').forEach((val,id) => {
    val.addEventListener('click',(e)=>{
        cargarPagina(e.target.dataset.urldestino);
    });
}); */

enlaces.forEach((val,id) =>{

    val.removeEventListener('click',cargarPagina);
    val.addEventListener('click',cargarPagina);

});


//Funcion para cargar php
function cargarPagina(urlDestino) {
    var url = urlDestino; //Obtiene la URL del enlace

    //Realizar la solicitud a la pagina utilizando fecth
    fetch(url)
    .then(function(response){

        if(response.ok){
            return response.text();//Convierte la respuesta a text           
        }
        throw new Error('Error en la solicitud HTTP');
    })
    .then(function(data){
        contenedor.innerHTML ='';
        //Actualiza el contenido de la página actual con la respuesta de la página PHP
        let html = new DOMParser().parseFromString(data, 'text/html');
        let js = document.createElement('script');

        //Verificar si existe la etiqueta Script
        if(html.head.children.length>0){

            js.src = html.head.children[0].src;
            js.defer;
            document.body.appendChild(js);

        }
        contenedor.append(...html.body.children);
    })

    .catch(function(error){
        console.log('Error'+error.message);
    });


}

