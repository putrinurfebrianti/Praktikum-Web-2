<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: skyblue;">
    <div class="container">
        <h2 align="center">Form Nilai Ujian</h2>
        <hr style="width: 50%; margin-top: 10px; margin-bottom: 20px; border-style: solid; border-width: 2px;">
        <form method="POST" action="classtugas.php" style="max-width: 400px; margin: 0 auto;">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="text" name="text" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Pilih MK</label> 
                <div class="col-8">
                    <select id="select" name="select" class="custom-select">
                        <option value="dw">Data Warehouse</option>
                        <option value="pw">Pemrograman Web</option>
                        <option value="bd">Basis Data</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                    <input id="number" name="number" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
