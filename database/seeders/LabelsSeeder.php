<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Label;
use Carbon\Carbon;

class LabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Label::truncate();

        $labels = collect([
            [
                'en' => 'test',
                'ja' => 'テスト',
            ],
            [
                'en' => 'biller',
                'ja' => '請求元',
            ],
            [
                'en' => 'particulars',
                'ja' => '明細書',
            ],
            [
                'en' => 'amount',
                'ja' => '数量',
            ],
            [
                'en' => 'status',
                'ja' => '決済状況',
            ],
            [
                'en' => 'pending',
                'ja' => '未決済',
            ],
            [
                'en' => 'paid',
                'ja' => '済み',
            ],
            [
                'en' => 'submit',
                'ja' => '確認',
            ],
            [
                'en' => 'card number',
                'ja' => 'カード番号',
            ],
            [
                'en' => 'expiration date',
                'ja' => '有効期限',
            ],
            [
                'en' => 'name on card',
                'ja' => 'カードの名前',
            ],
            [
                'en' => 'name on card',
                'ja' => 'カードの名前',
            ],
            [
                'en' => 'security code',
                'ja' => 'セキュリティコード',
            ],
            [
                'en' => 'save card',
                'ja' => 'カードを保存',
            ],
            [
                'en' => 'invoice no.',
                'ja' => '請求書番号。',
            ],
            [
                'en' => 'card details',
                'ja' => 'カードの詳細',
            ],
            [
                'en' => 'card error',
                'ja' => 'カードエラー',
            ],
            [
                'en' => 'invalid card',
                'ja' => '無効なカード',
            ],
            [
                'en' => 'login to all payment',
                'ja' => 'allpaymentにログインします',
            ],
            [
                'en' => 'email address',
                'ja' => 'イーメールアドレス',
            ],
            [
                'en' => 'password',
                'ja' => 'パスワード',
            ],
            [
                'en' => 'forgot password?',
                'ja' => 'パスワードを再設定する',
            ],
            [
                'en' => 'register a new account',
                'ja' => '新しいアカウントを登録する',
            ],
            [
                'en' => 'login',
                'ja' => 'ログインする',
            ],
            [
                'en' => 'pay as guest',
                'ja' => 'ゲストとして支払う',
            ],
            [
                'en' => 'name',
                'ja' => '名前',
            ],
            [
                'en' => 'confirm password',
                'ja' => 'パスワードの確認',
            ],
            [
                'en' => 'existing account',
                'ja' => '既存のアカウント',
            ],
            [
                'en' => 'register',
                'ja' => '登録',
            ],
        ]);

        Label::insert(
            $labels->map(function($label) use ($now) {
                return array_merge(
                    $label,
                    [
                        'created_at' => $now,
                        'updated_at' => $now,
                    ],
                );
            })->toArray()
        );
    }
}
