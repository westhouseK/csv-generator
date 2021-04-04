<?php

/**
 * CSVのテストデータを扱うクラス
 */
class Csv {

    /** ファイル操作のインスタンス */
    private object $file_object;

    /** csvのヘッダー */
    private array $header = [];

    /** 生成したいレコード数 */
    private int $records = 0;

    public function __construct(object $file_object) {
        $this->file_object = $file_object;
    }

    /** ヘッダーをセットする */
    public function set_header(array $header): object {
        $this->header = $header;
        return $this;
    }

    /** レコード数をセットする */
    public function set_records(int $records): object {
        $this->records = $records;
        return $this;
    }

    /** ヘッダーを保存する */
    public function create_header(): void {
        $this->file_object->fputcsv($this->header);
    }

    /** コンテンツを保存する */
    public function create_test_data(object $creater) {

        for($i = 0; $i < $this->records; $i++) {
            $contents = [];
            $contents[] = $creater->create_name();
            $contents[] = $creater->create_phone_number();
            $contents[] = $creater->create_email();
            $contents[] = $creater->create_date();

            $this->file_object->fputcsv($contents);
        }
    }
}