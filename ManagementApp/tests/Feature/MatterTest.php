<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MatterTest extends TestCase
{
    /**
     * @test
     * 
     */
    public function 一覧を表示()
    {
        $response = $this->get('/matters');
        $response->assertViewIs('Matter.index'); // View のテンプレートパスをチェック
        $response->assertViewHas('matters'); // View に変数が渡っているかをチェック
        $response->assertStatus(200);
    }
    /**
     * @test
     * 
     */
    public function 詳細を表示()
    {
        $response = $this->get('/matters/1');
        $response->assertViewIs('Matter.show'); // View のテンプレートパスをチェック
        $response->assertViewHas('matter'); // View に変数が渡っているかをチェック
        $response->assertStatus(200);
    }
    /**
     * @test
     * 
     */
    public function 詳細を確認()
    {
        $response = $this->get('/matters/1');
        $response->assertViewHas('matter.id','1');
        $response->assertViewHas('matter.title','鳥捕とりは高く星あか。');
        $response->assertViewHas('matter.url','http://www.ekoda.net/');
        $response->assertViewHas('matter.content','だれもいってしばらのようなんに来た鷺さぎながら、とう蕈きの蠍さそりはこおっとそれをおしてかけているか、と思いました。天上へさえぎられる鳥よりもとれないふりました。カムパネルラがするところがよく見え、河かわぎがあい悪わるいはいました。そして叫さけびました。「ええ、蠍さそりのように、くっと消きえたり鳥」その時向むこうの子はハンケチを顔にあのブルの足もとめてだわ、もうこの本を読むひまもなくすかなし）と。');
        $response->assertViewHas('matter.attention','乗のってながら暗くらいだ。けれど。');
        $response->assertViewHas('matter.created_at','2021-07-04 21:26:02');
        $response->assertViewHas('matter.updated_at','2021-07-04 21:26:02');
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     */
    public function 新規作成画面を表示()
    {
        $response = $this->get('/matters/create');
        $response->assertViewIs('Matter.create'); // View のテンプレートパスをチェック
        $response->assertStatus(200);
    }

}
