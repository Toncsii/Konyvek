<body>
<div class="container">
    <h1 class="d-flex justify-content-center">Update</h1>
    <table class="table table-bordered bg-light table-dark">
        <thead>
            <th class="text-dark">ID</th>
            <th class="text-dark">Szerző</th>
            <th class="text-dark">Cím</th>
            <th class="text-dark">Év</th>
            <th class="text-dark">Kód</th>
            <th class="text-dark">Oldal</th>
            <th class="text-dark">Téma</th>
            <th class="text-dark">&nbsp;</th>
        </thead>
        <tbody id="lista" class="text-dark"></tbody>
    </table>
</div>

<script>
fetch('http://localhost//20211207pro/server/readKonyv.php')
    .then(response => response.json())
    .then(data => render(data))

function render(data){
//console.log(data)
let tblStr = ''
    for(let obj of data)
        tblStr += `<tr><td>${obj.id}</td><td>${obj.szerzo}</td><td>${obj.cim}</td><td>${obj.ev}</td><td>${obj.kiadokod}</td><td>${obj.oldal}</td><td contenteditable>${obj.tema}</td><td class="btn btn-success" id="${obj.id}" onclick="update(this)">Update</td></tr>`
        document.querySelector('tbody').innerHTML = tblStr
}

function update(obj){
            //console.log(obj.id)
            let id=obj.id    
            let tema = obj.previousElementSibling.textContent
            //console.log(tema)
            fetch(`http://localhost//20211207pro/server/Update.php?id=${id}&tema=${tema}`)
                .then(response => response.text())
                .then(data => console.log(data))
                }
    </script>
</body>