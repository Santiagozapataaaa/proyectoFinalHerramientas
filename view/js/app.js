
//-------- Buscar
let btnSearch = document.getElementById('search')
let frmSearch = document.getElementById('frmsearch')

btnSearch.addEventListener('click',()=>{
    if(frmSearch.classList.contains("hidde"))
    {
        frmSearch.classList.add('show')
        frmSearch.classList.remove('hidde')
    }
    else
    {
        frmSearch.classList.add('hidde')
        frmSearch.classList.remove('show')
    }
    
})
//--------------------------------------------------
function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            var filePreview = document.createElement('img');
            filePreview.id = 'file-preview';
            //e.target.result contents the base64 data from the image uploaded
            filePreview.src = e.target.result;
            console.log(e.target.result);

            var previewZone = document.getElementById('file-preview-zone');
            previewZone.appendChild(filePreview);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

var fileUpload = document.getElementById('file-upload');
fileUpload.onchange = function(e) {
    readFile(e.srcElement);
}

//-------------------------------------------------
