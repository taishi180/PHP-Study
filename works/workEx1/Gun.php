<?php
class Gun
{

    // ↓フィールド============================
    // 銃の名前
    private $name;
    // 最大装弾数
    private $maxMagazine;
    // 残弾
    private $currentMagazine;

    private $extendedAmount = 0;
    // ↑フィールド============================

    // コンストラクタ
    // 問題1
    function __construct($name, $maxMagazine)
    {
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
        $this->currentMagazine = 0;
    }


    // 現在の状態を表示
    function echoStatus()
    {
        echo "======現在の状態======" . "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================" . "\n";
    }
    private function getMaxMagazineWithExtension()
    {
        return $this->maxMagazine + $this->extendedAmount;
    }

    // リロード
    function reload()
    {
        $currentMax = $this->getMaxMagazineWithExtension();

        if ($this->currentMagazine === $currentMax) {
            echo "リロードの必要はありません\n";
        }
    }

    // 発砲
    function fire()
    {
        if ($this->currentMagazine === 0) {
            echo "リロードしてください\n";
            return;
        }

        $this->currentMagazine--;
        echo $this->name . "を発砲しました。残弾: " . $this->currentMagazine . " 発\n";

        if ($this->currentMagazine === 0) {
            echo "リロードしてください\n";
        }
    }
    // 問題3

    // 拡張マガジンを装着
    function setExtendedMagazine($amount)
    {
        if (!is_int($amount) || $amount <= 0) {
            echo "引数が不正です\n";
            return;
        }
        $this->extendedAmount = $amount;
    }
    // 問題4

    // 拡張マガジンを取外し
    function unsetExtendedMagazine()
    {
        if ($this->extendedAmount === 0) {
            echo "拡張マガジンは装着されていません\n";
            return;
        }

        $this->extendedAmount = 0;

        if ($this->currentMagazine > $this->maxMagazine) {
            $this->reload();
        }
    }
    // 問題4

}
