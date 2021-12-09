fetch('http://localhost//20211207pro/server/readKonyv.php')
    .then(response => response.json())
    .then(data => render(data))
    
function render(data){
    //console.log(data)
    let tblStr = ''
    for(let obj of data)
        tblStr += `<tr><td>${obj.id}</td><td>${obj.szerzo}</td><td>${obj.cim}</td><td>${obj.ev}</td><td>${obj.kiadokod}</td><td>${obj.oldal}</td><td>${obj.tema}</td></tr>`
        document.querySelector('tbody').innerHTML = tblStr
} 