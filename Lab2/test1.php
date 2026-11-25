<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 20px;
        }

        /* ===== Menu ===== */
        nav {
            background: rgb(4, 40, 94);
            margin-bottom: 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav li {
            flex: 1;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }

        nav li:hover {
            background: #084298;
        }

        /* ===== Bài 2: danh sách môn học ===== */
        .s1 {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: .3s;
        }

        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }

        /* ===== Bài 3: danh sách sinh viên ===== */
        .s2 {
            width:100%;
            margin: 30px auto;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .s2 h3 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }

        .s2 th,
        .s2 td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }

        .s2 th {
            background: #0d6efd;
            color: #fff;
        }

        .s2 tbody tr:nth-child(even) {
            background: #f8f9fa;
        }

        .s2 tbody tr {
            transition: .3s;
        }

        .s2 tbody tr:hover {
            background: #cfe2ff;
        }

        /* ===== Bài 4: form đăng ký ===== */
        .s3 {
            width:100%;
            margin: 30px auto;
            background: #fff;
            padding: 20px 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .s3 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .s3 .group {
            margin-bottom: 15px;
        }

        .s3 .group > label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .s3 input[type="text"],
        .s3 select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 14px;
            transition: .3s;
        }

        .s3 input[type="text"]:focus,
        .s3 select:focus {
            outline: none;
            border-color: #0d6efd;
            box-shadow: 0 0 5px rgba(13, 110, 253, 0.4);
        }

        .s3 .options label {
            display: inline-block;
            margin-right: 15px;
            font-weight: normal;
            cursor: pointer;
        }

        .s3 button {
            width: 100%;
            padding: 12px;
            background: #0d6efd;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        .s3 button:hover {
            background: #084298;
        }
    </style>
</head>

<body>
    <?php
    // Mảng menu
    $menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];

    // Mảng môn học (một chiều)
    $subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];

    // Mảng sinh viên (nhiều chiều)
    $students = [
        ["id" => "SV001", "name" => "Nguyễn Văn An", "gender" => "Nam", "class" => "CNTT1"],
        ["id" => "SV002", "name" => "Trần Thị Bình", "gender" => "Nữ",  "class" => "CNTT2"],
        ["id" => "SV003", "name" => "Lê Văn Cường",  "gender" => "Nam", "class" => "CNTT1"],
        ["id" => "SV004", "name" => "Phạm Thị Dung", "gender" => "Nữ",  "class" => "CNTT3"],
    ];

    // ===== Bài 4 =====
    // Khoa: mảng chỉ số
    $faculties = [
        "Công nghệ thông tin",
        "Quản trị kinh doanh",
        "Kế toán",
        "Ngôn ngữ Anh"
    ];

    // Lớp: mảng kết hợp
    $classes = [
        "A1" => "CNTT1",
        "A2" => "CNTT2",
        "A3" => "CNTT3",
        "A4" => "CNTT4"
    ];

    // Giới tính: mảng chỉ số
    $genders = ["Nam", "Nữ", "Khác"];

    // Sở thích: mảng kết hợp
    $hobbies = [
        "LT" => "Lập trình",
        "DS" => "Đọc sách",
        "AN" => "Âm nhạc",
        "DL" => "Du lịch",
        "TT" => "Thể thao"
    ];
    ?>

    <!-- ===== Menu ===== -->
    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href="#"><?= $menu ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <!-- ===== Bài 2 ===== -->
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php
            foreach ($subjects as $subject) {
                echo "<li>$subject</li>";
            }
            ?>
        </ul>
    </section>

    <!-- ===== Bài 3 ===== -->
    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1; ?>
                <?php foreach ($students as $student) { ?>
                    <tr>
                        <td><?= $stt++ ?></td>
                        <td><?= $student["id"] ?></td>
                        <td><?= $student["name"] ?></td>
                        <td><?= $student["gender"] ?></td>
                        <td><?= $student["class"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

    <!-- ===== Bài 4 ===== -->
    <section class="s3">
        <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
        <form action="#" method="post">

            <!-- Họ và tên -->
            <div class="group">
                <label for="fullname">Họ và tên</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên">
            </div>

            <!-- Khoa: select từ mảng chỉ số -->
            <div class="group">
                <label for="faculty">Khoa</label>
                <select id="faculty" name="faculty">
                    <?php foreach ($faculties as $faculty) { ?>
                        <option value="<?= $faculty ?>"><?= $faculty ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- Lớp: select từ mảng kết hợp -->
            <div class="group">
                <label for="class">Lớp</label>
                <select id="class" name="class">
                    <?php foreach ($classes as $key => $value) { ?>
                        <option value="<?= $key ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- Giới tính: radio từ mảng chỉ số -->
            <div class="group">
                <label>Giới tính</label>
                <div class="options">
                    <?php foreach ($genders as $gender) { ?>
                        <label>
                            <input type="radio" name="gender" value="<?= $gender ?>"> <?= $gender ?>
                        </label>
                    <?php } ?>
                </div>
            </div>

            <!-- Sở thích: checkbox từ mảng kết hợp -->
            <div class="group">
                <label>Sở thích</label>
                <div class="options">
                    <?php foreach ($hobbies as $key => $value) { ?>
                        <label>
                            <input type="checkbox" name="hobbies[]" value="<?= $key ?>"> <?= $value ?>
                        </label>
                    <?php } ?>
                </div>
            </div>

            <button type="submit">Đăng ký</button>
        </form>
    </section>
</body>

</html>