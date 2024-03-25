<?php 
$query = "select max(id_mes) as mes from realiza where id_cursa=$id_cursa";
$result = mysqli_query($conexion, $query);
while ($row = mysqli_fetch_array($result)) {
    $ultimo_mes = $row['mes'];
}

?>


<div class="meses">
    <div class="mesCard">
        <label for="enero">Enero</label>
        <input class="mesCard--mes" type="checkbox" id="enero" name="enero" value=1 >
    </div>
    
    <div class="mesCard">
        <label for="febrero">Febrero</label>
        <input class="mesCard--mes" type="checkbox" id="febrero" name="febrero" value=2 >
    </div>
    
    <div class="mesCard">
        <label for="marzo">Marzo</label>
        <input class="mesCard--mes" type="checkbox" id="marzo" name="marzo" value=3 >
    </div>
    
    <div class="mesCard">
        <label for="abril">Abril</label>
        <input class="mesCard--mes" type="checkbox" id="abril" name="abril" value=4 >
    </div>
    
    <div class="mesCard">
        <label for="mayo">Mayo</label>
        <input class="mesCard--mes" type="checkbox" id="mayo" name="mayo" value=5 >
    </div>
    
    <div class="mesCard">
        <label for="junio">Junio</label>
        <input class="mesCard--mes" type="checkbox" id="junio" name="junio" value=6 >
    </div>
    
    <div class="mesCard">
        <label for="julio">Julio</label>
        <input class="mesCard--mes" type="checkbox" id="julio" name="julio" value=7 >
    </div>
    
    <div class="mesCard">
        <label for="agosto">Agosto</label>
        <input class="mesCard--mes" type="checkbox" id="agosto" name="agosto" value=8 >
    </div>
    
    <div class="mesCard">
        <label for="septiembre">Septiembre</label>
        <input class="mesCard--mes" type="checkbox" id="septiembre" name="septiembre" value=9>
    </div>
    
    <div class="mesCard">
        <label for="octubre">Octubre</label>
        <input class="mesCard--mes" type="checkbox" id="octubre" name="octubre" value=10 >
    </div>
    
    <div class="mesCard">
        <label for="noviembre">Noviembre</label>
        <input class="mesCard--mes" type="checkbox" id="noviembre" name="noviembre" value=11 >
    </div>

    <div class="mesCard">
        <label for="diciembre">Diciembre</label>
        <input class="mesCard--mes" type="checkbox" id="diciembre" name="diciembre" value=12 >
    </div>
</div>
<style>
.meses {
    display: flex;
    justify-content: space-evenly;
 
}

.mesCard {
    display:flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: auto;
}

.mesCard > label {
    user-select: none!important;
    z-index: 5;
    display:flex;
}

.mesCard--mes {
    z-index: 10;
    position: absolute;
    transition: .5s;
    appearance: none;
    width: 5.5vw;
    height: 5vh;
    border: 1px solid #777;
    border-radius: 10px;
}
.mesCard--mes:checked {
    transition: .5s;
    background-color: #2085e5;
}

.mesCard--mes:disabled {
    transition: .5s;
    background-color: #999;
}
</style>

<script>
setTimeout(() => {
    const $num = document.querySelectorAll('#num');

    let index = 0

    for ($estudiante of $num){
        const $meses = $estudiante.children[2].children[0].children

        let $mesesPagados = []
        for($mes of $meses){
            if ($mes.classList.contains('active')) {
                $mesesPagados.push($mes)
            }
        }
        //console.log($estudiante)
        //console.log($mesesPagados)


        // meses de los modales
        let $mesesCard = []
        $modales = document.querySelectorAll(".modal")
        for (modal of $modales){
            $mesesCard.push(modal.children[0].children[0].children[1].children[8].children[0].children[0].children)
        }

        
        
        $mesesPagados.forEach($mesPagado => {
            for ($mesCard of $mesesCard[index]) {
                if ($mesPagado.textContent == $mesCard.children[1].value){
                    $mesCard.children[1].disabled = true
                }
            }          
        })
        index++
    }           
}, 1);
</script>