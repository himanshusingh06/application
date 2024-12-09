<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Submission Success</title>
</head>
<body class="bg-gradient-to-br from-green-100 to-teal-300 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-2xl transform transition-all duration-500 hover:scale-105">
        <h1 class="text-2xl font-bold text-green-700 text-center mb-6">Submission Successful</h1>
        <p class="text-lg text-gray-800"><strong>Name:</strong> <?php echo $name; ?></p>
        <p class="text-lg text-gray-800"><strong>Email:</strong> <?php echo $email; ?></p>
        <p class="text-lg text-gray-800"><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p class="text-lg text-gray-800"><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
        <p class="text-lg text-gray-800"><strong>Gender:</strong> <?php echo $gender; ?></p>
        <p class="text-lg text-gray-800"><strong>Address:</strong> <?php echo nl2br($address); ?></p>
        <div class="text-center mt-6">
            <a href="index.php" class="bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 transform transition-transform duration-300 hover:scale-110">
                Fill Another Form
            </a>
        </div>
    </div>
</body>
</html>
