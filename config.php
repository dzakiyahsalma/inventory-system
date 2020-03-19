<?php
include('database.php');

if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $nama = mysqli_real_escape_string($database, $_POST['nama']);
    $email = mysqli_real_escape_string($database, $_POST['email']);
    $password_1 = mysqli_real_escape_string($database, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($database, $_POST['password_2']);
    $level = mysqli_real_escape_string($database, $_POST['level']);

    if (empty($username)) {
        array_push($error, "Username is Required");
    }
    if (empty($nama)) {
        array_push($error, "Name is Required");
    }
    if (empty($email)) {
        array_push($error, "Email is Required");
    }
    if (empty($password_1)) {
        array_push($error, "Password is Required");
    }
    if (empty($password_2)) {
        array_push($error, "Password doesn't match");
    }

    $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($database, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($error, "Username is already exists");
        }

        if ($user['email'] === $email) {
            array_push($error, "Email are already exists");
        }
    }

    if (count($error) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO registration (username, nama, email, password, level) VALUES ('$username', '$nama', '$email', '$password', '$level')";
        mysqli_query($database, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $password = mysqli_real_escape_string($database, $_POST['password']);

    if (empty($username)) {
        array_push($error, "Username is required");
    }
    if (empty($password)) {
        array_push($error, "Password is Required");
    }

    if (count($error) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
        $results = mysqli_query($database, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($error, "Wrong username or password");
        }
    }
}

if (isset($_POST['insert'])) {
    $code_unique = mysqli_real_escape_string($database, $_POST['code_unique']);
    $nama_barang = mysqli_real_escape_string($database, $_POST['nama_barang']);
    $location = mysqli_real_escape_string($database, $_POST['location']);
    $date = mysqli_real_escape_string($database, $_POST['date']);
    $id_pic = mysqli_real_escape_string($database, $_POST['id_pic']);
    $nama_pic = mysqli_real_escape_string($database, $_POST['nama_pic']);
    $status = mysqli_real_escape_string($database, $_POST['status']);

    if (empty($code_unique)) {
        array_push($error, "Code is required");
    }
    if (empty($nama_barang)) {
        array_push($error, "Item name is Required");
    }
    if (empty($location)) {
        array_push($error, "Location is required");
    }
    if (empty($date)) {
        array_push($error, "Date is Required");
    }
    if (empty($id_pic)) {
        array_push($error, "ID PIC is required");
    }
    if (empty($nama_pic)) {
        array_push($error, "Name of PIC is Required");
    }
    if (empty($status)) {
        array_push($error, "Status is Required");
    }

    $item_check_query = "SELECT * FROM insertdata WHERE code_unique='$code_unique' LIMIT 1";
    $result = mysqli_query($database, $item_check_query);
    $item = mysqli_fetch_assoc($result);

    if ($item) {
        if ($item['code_unique'] === $code_unique) {
            array_push($error, "Code is already exists");
        }
    }

    if (count($error) == 0) {
        $query = "INSERT INTO insertdata (code_unique, nama_barang, location, date, id_pic, nama_pic, status) VALUES ('$code_unique', '$nama_barang', '$location', '$date', '$id_pic', '$nama_pic', '$status')";
        if (mysqli_query($database, $query)) {
            echo "Item berhasil ditambahkan!";
        } else {
            echo "Error: " . $query . " " . mysqli_error($database);
        }
        header('location: save_data.php');
    }
    mysqli_close($database);
}
