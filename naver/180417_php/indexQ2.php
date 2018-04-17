<?php
    // Question 1
    // 학생들의 학번, 이름, 국어, 영어, 수학 점수를 담을 클래스를 다음과 정의하고 사용해보시오.
    // - 이 클래스에는 5가지 정보를 저장할 프로퍼티가 public으로 지정되어 있도록 한다.
    // - 이 클래스에는 각 학생에 대한 정보 모두를 한번에 출력하는 메서드 printScore()가 있어야 한다. 이 메서드는 이 학생의 총점과 평균도 출력한다.
    // - 학생 객체는 2개 이상 생성한다.
    // - 각 객체에 정보를 설정할 때에는 직접 각각의 프로퍼티에 접근해서 값들을 채워 넣는다.
    // - 설정된 정보들을 메서드 printScore()를 이용해서 출력한다.

    // Question 2
    // 위의 1번 문제에서 만들어진 프로그램ㅇ르 다음과 같이 수정하시오.
    // - 프로퍼티는 모두 private로 하고 메서드만 public으로 지정한다.
    // - 생성자가 모든 정보를 받아 프로퍼티들의 초기 값으로 설정하도록 수정한다.

    // class
    class StudentInfo {
        private $strStuId;
        private $strName;
        
        private $intSubKoreanScore;
        private $intSubEnglishScore;
        private $intSubMathScore;

        public function __construct($a, $b, $c, $d, $e) {
            $this->strStuId = $a;
            $this->strName = $b;
            $this->intSubKoreanScore = $c;
            $this->intSubEnglishScore = $d;
            $this->intSubMathScore = $e;
        }

        // 학생정보 출력 + 총점 + 평균
        public function printScore(){
            $intScoreSum = $this->intSubKoreanScore + $this->intSubEnglishScore + $this->intSubMathScore;
            $intScoreAvg = round($intScoreSum / 3, 2);

            echo "<br><br>--------- 학생 정보 출력 시작 ---------
                <br>1.학번 : $this->strStuId
                <br>2.이름 : $this->strName
                <br>3.국어 점수 : $this->intSubKoreanScore
                <br>4.영어 점수 : $this->intSubEnglishScore
                <br>5.수학 점수 : $this->intSubMathScore
                <br> # 과목 점수 통계 #
                <br>6. 총점 : $intScoreSum
                <br>7. 평균 : $intScoreAvg 
                <br> --------- 학생 정보 출력 완료 --------- ";
        }
    }
    
    // main
    $StuA = new StudentInfo('2018A0001', '학생A', 15, 20, 30);
    $StuA->printScore();
    
    $StuB = new StudentInfo('2018B0001', '학생B', 90, 92, 72);
    $StuB->printScore();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>네이버지식인 180417</title>
</head>
<body>
    <h1>ㅡㅡㅡㅡㅡㅡ 문제 2 출력 완료 ㅡㅡㅡㅡㅡㅡ</h1>
</body>
</html>