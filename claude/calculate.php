<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>상속세 계산기 - 입력</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 200px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>상속세 계산기 - 입력</h1>
    <form action="calculate_result.php" method="post">
        <?php
        // 선택한 입력 항목 가져오기
        $selected_inputs = isset($_POST['inputs']) ? $_POST['inputs'] : [];

        // 입력 항목 배열
        $input_fields = array(
            "피상속인 재산" => "피상속인 재산 가액을 입력하세요.",
            "피상속인 부채" => "피상속인 부채 금액을 입력하세요.",
            "상속인 수" => "상속인 수를 입력하세요.",
            "상속 재산가액" => "상속 재산가액을 입력하세요.",
            "과세표준" => "과세표준 금액을 입력하세요.",
            "세율" => "세율(%)을 입력하세요.",
            "세액공제" => "세액공제 금액을 입력하세요.",
            "납부세액" => "납부세액을 입력하세요.",
            "영년가산세" => "영년가산세 금액을 입력하세요.",
            "자진납부세액" => "자진납부세액을 입력하세요."
        );

        // 선택한 입력 항목만 출력
        foreach ($input_fields as $field => $label) {
            if (in_array($field, $selected_inputs)) {
                echo '<div class="input-group">';
                echo '<label for="' . $field . '">' . $label . '</label>';
                echo '<input type="text" id="' . $field . '" name="' . $field . '">';
                echo '</div>';
            }
        }
        ?>
        <div style="text-align: center;">
            <button type="submit">계산하기</button>
        </div>
    </form>
</body>
</html>