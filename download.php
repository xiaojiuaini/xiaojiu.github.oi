
<!DOCTYPE html>
<html>
<head>
    <title><?php echo "XX����"; ?></title>
</head>
<body>
    <h1>XX����</h1>
    <h1>�ļ�����</h1>
    <h1>�һ�����������ճ����������</h1>
    <?php
    $files = glob("file/*");

    foreach ($files as $file) {
        echo '<a href="' . $file . '">' . basename($file) . '</a><br>';
    }
    ?>
</body>
</html>
