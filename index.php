<!doctype html>
<html>

<head>
<!-- FETCH ERROR

<script>

function searchpkm() {

  fetch('https://pokeapi.co/api/v2/pokemon/1', {
    method: 'get'
}).then(function(response) {
    return response.json()

})
.then(data => {
    console.log(data)
    
  })
.catch(function(err) {
    // Error :(
});

</script> 

-->
<style>

tbody{display:none;}

p{
    margin: 0;
    display: inline-block;
}

body{
    background-image: url('https://i.pinimg.com/originals/1d/a9/01/1da9012381ecbfbfdb455740ad29c9d8.jpg');
    background-repeat:no-repeat;
    background-size:cover;
}

h1{
    text-align:center;
}

.searchpkmn, .pkmresult{
    margin:0 auto;
    max-width:50%;
}

.searchpkmn{
    margin-top:5%;
}

.pkmresult{
    background-color: rgb(255,255,255,0.4);
    text-align:center;
    padding:20px;
    margin-top:20px;
}

.pkmdetails{
    margin-top: 20px;
    display: block;
}

.pkmdetails img{
    min-width:120px;
}

.pkmdetails span:not(.result){
    font-weight:800;
}

.result::first-letter {
    text-transform:uppercase;
}

.center{
    display:block;
text-align:center;
font-weight:800;
}

</style>
    <title>Trouve ton pokemon</title>

</head>

<body>
    <div class="searchpkmn">
<h1>Trouve ton Pokémon !</h1>
        <form name="pkmform">
        <div class="center">
            <input id="search" name="search" type="text" placeholder="ID du pokémon">
            <input class="button" onclick="searchpkm();" type="submit" value="GO !">
        </div>
        </form>
    </div>

    <?php
    $json = file_get_contents('https://pokeapi.co/api/v2/pokemon/'.$_GET['search']);
    $obj = json_decode($json);
    $nom = $obj->name;
    $img1 = $obj->sprites->front_default;
    $img2 = $obj->sprites->front_shiny;
    $weight = $obj->weight;

    echo "<div class='pkmresult'>";
    echo "<span class='pkmdetails'><span>Nom du pokémon (en):</span> <p class='result'>".$nom."</p></span>";
    echo "<span class='pkmdetails'><span>Poids du pokémon:</span> ".$weight." livres</span>";
    echo "<span class='pkmdetails'><span>Photo du pokémon normal:</span><br> <img src='$img1'></span>";
    echo "<span class='pkmdetails'><span>Photo du pokémon shiny:</span><br> <img src='$img2'></span>";
    echo "</div>";

    ?>

</body>

</html>