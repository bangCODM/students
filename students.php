<!DOCTYPE html>
<html>
<head>
    <title>студенты</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>студенты</h1>

    <div class="tablenav">
        <button onclick="showForm('новыйстудент')">Добавить студента</button>
        <button onclick="showForm('редстудент')">Редактировать студента</button>
        <button onclick="showForm('удалстудент')">Удалить студента</button>
    </div>

    <div id="новыйстудент" class="form">
        <h2>Добавить студента</h2>
        <form action="insert.php" method="post">
            <input type="int" name="id" placeholder="id" required>
            <input type="text" name="fio" placeholder="fio" required>
            <input type="text" name="gender" placeholder="gender" required>
            <input type="date" name="birthdate" required>
            <input type="text" name="address" placeholder="address" required>
            <input type="text" name="phone" placeholder="phone" required>
            <input type="text" name="parents" placeholder="parents" required>
            <input type="text" name="phone_parents" placeholder="phone_parents" required>
            <input type="text" name="course" placeholder="course" required>
            <input type="text" name="group" placeholder="group" required>
            <input type="text" name="specialty" placeholder="specialty" required>
            <input type="text" name="departament" placeholder="departament" required>
            <input type="text" name="funding" placeholder="funding" required>
            <input type="date" name="admission_year" required>
            <input type="date" name="graduation_year" required>
            <input type="text" name="student_id" placeholder="student_id" required>
            <input type="submit" value="Добавить студента">
        </form>
    </div>

    <div id="редстудент" class="form">
        <h2>Редактировать студента</h2>
        <form action="update.php" method="post">
            <input type="int" name="id" placeholder="id" required>
            <input type="text" name="fio" placeholder="fio" required>
            <input type="text" name="gender" placeholder="gender" required>
            <input type="date" name="birthdate" required>
            <input type="text" name="address" placeholder="address" required>
            <input type="text" name="phone" placeholder="phone" required>
            <input type="text" name="parents" placeholder="parents" required>
            <input type="text" name="phone_parents" placeholder="phone_parents" required>
            <input type="text" name="course" placeholder="course" required>
            <input type="text" name="group" placeholder="group" required>
            <input type="text" name="specialty" placeholder="specialty" required>
            <input type="text" name="departament" placeholder="departament" required>
            <input type="text" name="funding" placeholder="funding" required>
            <input type="date" name="admission_year" placeholder="admission_year" required>
            <input type="date" name="graduation_year" placeholder="graduation_year" required>
            <input type="text" name="student_id" placeholder="student_id" required>
            <input type="submit" value="Обновить студента">
        </form>
    </div>

    <div id="удалстудент" class="form">
        <h2>Удалить студента</h2>
        <form action="delete.php" method="post">
            <input type="int" name="id" required>
            <input type="submit" value="Удалить студента">
        </form>
    </div>

    <script>
        function showForm(formId) {
            document.getElementById(formId).style.display = 'block';
        }
    </script>
</body>
</html>