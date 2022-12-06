
function validarExt2(){
    var archivoInput2 = document.getElementById('archivoInput2');
    var archivoRuta2 = archivoInput2.value;
    var extPermitidas2 = /(.pdf)$/i;
    if(!extPermitidas2.exec(archivoRuta2)){
        alert('Asegurese de haber seleccionado un PDF');
        archivoInput2.value = '';
        return false;
    }

    else
    {
        //PRevio del PDF
        if (archivoInput2.files && archivoInput2.files[0]) 
        {
            var visor2 = new FileReader();
            visor2.onload = function(e2) 
            {
                document.getElementById('visorArchivo2').innerHTML = 
                '<embed src="'+e2.target.result+'" width="500" height="310" />';
            };
            visor2.readAsDataURL(archivoInput2.files[0]);
        }
    }
}