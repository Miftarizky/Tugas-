<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$carId = isset($_GET['car_id']) ? htmlspecialchars($_GET['car_id']) : 'xpander'; 
$price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : '0';

 
$cars = [
    'xpander' => ['name' => 'Mitsubishi Xpander', 'type' => 'MPV', 'transmission' => 'Automatic', 'capacity' => '7 orang', 'image' => 'xpander.png'],
    'rush' => ['name' => 'Toyota Rush', 'type' => 'SUV', 'transmission' => 'Manual', 'capacity' => '5 orang', 'image' => 'rush.png'],
    'avanza' => ['name' => 'Toyota Avanza', 'type' => 'MPV', 'transmission' => 'Manual', 'capacity' => '6 orang', 'image' => 'avanza.png'],
    'pajero' => ['name' => 'Mitsubishi Pajero', 'type' => 'SUV', 'transmission' => 'Automatic', 'capacity' => '7 orang', 'image' => 'pajero.png'],
    'civic' => ['name' => 'Honda Civic', 'type' => 'Sedan', 'transmission' => 'Automatic', 'capacity' => '5 orang', 'image' => 'civic.png'],
    'rubicoon' => ['name' => 'Rubicon', 'type' => 'SUV', 'transmission' => 'Manual', 'capacity' => '5 orang', 'image' => 'rubicoon.png']
];

$car = isset($cars[$carId]) ? $cars[$carId] : null;

if (!$car) {
 
    die('Mobil tidak ditemukan.');
}

$imagePath = "images/" . $car['image'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - PT. Bendi Car</title>
    <link rel="stylesheet" href="asset/booking.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Booking Mobil PT. Bendi Car</h1>
        </div>
        <div class="header-content1">
            <a href="dashboard.php" class="btn-secondary">Beranda</a>
        </div>
    </header>

    <div class="container">
        <div class="booking-sidebar">
            <h3>Formulir Booking</h3>
            <form action="dashboard.php" method="POST">
                <label for="pickup-location">Nama:</label>
                <input type="text" id="pickup-Name" name="pickup_Name" required>
                
                <label for="pickup-location">Alamat:</label>
                <input type="text" id="pickup-location" name="pickup_location" required>

                <label for="pickup-date">Tanggal Ambil:</label>
                <input type="date" id="pickup-date" name="pickup_date" required>

                <label for="return-date">Tanggal Kembali:</label>
                <input type="date" id="return-date" name="return_date" required>

                <label for="car-model">Model Mobil:</label>
                <select id="car-model" name="car_model" required>
                    <option value="Toyota Avanza">Pilih Type Mobil</option>
                    <option value="Toyota Rush">Toyota Rush</option>
                    <option value="Toyota Avanza">Toyota Avanza</option>
                    <option value="Mitsubishi Pajero">Mitsubishi Pajero</option>
                    <option value="Honda Civic">Honda Civic</option>
                    <option value="Rubicon">Rubicon</option>
                    <option value="Mitsubishi Xpander">Mitsubishi Xpander</option>
                </select>

                <label for="driver">Sopir:</label>
                <input type="checkbox" id="driver" name="driver"> Dengan Sopir

                <button type="submit" class="btn-primary">Konfirmasi Booking</button>
            </form>
        </div>
        <div class="car-detail">
            <h3>Mobil yang Anda Pilih</h3>
            <img src="<?php echo $imagePath; ?>" alt="Car Image">
            <p class="price">Rp <?php echo number_format($price, 0, ',', '.'); ?> per hari</p>
            <p><strong>Model:</strong> <?php echo $car['name']; ?></p>
            <p><strong>Jenis Mobil:</strong> <?php echo $car['type']; ?> | <strong>Transmisi:</strong> <?php echo $car['transmission']; ?> | <strong>Kapasitas:</strong> <?php echo $car['capacity']; ?></p>

            <form action="dashboard.php" method="POST">
                <input type="hidden" name="car_id" value="<?php echo $carId; ?>">
                <input type="hidden" name="price" value="<?php echo $price; ?>">
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 PT. Bendi Car. All rights reserved.</p>
    </footer>
</body>
</html>
