fetch('http://localhost//20211207pro/server/Filter.php')
    .then(response => response.json())
    .then(data => render(data))
    
function render(data){
    //console.log(data)
    let select = '<option value="0">válasszon ki egy kiadó kódot!</option>'
    for(let obj of data)
        select += `<option value="${obj.kiadokod}">${obj.nev}</option>`
        document.getElementById('lista').innerHTML = select


document.getElementById('lista').addEventListener('change',myFilter)
}

function myFilter(e){
    //console.log(e.target.value)
        fetch(`http://localhost//20211207pro/server/readFilter.php?kiadokod=${e.target.value}`)
            .then(response => response.json())
            .then(data => render2(data))
    }

    function render2(data){
        //console.log(data)
        let tblStr = ''
        for(let obj of data)
            tblStr += `<tr><td>${obj.id}</td><td>${obj.szerzo}</td><td>${obj.cim}</td><td>${obj.ev}</td><td>${obj.kiadokod}</td><td>${obj.oldal}</td><td>${obj.tema}</td></tr>`
            document.querySelector('tbody').innerHTML = tblStr
    } 