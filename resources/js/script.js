var menu = document.querySelector('.hamburger');

function toggleMenu (event) {
this.classList.toggle('is-active');
        document.querySelector( ".menuppal" ).classList.toggle("is_active");
        event.preventDefault();
}

menu.addEventListener('click', toggleMenu, false);

// Primer Grado********** Primer Grado********** Primer Grado********** Primer Grado********** Primer Grado********** Primer Grado**********

let hideResourses = () =>{
        document.querySelectorAll('.school-resources').forEach(element => {
                element.classList.add('d-none')
                element.classList.remove('d-block')
        })

}

// Desplegar materias al hacer click en el grado



let subjects = $('#first').click(function(){
        $('#segundo-grado').removeClass('d-block').addClass('d-none');
        $('#tercer-grado').removeClass('d-block').addClass('d-none');

        hideResourses()
        $('#primer-grado').addClass('d-block');
})


$('#second').click(function(){
        $('#primer-grado').removeClass('d-block').addClass('d-none');
        $('#tercer-grado').removeClass('d-block').addClass('d-none');

        hideResourses()
        $('#segundo-grado').addClass('d-block');
})

$('#third').click(function(){
        $('#primer-grado').removeClass('d-block').addClass('d-none');
        $('#segundo-grado').removeClass('d-block').addClass('d-none');

        hideResourses()
        $('#tercer-grado').addClass('d-block');
})

// Recursos ****************

// Primer grado ************************

// Recursos de Biología
$('#biologia-materia').click(function(){

        hideResourses()
        $('#biologia-recursos').addClass(' d-block');        
})
// Recursos de Español
$('#espanol-materia').click(function(){

        hideResourses()
        $('#espanol-recursos').addClass(' d-block');       
})
// Recursos de FCE
$('#fce-materia').click(function(){

        hideResourses()
        $('#fce-recursos').addClass(' d-block');       
})

// Recursos de Geografía
$('#geografia-materia').click(function(){
        
        hideResourses()
        $('#geografia-recursos').addClass(' d-block');       
})
// Recursos de historia
$('#historia-materia').click(function(){
        
        hideResourses()
        $('#historia-recursos').addClass(' d-block');       
})
// Recursos de inglés
$('#ingles-materia').click(function(){
        
        hideResourses()
        $('#ingles-recursos').addClass(' d-block');       
})
// Recursos de Matemáticas
$('#matematicas-materia').click(function(){
        
        hideResourses()
        $('#matematicas-recursos').addClass(' d-block');       
})

// Segundo grado ************************

$('#segundo-espanol-materia').click(function(){
   
        hideResourses()
        $('#segundo-espanol-recursos').addClass(' d-block');      
})

$('#segundo-fce-materia').click(function(){
   
        hideResourses()
        $('#segundo-fce-recursos').addClass(' d-block');      
})

$('#segundo-fisica-materia').click(function(){
   
        hideResourses()
        $('#segundo-fisica-recursos').addClass(' d-block');      
})

$('#segundo-historia-materia').click(function(){
   
        hideResourses()
        $('#segundo-historia-recursos').addClass(' d-block');      
})

$('#segundo-ingles-materia').click(function(){
   
        hideResourses()
        $('#segundo-ingles-recursos').addClass(' d-block');      
})

$('#segundo-matematicas-materia').click(function(){
   
        hideResourses()
        $('#segundo-matematicas-recursos').addClass(' d-block');      
})

// Tercer grado ************************

$('#tercero-espanol-materia').click(function(){
   
        hideResourses()
        $('#tercero-espanol-recursos').addClass(' d-block');      
})

$('#tercero-fce-materia').click(function(){
   
        hideResourses()
        $('#tercero-fce-recursos').addClass(' d-block');      
})

$('#tercero-historia-materia').click(function(){
   
        hideResourses()
        $('#tercero-historia-recursos').addClass(' d-block');      
})

$('#tercero-ingles-materia').click(function(){
   
        hideResourses()
        $('#tercero-ingles-recursos').addClass(' d-block');      
})

$('#tercero-matematicas-materia').click(function(){
   
        hideResourses()
        $('#tercero-matematicas-recursos').addClass(' d-block');      
})

$('#tercero-quimica-materia').click(function(){
   
        hideResourses()
        $('#tercero-quimica-recursos').addClass(' d-block');      
})

// Videos ***************************************************************

// Cambiamos counter para poder condicionar en index que se muestre cada elemento
function first(){
        localStorage.setItem("counter", "1")
}

function second(){
        localStorage.setItem("counter", "2")

}

function third(){
        localStorage.setItem("counter", "3")

}

// console.log(localStorage.getItem("counter"))

let counter = localStorage.getItem("counter")

if(localStorage.getItem("counter") == 1){
        $('#primer-grado').removeClass('d-none').addClass('d-block')
        
        document.getElementById('respuesta-1').checked = true;
        document.getElementById('primero-biologia').checked = true;
} else if(localStorage.getItem("counter") == 2){
        $('#primer-grado').removeClass('d-block').addClass('d-none')
        $('#biologia-recursos').removeClass('d-block').addClass('d-none')

        $('#segundo-espanol-recursos').removeClass('d-none').addClass('d-block')
        $('#segundo-grado').removeClass('d-none').addClass('d-block')

        document.getElementById('respuesta-2').checked = true;
        document.getElementById('segundo-espanol').checked = true;
} else if(localStorage.getItem("counter") == 3){
        $('#primer-grado').removeClass('d-block').addClass('d-none')
        $('#biologia-recursos').removeClass('d-block').addClass('d-none')

        $('#tercero-espanol-recursos').removeClass('d-none').addClass('d-block')
        $('#tercer-grado').removeClass('d-none').addClass('d-block')

        document.getElementById('respuesta-3').checked = true;
        document.getElementById('tercero-espanol').checked = true;
}