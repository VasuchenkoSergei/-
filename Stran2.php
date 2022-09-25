<?php
    $arr=['five','four','three','two','one'];
    function generatestring(array $arr) {
        $html= '<ul>';
        foreach ($arr as $value) {
            $html .= "<h3><li>$value</li></h3>";
        }
        $html .= '</ul>';
        return $html;
    }
    echo generatestring($arr);
    ?>

<html>
<head>

</head>
<body>
    <form action="server.php" method="POST" enctype="multitaip/form-data">
        <h1>Count</h1>        
    </form>
</html>