<?php

$matches = array(
    '$_POST[521]',
    '$_($_POST[23])',
    '$_=@$_GET[2]',
    '@$_GET[\'pw\']',
    '@$_REQUEST[\'body\']',
    '$_POST[\'g__g_\']',
    '@preg_replace("/[checksql]/e",$_POST[\'date\'],"saft");'
);

$fileName = $argv[1];

$content = file_get_contents($fileName);

foreach ($matches as $match)
{
    $isFound = strpos($content, $match);

    // 有對照到有問題的字串
    if ($isFound !== false)
    {
        // 檔案移動到隔離區
        system("mkdir -p /var/hacker{$fileName};mv {$fileName}  /var/hacker{$fileName}");

        // 顯示
        echo "mkdir -p /var/hacker{$fileName};mv {$fileName}  /var/hacker{$fileName}";
    }
}
