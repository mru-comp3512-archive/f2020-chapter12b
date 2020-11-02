<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  
    <title>Lab 12b</title>   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">    
    <link rel="stylesheet" href="css/lab12b-test02.css">
</head>
<body>
    <h1>Fine Art Meme Maker</h1> 
    <section class="grid-container">
        <?php
            // eventually add code to loop throu images
        ?>
    </section>     
    <form action="lab12b-test02.php" method="get">
            <label>Select Base Painting:</label>
            <select name="file">
                <option value="0">Death of Socrates</option>
                <option value="1">The Farewell of Telemachus and Eucharis</option>
                <option value="2">Mr. and Mrs. Andrews</option>
                <option value="3">Luncheon in the Grass</option>
                <option value="4">Liberty Leading the People</option>
                <option value="5">Bacchus and Ariadne</option>
                <option value="6">Interior with Women beside a Linen Cupboard</option>
                <option value="7">Madame de Pompadour</option>
                <option value="8">The Anatomy Lesson of Dr. Nicolaes Tulp</option>
                <option value="9">The Nut Gatherers</option>
            </select>
            <label>Meme 1 Text:</label>
            <input type="text" name="text1" size=50/>
            <label>Meme 1 Font Size:</label>
            12 <input type="range" name="size1" min=12 max=48  value=24 /> 48
            <label>Meme 2 Text:</label>
            <input type="text" name="text2" size=50/>   
            <label>Meme 2 Font Size:</label>
            12 <input type="range" name="size2" min=12 max=48 value=24 /> 48  
            
            <input type="submit" value="Click To See Meme" >
        </form>
   
</body>
</html>