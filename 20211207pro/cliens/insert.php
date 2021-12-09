<form action="" class="form-inline d-flex justify-content-center">
    <input type="text" name="" id="nev" class="form-control" placeholder="írd be az új téma nevét">
    <input type="button" onclick="uj()" value="Mentés" class="btn btn-success">
</form>
<div class="msg d-flex justify-content-center"></div>

<script>
    function uj(){
        document.querySelector('.msg').innerHTML=""

        let uj=document.getElementById("nev").value;
        console.log(uj);
        if(uj.length>0){
            fetch(`http://localhost//20211207pro/server/Insert.php?nev=${uj}`)
                .then(response => response.text())
                .then(data => document.querySelector('.msg').innerHTML=data ? "sikeres adatbeíras" : "hiba!")
        }
    }


</script>