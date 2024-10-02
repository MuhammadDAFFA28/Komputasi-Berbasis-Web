<?php
$nama = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$hobi = isset($_POST['Hobi']) ? $_POST['Hobi'] : '';
$jenis_kelamin = isset($_POST['JenisKelamin']) ? $_POST['JenisKelamin'] : '';
$tanggal_lahir = isset($_POST['dob']) ? $_POST['dob'] : '';

switch ($hobi) {
    case 'Sepak Bola':
        $hobi_text = 'Football';
        break;
    case 'Badminton':
        $hobi_text = 'Badminton';
        break;
    case 'Basket':
        $hobi_text = 'Basketball';
        break;
    default:
        $hobi_text = 'Tidak ada hobi yang dipilih';
}

$jenis_kelamin_text = ($jenis_kelamin === 'Male') ? 'Male' : 'Female';

?>

<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hasil Input Data Diri</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Hasil Input Data Diri</h2>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> <?php echo htmlspecialchars($nama); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Hobby:</strong> <?php echo htmlspecialchars($hobi_text); ?></p>
                <p><strong>Gender:</strong> <?php echo htmlspecialchars($jenis_kelamin_text); ?></p>
                <p><strong>Date Of Birth:</strong> <?php echo htmlspecialchars($tanggal_lahir); ?></p>
            </div>
            <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning float-right">Back</button>
                    </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
