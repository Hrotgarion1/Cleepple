
   
        //Cambiar imagen
        //Este código está a la escucha del input con id file
   document.getElementById("file").addEventListener('change', cambiarImagen);
   //Si selecciono un archivo se activa la función cambiarImagen
   function cambiarImagen(event){
       var file = event.target.files[0];
   
       var reader = new FileReader();
       reader.onload = (event) => {
           //aquín busca el elemento con el id picture-post y lo cambia en el atributo src  
           document.getElementById("picture-post").setAttribute('src', event.target.result); 
       };
   
       reader.readAsDataURL(file);
   }

   
