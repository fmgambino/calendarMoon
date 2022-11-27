const select = document.querySelector('#select');
const opciones = document.querySelector('#opciones');
const contenidoSelect = document.querySelector('#select .contenido-select');
const hiddenInput = document.querySelector('#inputSelect');
var mostrando = false;


document.querySelectorAll('#opciones > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect.innerHTML = e.currentTarget.innerHTML;
		select.classList.toggle('active');
		opciones.classList.toggle('active');
		hiddenInput.value = e.currentTarget.querySelector('.titulo').innerText;
	
	});
});

if(select) {
  select.addEventListener('click', () => {
  	select.classList.toggle('active');
  	opciones.classList.toggle('active');
  });
}


function obtenerDia(dia, mes, ano){
    document.getElementById('body').classList.remove("body");
    document.getElementById('body').classList.add("body1");
    if(mostrando) return;
    mostrando = true;
    //console.log(`Url: /php/obtenerMensaje.php?dia=${dia.toString().padStart(2,"0")}&mes=${(mes+1).toString().padStart(2,"0")}&ano=${ano}`)
    //Esconder el modal asi no spamea el usuario
    $("#dia").modal('hide');
    //Realizo la llamada
    var result = $.ajax({
        type: "GET",
        url: `/php/obtenerMensaje.php?dia=${dia.toString().padStart(2,"0")}&mes=${(mes+1).toString().padStart(2,"0")}&ano=${ano}`,
        success: function(data){
            console.log(data);
            console.log(`Mostrando: ${dia} - ${mes+1} - ${ano}`);
            
            if(!data.id){
               alert("Non c'è niente da mostrare");
              mostrando = false;
               return;
            
            }
            var fechaHoyTitulo = document.getElementById("fechaDia");
            fechaHoyTitulo.textContent =(data.fechaHoy);
            
            $("#my_image").attr("src", data.imagen);
            $("#my_image1").attr("src", data.imagen1);
            $("#my_image2").attr("src", data.imagen2);
            $("#my_image3").attr("src", data.imagen3);
            $("#my_image4").attr("src", data.imagen4);
            $("#my_image5").attr("src", data.imagen5);
            $("#my_image6").attr("src", data.imagen6);
            $("#my_image7").attr("src", data.imagen7);
            
            var imagen = data.imagen;
            var imagen1 = data.imagen1;
            var imagen2 = data.imagen2;
            var imagen3 = data.imagen3;
            var imagen4 = data.imagen4;
            var imagen5 = data.imagen5;
            var imagen6 = data.imagen6;
            var imagen7 = data.imagen7;
            
            
            var el = document.getElementById("text1");
            el.textContent =(data.text1);
            // validacion de imagenes
            if(imagen==="../imagenes/"){
                document.getElementById('my_image').classList.add("hide");
                
                
            }else{
                 document.getElementById('my_image').classList.remove("hide");
                 
            }
              if(imagen1==="../imagenes/"){
                document.getElementById('my_image1').classList.add("hide");
                
                
            }else{
                 document.getElementById('my_image1').classList.remove("hide");
                 
            }
              if(imagen2==="../imagenes/"){
                document.getElementById('my_image2').classList.add("hide");
                
                
            }else{
                 document.getElementById('my_image2').classList.remove("hide");
                 
            }
              if(imagen3==="../imagenes/"){
                document.getElementById('my_image3').classList.add("hide");
                
                
            }else{
                 document.getElementById('my_image3').classList.remove("hide");
                 
            }
              if(imagen4==="../imagenes/"){
                document.getElementById('my_image4').classList.add("hide");
                
                
            }else{
                 document.getElementById('my_image4').classList.remove("hide");
                 
            }
              if(imagen5==="../imagenes/"){
                document.getElementById('my_image5').classList.add("hide");
                
                
            }else{
                 document.getElementById('my_image5').classList.remove("hide");
                 
            }
              if(imagen6==="../imagenes/"){
                document.getElementById('my_image6').classList.add("hide");
                
                
            }else{
                 document.getElementById('my_image6').classList.remove("hide");
                 
            }
              if(imagen7==="../imagenes/"){
                document.getElementById('my_image7').classList.add("hide");
                
                
            }else{
                 document.getElementById('my_image7').classList.remove("hide");
                 
            }
            
            //validacion de texto
            if((data.text2)===""){
                var el1 = document.getElementById("con2");
                el1.classList.add("hide");
                //debugger;
            }else{
               var el1 = document.getElementById("text2");
               el1.textContent =(data.text2);
               document.getElementById('con2').classList.remove("hide");
               var con2 = document.getElementById("con2");
               con2.classList.add("flex");
               //debugger;
            }
            
            if((data.text3)===""){
                var el2 = document.getElementById("con3");
                el2.classList.add("hide");
                
                
            }else{
               var el2 = document.getElementById("text3");
               document.getElementById('con3').classList.remove("hide");
               el2.textContent =(data.text3);
               var con3 = document.getElementById("con3");
               con3.classList.add("flex");
            }
            if((data.text4)===""){
                var el3 = document.getElementById("con4");
                el3.classList.add("hide");
                
                
            }else{
               var el3 = document.getElementById("text4");
               document.getElementById('con4').classList.remove("hide");
               el3.textContent =(data.text4);
               var con4 = document.getElementById("con4");
               con4.classList.add("flex");
               
            }
            if((data.text5)===""){
                var el4 = document.getElementById("con5");
                el4.classList.add("hide");
                
                
            }else{
               var el4 = document.getElementById("text5");
               document.getElementById('con5').classList.remove("hide");
               el4.textContent =(data.text5); 
               var con5 = document.getElementById("con5");
               con5.classList.add("flex");
            }
            
            if((data.text6)===""){
                var el5 = document.getElementById("con6");
                el5.classList.add("hide");
                
                
            }else{
               var el5 = document.getElementById("text6");
               document.getElementById('con6').classList.remove("hide");
               el5.textContent =(data.text6);
               var con6 = document.getElementById("con6");
               con6.classList.add("flex");
             
            }
             if((data.text7)===""){
                var el6 = document.getElementById("con7");
                el6.classList.add("hide");
                
                
            }else{
               var el6 = document.getElementById("text7");
               document.getElementById('con7').classList.remove("hide");
               el6.textContent =(data.text7);
               var con7 = document.getElementById("con7");
               con7.classList.add("flex");
             
            }
              if((data.text8)===""){
                var el7 = document.getElementById("con8");
                el7.classList.add("hide");
                
                
            }else{
               var el7 = document.getElementById("text8");
               document.getElementById('con8').classList.remove("hide");
               el7.textContent =(data.text8);
               var con8 = document.getElementById("con8");
               con8.classList.add("flex");
             
            }
            // inserto los titulos
            var t = document.getElementById("titulo");
            t.textContent =(data.titulo);
            var t1 = document.getElementById("titulo1");
            t1.textContent =(data.titulo1);
            var t2 = document.getElementById("titulo2");
            t2.textContent =(data.titulo2);
            var t3 = document.getElementById("titulo3");
            t3.textContent =(data.titulo3);
            var t4 = document.getElementById("titulo4");
            t4.textContent =(data.titulo4);
            var t5 = document.getElementById("titulo5");
            t5.textContent =(data.titulo5);
            var t6 = document.getElementById("titulo6");
            t6.textContent =(data.titulo6);
            var t7 = document.getElementById("titulo7");
            t7.textContent =(data.titulo7);
            //Boton dia anterior
            let prevDate = new Date(ano, mes, dia);
            prevDate.setDate(prevDate.getDate()-1);
            //console.log(`La fecha anterior es: ${prevDate}`)
            $("#btnAnterior").attr("onclick",`obtenerDia(${prevDate.getDate()}, ${prevDate.getMonth()}, ${prevDate.getFullYear()})`);
            
            //Boton dia siguiente
            let nextDate = new Date(ano, mes, dia);
            nextDate.setDate(nextDate.getDate()+1);
            //console.log(`La fecha siguiente es: ${nextDate}`)
            $("#btnSiguiente").attr("onclick",`obtenerDia(${nextDate.getDate()}, ${nextDate.getMonth()}, ${nextDate.getFullYear()})`);
            
            
            //Muestro modal
            $("#dia").modal('show');
            mostrando = false;
        },
        error: function (xhr, status, error) {
            console.log(error);
            mostrando = false;
        }
    });
    return result;
}
    
function changeText(){
    $("#bienvenida").html('Bienvenido');
    $("#calendarioNombre").html('Calendario');
    $("#topDayNombre").html('Top day');
    $("#glosarioNombre").html('Glosario');
    $("#hoyNombre").html('Hoy');
    $("#miPerfilNombre").html('Mi Perfil');
    $("#cerraCesion").html('Cerrar sesi贸n');
    $("#idioma").html('Selecione Idioma');
}
function changeTextEn(){
    $("#bienvenida").html('Welcome');
    $("#calendarioNombre").html('Calendar');
    $("#topDayNombre").html('top day');
    $("#glosarioNombre").html('Glossary');
    $("#hoyNombre").html('Today');
    $("#miPerfilNombre").html('My profile');
    $("#cerraCesion").html('Sign off');
    $("#idioma").html('Select Language');
}
function changeTextEnItalia(){
    $("#bienvenida").html('Benvenuto');
    $("#calendarioNombre").html('Calendario');
    $("#topDayNombre").html('Top day');
    $("#glosarioNombre").html('Glossario');
    $("#hoyNombre").html('Oggi');
    $("#miPerfilNombre").html('Profilo');
    $("#cerraCesion").html('Sessione Chiusa');
    $("#idioma").html('Seleziona la lingua');
}
function changueTextFrancia(){
    $("#bienvenida").html('Accueillir');
    $("#calendarioNombre").html('Calendrier');
    $("#topDayNombre").html('Top day');
    $("#glosarioNombre").html('Glossaire');
    $("#hoyNombre").html('hui');
    $("#miPerfilNombre").html('Profil');
    $("#cerraCesion").html('Fermer session');
    $("#idioma").html('Changer langue');
}

   
    