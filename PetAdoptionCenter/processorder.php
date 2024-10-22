<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt a Pet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        input, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
      
        $pets = [
            1 => ["name" => "Bella", "breed" => "Labrador", "type" => "Dog"],
            2 => ["name" => "Max", "breed" => "Beagle", "type" => "Dog"],
            3 => ["name" => "Lucy", "breed" => "Golden Retriever", "type" => "Dog"],
            4 => ["name" => "Charlie", "breed" => "Poodle", "type" => "Dog"],
            5 => ["name" => "Rocky", "breed" => "Bulldog", "type" => "Dog"],
            6 => ["name" => "Daisy", "breed" => "Shiba Inu", "type" => "Dog"],
            7 => ["name" => "Luna", "breed" => "Siamese", "type" => "Cat"],
            8 => ["name" => "Oliver", "breed" => "Bengal", "type" => "Cat"],
            9 => ["name" => "Milo", "breed" => "Persian", "type" => "Cat"],
            10 => ["name" => "Leo", "breed" => "Maine Coon", "type" => "Cat"],
            11 => ["name" => "Simba", "breed" => "Sphynx", "type" => "Cat"],
            12 => ["name" => "Nala", "breed" => "Ragdoll", "type" => "Cat"]
        ];

     
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $petId = $_POST['petId'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

           
            if (array_key_exists($petId, $pets)) {
                $pet = $pets[$petId];

          
                echo "<h1>Thank you, $name!</h1>";
                echo "<p>Your adoption request for <strong>" . $pet['name'] . "</strong> (Breed: " . $pet['breed'] . ", Type: " . $pet['type'] . ") has been submitted.</p>";
                echo "<p>We will contact you soon at <strong>$email</strong> regarding the adoption process.</p>";
            } else {
                echo "<p>Invalid pet selected.</p>";
            }

        } else {
     
            if (isset($_GET['petId'])) {
                $petId = $_GET['petId'];


                if (array_key_exists($petId, $pets)) {
                    $pet = $pets[$petId];
                    echo "<h1>Adopt " . $pet['name'] . "</h1>";
                    echo "<p>You're adopting <strong>" . $pet['name'] . "</strong> (Breed: " . $pet['breed'] . ", Type: " . $pet['type'] . ")</p>";
                } else {
                    echo "<p>Pet not found.</p>";
                }
            } else {
                echo "<p>No pet selected.</p>";
            }

           
            ?>
            <form action="processorder.php" method="POST">
                <input type="hidden" name="petId" value="<?php echo $petId; ?>">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Why do you want to adopt this pet?" required></textarea>
                <input type="submit" value="Submit Adoption Request">
            </form>
        <?php } ?>
    </div>
</body>
</html>
