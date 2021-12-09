<body>
<div class="container">
<h1 class="d-flex justify-content-center">Delete</h1>

<table class="table table-bordered bg-light table-dark">
    <thead>
        <th class="text-dark">ID</th>
        <th class="text-dark">Kiadó</th>
        <th class="text-dark">&nbsp;</th>
    </thead>
    <tbody id="lista" class="text-dark"></tbody>
</table>
</div>

<script>
fetch('http://localhost//20211207pro/server/read.php')
    .then(response => response.json())
    .then(data => render(data))
    
    function render(data){
    let tblStr = ''
    for(let obj of data)
        tblStr += `<tr><td>${obj.kod}</td><td>${obj.nev}</td>
                    <td class="btn btn-danger" id="${obj.kod}" onclick="del(this)">Delete</td></tr>`
        document.querySelector('tbody').innerHTML = tblStr
} 
function del(obj){
    console.log(obj.id)
    fetch(`http://localhost//20211207pro/server/torles.php?kod=${obj.id}`)
        .then(response => response.text())
        .then(data => console.log(data))
        }
</script>
</body>
