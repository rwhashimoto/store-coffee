# coffee-store

| サイト             | URL                             |
| ------------------ | -----------------------------  |
| フロントページ      | http://localhost:8000/          |
| WordPress管理ページ | http://localhost:8000/wp-admin  |

| WordPress |  |
| --------- | ----- |
| ID        | admin |
| Password  | admin |

## docker起動
`$ docker-compose up -d`

## docker確認
`$ docker-compose ps`

## docker停止
`$ docker-compose stop`

## docker再起動
`$ docker-compose restart`

## データの共有について
* All-in-One WP Migration
    エクスポート>ファイルで出力したものを/dataに保存
* カスタムフィールド
    ツール > Export Fileで出力したものを/dataに保存
* CPT UI
    ツール > Export Post Types 設定に書かれている内容を/data/cpt-ui.jsonに記載