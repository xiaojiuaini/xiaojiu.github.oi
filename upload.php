<?php
$targetDir = "file/";
$targetFile = $targetDir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "�ļ��ϴ��ɹ�";
} else {
    echo "�ļ��ϴ�ʧ��ԭ���Ҳ�֪��";
}
?>
