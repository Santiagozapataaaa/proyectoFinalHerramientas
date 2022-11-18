
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
