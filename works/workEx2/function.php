<?php

// 関数1: 生徒の平均点を計算する
// 点数の配列を受け取り、平均点を返す関数
function calcAverage($scores)
{
    // ここにコードを追記
    if (empty($scores)) {
        return 0;
    }

    return array_sum($scores) / count($scores);
}

// 関数2: 平均点から成績を返す
// 90以上: "優"
// 70以上90未満: "良"
// 50以上70未満: "可"
// 50未満: "不可"
function getGrade($average)
{
    // ここにコードを追記
    if ($average >= 90) {
        return "優";
    } elseif ($average >= 70) {
        return "良";
    } elseif ($average >= 50) {
        return "可";
    } else {
        return "不可";
    }
}

// 関数3: 合格者のみを返す
// 生徒の配列を受け取り、平均点が60以上の生徒のみの配列を返す関数
// ※ calcAverage関数を使うこと
function getPassedStudents($students)
{
    // ここにコードを追記
    $passedStudents = [];

    foreach ($students as $student) {
        // 各生徒の点数（scores）から平均点を計算
        $average = calcAverage($student['scores']);

        // 平均点が60点以上の場合、合格者リストに追加
        if ($average >= 60) {
            $passedStudents[] = $student;
        }
    }

    return $passedStudents;
}

// 表示用関数(編集しないこと)
function displayStudents($students)
{
    foreach ($students as $student) {
        $avg = calcAverage($student["scores"]);
        $grade = getGrade($avg);
        echo "名前: " . $student["name"] . "\n";
        echo "平均点: " . $avg . "\n";
        echo "成績: " . $grade . "\n";
        echo "------------------\n";
    }
}
