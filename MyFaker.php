<?php

/**
 * fakerをラップするクラス
 */
class MyFaker {

    /** fakerのインスタンス */
    private object $faker;

    public function __construct() {
        $this->faker = Faker\Factory::create();
    }

    /** 名前を生成する */
    public function create_name(): string {
        return $this->faker->name;
    }

    /** 電話番号を生成する */
    public function create_phone_number() {
        return $this->faker->phoneNumber;
    }

    /** メールを生成する */
    public function create_email() {
        return $this->faker->email;
    }

    /** 日付を生成する */
    public function create_date() {
        return $this->faker->date($format='Y-m-d',$max='now');
    }
}