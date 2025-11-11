<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>University Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    h2 {
        text-align: center;
        color: brown;
    }
    form {
        border: 1px solid #000;
        padding: 15px;
        width: 90%;
        margin: 0 auto;
    }
    label {
        font-weight: bold;
    }
    input[type=text], input[type=email], input[type=date], select, textarea {
        padding: 4px;
        margin-top: 4px;
        border: 1px solid #aaa;
        border-radius: 3px;
    }
    table {
        width: 100%;
    }
    td {
        vertical-align: top;
        padding: 5px;
    }
    input[type=submit], input[type=reset] {
        background: #f5f5f5;
        padding: 6px 14px;
        border: 1px solid #999;
        font-weight: bold;
        cursor: pointer;
    }
    input[type=submit]:hover, input[type=reset]:hover {
        background: #ddd;
    }
</style>
</head>
<body>
    <h1>ID: C1220696</h1>
    <h1>Name: Ahmednor Mahad Ahmed</h1>
    <h1>Class: CA226</h1>

<h2>University Registration Form</h2>

<form method="POST" enctype="multipart/form-data">
<table>
<tr>
    <td>
        <label>First name:</label>
        <input type="text" name="fname" placeholder="first name">
        <label>Middle name:</label>
        <input type="text" name="mname" placeholder="middle name">
        <label>Last name:</label>
        <input type="text" name="lname" placeholder="Last name">
        <br><br>
        <label>Faculties</label> <input type="checkbox" id="selectAll" onclick="toggleAll(this)"> select all <br>
        <input type="checkbox" name="faculty[]" value="Faculty of Computing">Faculty of Computing<br>
        <input type="checkbox" name="faculty[]" value="Faculty of Management Sciences">Faculty of Management Sciences<br>
        <input type="checkbox" name="faculty[]" value="Faculty of Medicine">Faculty of Medicine<br>
        <input type="checkbox" name="faculty[]" value="Faculty of Education">Faculty of Education<br>
        <input type="checkbox" name="faculty[]" value="Faculty of Social Sciences">Faculty of Social Sciences<br>
        <input type="checkbox" name="faculty[]" value="Faculty of Economics">Faculty of Economics<br>
        <input type="checkbox" name="faculty[]" value="Faculty of Accountancy">Faculty of Accountancy<br>
        <input type="checkbox" name="faculty[]" value="Faculty of Law">Faculty of Law<br><br>

        <label>Attach your passport size photo (maximum 2MB only jpg or png):</label><br>
        <input type="file" name="passport"><br><br>

        <label>Upload secondary certificate (pdf format):</label>
        <input type="file" name="secondary"><br><br>

        <label>Upload birth certificate (pdf format):</label>
        <input type="file" name="birth"><br><br>

        <label>Upload registration fee receipt (pdf format):</label>
        <input type="file" name="receipt"><br><br>

        <label>Upload cover letter (pdf format):</label>
        <input type="file" name="cover"><br><br>
    </td>

    <td>
        <label>Pin code:</label>
        <input type="text" name="pincode"><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female<br><br>

        <label>Marital status:</label>
        <input type="radio" name="status" value="Single">Single
        <input type="radio" name="status" value="Married">Married<br><br>

        <label>Secondary school:</label>
        <select name="school">
            <option value="Imam Shafici">Imam Shafici</option>
            <option value="Al-Huda">Al-Huda</option>
            <option value="Amoud">Amoud</option>
        </select><br><br>

        <label>Place of birth:</label>
        <select name="birthplace">
            <option value="Muqdisho">Muqdisho</option>
            <option value="Hargeisa">Hargeisa</option>
            <option value="Kismayo">Kismayo</option>
        </select><br><br>

        <label>Residencies:</label>
        <select name="residency">
            <option value="Warta Nabadda">Warta Nabadda</option>
            <option value="Wadajir">Wadajir</option>
            <option value="Hodan">Hodan</option>
        </select><br><br>

        <label>Graduation Year:</label>
        <input type="date" name="gradyear"><br><br>

        <label>Sponsorship:</label>
        <input type="radio" name="sponsor" value="Yes">Yes
        <input type="radio" name="sponsor" value="No">No<br><br>

        <label>Upload sponsor letter (pdf format):</label>
        <input type="file" name="sponsorletter"><br><br>

        <label>Please provide suggestion or comment:</label><br>
        <textarea name="comment" cols="40" rows="6" placeholder="Sir/Madam"></textarea><br><br>
    </td>
</tr>
</table>

<center>
    <input type="reset" value="Clear form">
    <input type="submit" name="register" value="Register">
</center>
</form>

<script>
function toggleAll(source) {
    checkboxes = document.getElementsByName('faculty[]');
    for(var i=0; i<checkboxes.length; i++) {
        checkboxes[i].checked = source.checked;
    }
}
</script>

<?php

if (isset($_POST['register'])) {
    echo "<h3>Submitted Data:</h3>";
    $fname = strtoupper($_POST['fname']);
    $lname = strtoupper($_POST['lname']);
    $mname = strtoupper($_POST['mname']);
    echo "Full Name: $fname $mname $lname<br>";
    echo "Gender: " . ($_POST['gender'] ?? 'Not selected') . "<br>";
    echo "Marital Status: " . ($_POST['status'] ?? 'Not selected') . "<br>";
    echo "Faculty: " . implode(", ", $_POST['faculty'] ?? []) . "<br>";
    echo "Place of Birth: " . ($_POST['birthplace'] ?? '') . "<br>";
    echo "Residency: " . ($_POST['residency'] ?? '') . "<br>";
    echo "Graduation Year: " . ($_POST['gradyear'] ?? '') . "<br>";
    echo "Sponsorship: " . ($_POST['sponsor'] ?? '') . "<br>";
    echo "Comment: " . htmlspecialchars($_POST['comment']) . "<br>";

    // File upload validation
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) mkdir($uploadDir);

    function uploadFile($fileField, $allowedExt, $maxSize, $uploadDir) {
        $file = $_FILES[$fileField];
        $name = $file['name'];
        $tmp = $file['tmp_name'];
        $size = $file['size'];
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        $path = $uploadDir . basename($name);

        if (empty($name)) return;
        if (!in_array($ext, $allowedExt)) {
            echo "<p style='color:red;'>Invalid file type for $name</p>";
            return;
        }
        if ($size > $maxSize) {
            echo "<p style='color:red;'>$name exceeds maximum size</p>";
            return;
        }
        if (file_exists($path)) {
            echo "<p style='color:red;'>$name already exists</p>";
            return;
        }
        move_uploaded_file($tmp, $path);
        echo "<p style='color:green;'>$name uploaded successfully!</p>";
    }

    uploadFile("passport", ["jpg","png"], 2000000, $uploadDir);
    uploadFile("secondary", ["pdf"], 2000000, $uploadDir);
    uploadFile("birth", ["pdf"], 2000000, $uploadDir);
    uploadFile("receipt", ["pdf"], 2000000, $uploadDir);
    uploadFile("cover", ["pdf"], 2000000, $uploadDir);
    uploadFile("sponsorletter", ["pdf"], 2000000, $uploadDir);
}
?>
</body>
</html>