<?php
class User
{

    // ↓フィールド============================
    private int $id;
    private string $name;
    private int $age;
    private string $address;
    // ↑フィールド============================

    // コンストラクタ
    public function __construct(int $id, string $name, int $age, string $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    // idを取得
    public function getId(): int
    {
        return $this->id;
    }

    // 名前を変更
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // 名前を取得
    public function getName(): string
    {
        return $this->name;
    }

    // 年齢を変更(問題2: バリデーションを追加すること)
    public function setAge(int $age): void
    {
        if ($age < 0 || $age > 150) {
            echo "不正な年齢です\n";
            return;
        }
        $this->age = $age;
    }

    // 年齢を取得
    public function getAge(): int
    {
        return $this->age;
    }

    public function setAddress(string $address): void
    {
        if ($address === "") {
            echo "住所を空にはできません\n";
            return;
        }
        $this->address = $address;
    }

    // 【問題1】住所を取得
    public function getAddress(): string
    {
        return $this->address;
    }
    // 問題3
    public function getOlder(): void
    {
        $this->setAge($this->age + 1);
    }
}
