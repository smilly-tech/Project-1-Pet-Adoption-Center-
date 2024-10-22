<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Pets for Adoption</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 30px;
        }

        .pet-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 1000px;
            width: 100%;
        }

        .pet-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .pet-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .pet-item h2 {
            margin: 15px 0 10px;
            color: #333;
        }

        .pet-item p {
            margin: 10px 0;
        }

        .pet-item a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .pet-item a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Available Pets for Adoption</h1>
    
    <div class="pet-list">
        
        <div class="pet-item">
            <img src="images/bella.jpg" alt="Bella">
            <h2>Bella (Golden Retriever)</h2>
            <p>Type: Dog</p>
            <a href="processorder.php?petId=1">Adopt Bella</a>
        </div>
        <div class="pet-item">
            <img src="images/max.jpg" alt="Max">
            <h2>Max (German Shepherd)</h2>
            <p>Type: Dog</p>
            <a href="processorder.php?petId=2">Adopt Max</a>
        </div>
        <div class="pet-item">
            <img src="images/lucy.jpg" alt="Lucy">
            <h2>Lucy (Poodle)</h2>
            <p>Type: Dog</p>
            <a href="processorder.php?petId=3">Adopt Lucy</a>
        </div>
        <div class="pet-item">
            <img src="images/charlie.jpg" alt="Charlie">
            <h2>Charlie (Labrador Retriever)</h2>
            <p>Type: Dog</p>
            <a href="processorder.php?petId=4">Adopt Charlie</a>
        </div>
        <div class="pet-item">
            <img src="images/rocky.jpg" alt="Rocky">
            <h2>Rocky (Bulldog)</h2>
            <p>Type: Dog</p>
            <a href="processorder.php?petId=5">Adopt Rocky</a>
        </div>
        <div class="pet-item">
            <img src="images/daisy.jpg" alt="Daisy">
            <h2>Daisy (Beagle)</h2>
            <p>Type: Dog</p>
            <a href="processorder.php?petId=6">Adopt Daisy</a>
        </div>
        

        <div class="pet-item">
            <img src="images/luna.jpg" alt="Luna">
            <h2>Luna (Siamese)</h2>
            <p>Type: Cat</p>
            <a href="processorder.php?petId=7">Adopt Luna</a>
        </div>
        <div class="pet-item">
            <img src="images/oliver.jpg" alt="Oliver">
            <h2>Oliver (Bengal)</h2>
            <p>Type: Cat</p>
            <a href="processorder.php?petId=8">Adopt Oliver</a>
        </div>
        <div class="pet-item">
            <img src="images/milo.jpg" alt="Milo">
            <h2>Milo (Persian)</h2>
            <p>Type: Cat</p>
            <a href="processorder.php?petId=9">Adopt Milo</a>
        </div>
        <div class="pet-item">
            <img src="images/leo.jpg" alt="Leo">
            <h2>Leo (Maine Coon)</h2>
            <p>Type: Cat</p>
            <a href="processorder.php?petId=10">Adopt Leo</a>
        </div>
        <div class="pet-item">
            <img src="images/simba.jpg" alt="Simba">
            <h2>Simba (Ragdoll)</h2>
            <p>Type: Cat</p>
            <a href="processorder.php?petId=11">Adopt Simba</a>
        </div>
        <div class="pet-item">
            <img src="images/nala.jpg" alt="Nala">
            <h2>Nala (British Shorthair)</h2>
            <p>Type: Cat</p>
            <a href="processorder.php?petId=12">Adopt Nala</a>
        </div>
    </div>
</body>
</html>
