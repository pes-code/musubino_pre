<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prototype</title>
</head>
<style>
    .hope_title {
        display: flex;
        justify-content: center;
    }

    .hope_text {
        display: flex;
        justify-content: center;
    }

    .text1 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item1:hover+.text1 {
        display: block;
    }

    .text2 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item2:hover+.text2 {
        display: block;
    }

    .text3 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item3:hover+.text3 {
        display: block;
    }

    .text4 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item4:hover+.text4 {
        display: block;
    }

    .text5 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item5:hover+.text5 {
        display: block;
    }

    .text6 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item6:hover+.text6 {
        display: block;
    }

    .text7 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item7:hover+.text7 {
        display: block;
    }

    .text8 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item8:hover+.text8 {
        display: block;
    }

    .text9 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item9:hover+.text9 {
        display: block;
    }

    .text10 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item10:hover+.text10 {
        display: block;
    }

    .text11 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item11:hover+.text11 {
        display: block;
    }

    .text12 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item12:hover+.text12 {
        display: block;
    }

    .text13 {
        display: none;
        width: 1000px;
        position: absolute;
        top: 50%;
        left: 250px;
        padding: 16px;
        border-radius: 5px;
        background: #33cc99;
        color: #fff;
        font-weight: bold;
    }

    .item13:hover+.text13 {
        display: block;
    }
</style>
<!----------------------------------------------------------------------->

<body>
    <form action="musubino_create.php" method="POST">>
        <fieldset>
            <h2>入力画面</h2>
            <form>
                <fieldset class="hope_contents">

                    <div class="hope_title">
                        <h2>MUSUBINO～希望表明書～</h2>
                    </div>
                    <div class="hope_text">
                        <p>私は、人生の最終段階を迎えたときに備え、医療に対する具体的な要望を以下に記しました。自分らしい最期を生きるための「私の希望」です。</p>
                    </div>
                    <div class="medical_hope">
                        <div class="medical_hope_text">
                            <h4>1．医師が回復不能と判断したときに、私がして欲しい医療行為</h4>
                        </div>
                        <div class="medical_hope_item">

                            <div class="medical_hope_item1">
                                <div class="item_box1">
                                    <input type="checkbox" name="med1" value="胸骨圧迫"><label class="item1">胸骨圧迫</label>
                                    <span class="text1">【胸骨圧迫】
                                        <br>心臓が止まった際に胸を強く押す、いわゆる心臓マッサージと言われる行為です。
                                        <br>［メリット］
                                        <br>・全身（特に脳）に血液を送り込むためには早期から容易に行なえる行為ではあります。
                                        <br>［デメリット］
                                        <br>・確実に全身に血液を送り込める方法ではありません。
                                        <br>・心拍が再開したとしても、心停止時間が長かったり、高齢である場合は脳のダメージが大きく、正常な意識に戻らない場合もあります。
                                        <br>・極めて強い力で胸を押すため肋骨を折ってしまう可能性や肺を傷つける可能性が高いです。
                                    </span>
                                </div>
                                <div class="item_box2">
                                    <input type="checkbox" name="med2" value="強心薬･昇圧剤"><label class="item2">強心薬･昇圧剤</label>
                                    <span class="text2">【強心薬･昇圧剤】
                                        <br>心臓が止まった際に心臓を動かすため、あるいは血圧が下がった際に血圧を上げるために薬剤を使用します。
                                        <br>［メリット］
                                        <br>・強力な作用を持つ薬剤ですので胸骨圧迫と併行すると心拍を再開させる可能性が高まります。
                                        <br>※個人差はあります。
                                        <br>［デメリット］
                                        <br>・多量な使用や長期的な使用は身体に負担をかけてしまいます。
                                        <br>※心臓の動きや血圧が安定してくれば徐々に使用量を減量し、中断します。再び心停止や血圧低下があった場合は再使用します。</span>
                                </div>
                                <div class="item_box3">
                                    <input type="checkbox" name="med3" value="気管挿管"><label class="item3">気管挿管</label>
                                    <span class="text3">【気管挿管】<br>口から気道（肺へ繋がる空気の通り道）にかけて太いチューブを挿入して気道を確保する行為です。
                                        <br>［メリット］
                                        <br>・肺へ確実に酸素を送り込むことができるようになります。
                                        <br>［デメリット］
                                        <br>・治療とは言え、身体にとっては異物です。喉に痛みや強い違和感を感じる可能性が高いです。
                                        <br>※鎮痛剤･鎮静剤を使って痛みや違和感を和らげることはできますが、個人差はあります。
                                        <br>・チューブ自体が気道を傷つけてしまう危険性や気胸を起こす危険性もあります。
                                        <br>・接着性の強いテープや器具を使ってチューブを口元に固定します。テープや器具で口周りの皮膚を傷つける可能性があります。
                                        <br>・長期的に行なうと肺炎や気道損傷、気胸を引き起こす危険性が高まるため、気管切開を行うことを検討する必要があります。
                                        <br>・口から食事や薬を飲むことができないため
                                    </span>
                                </div>
                                <div class="item_box4">
                                    <input type="checkbox" name="med4" value="人工心肺"><label class=" item4">人工心肺</label>
                                    <span class="text4">【人工心肺】太ももの付け根（或いは首）にある血管に太いチューブを挿入して機械で心臓や肺の代わりに身体に血液と酸素を送る行為です。
                                        <br>［メリット］
                                        <br>・心臓や肺の負担を和らげることができます。
                                        <br>［デメリット］
                                        <br>・心臓や肺の代わりを100％担えるわけではありません。
                                        <br>・太いチューブを周囲の皮膚に縫い付けるため皮膚を傷つける可能性が高いです。
                                        <br>・チューブが折れ曲がったり、抜けてしまう事を防ぐためにも自由な体勢を取ることができません。長期間同じ体勢で過ごすことになり、背中やお尻、踵などに褥瘡ができてしまう可能性もあります。
                                        <br>・その他にも以下のような合併症の危険性も伴います。<br>・血栓<br>・出血<br>・褥瘡
                                    </span>
                                </div>
                            </div>
                            <div class="medical_hope_item2">
                                <div class="item_box5">
                                    <input type="checkbox" name="med5" value="人工呼吸器"><label class=" item5">人工呼吸器</label>
                                    <span class="text5">【人工呼吸器】自力で十分な呼吸ができない場合に、機械を使って肺に酸素を送り込む行為です。気管挿管と併行する必要があります。
                                        <br>チューブを挿入せずに人工呼吸を行なう非侵襲型人工呼吸器（NPPV）もありまずが、適応が限られます。
                                        <br>［メリット］
                                        <br>肺に確実に酸素を送り込むことができます。
                                        <br>［デメリット］
                                        <br>・人間の自然な呼吸（陰圧換気）と異なり、肺に酸素を押し込む（陽圧換気）ため強い苦痛が伴う場合があります。
                                        <br>・過度な圧力が加わると気胸を引き起こす危険性もあります。
                                        <br>※鎮痛剤･鎮静剤を使って痛みや違和感を和らげることはできますが、個人差はあります。
                                        <br>強い作用のある鎮痛剤･鎮静剤を併用するため多量な使用や長期的な使用は腎臓や肝臓を痛める危険性が場合があります。
                                        <br>・気管挿管と同様に、チューブを固定するためのテープや器具で皮膚を傷つける可能性が高いです。
                                        <br>・長期的な使用が必要な場合は気管切開を行なう事を検討する必要があります。（気管挿管の説明をご参照ください。）
                                    </span>
                                </div>
                                <div class="item_box6">
                                    <input type="checkbox" name="med6" value="気管切開"><label class=" item6">気管切開</label>
                                    <span class="text6">【気管切開】喉に穴を空けて気道にかけてチューブを挿入します。
                                        <br>［メリット］
                                        <br>・気管挿管に比べ、比較的に喉の違和感などの苦痛が軽減されます。
                                        <br>・強い副作用のある鎮痛剤･鎮静剤を使用する必要もなくなります。
                                        <br>・肺炎を起こす危険性も減ります。
                                        <br>［デメリット］
                                        <br>・外見上、喉元にチューブが挿入されているのが顕著です。痛々しさを感じるご家族もいらっしゃいます。
                                        <br>・喉にチューブがある違和感はあります。
                                        <br>・気管挿管同様に声を出すことはできません。
                                        <br>※声を出せる特殊なチューブもありますが、人工呼吸器の併行が必要な場合は適応できません。
                                    </span>
                                </div>
                                <div class="item_box7">
                                    <input type="checkbox" name="med7" value="人工透析"><label class=" item7">人工透析</label>
                                    <span class="text7">【人工透析】腎臓が機能しなくなって体内の老廃物を尿として排泄できなくなった際に首や太ももの付け根あたりの血管内に太いチューブを挿入し、機械で血液内の老廃物を排除する行為です。
                                        <br>［メリット］
                                        <br>・腎臓の代わりに体内の老廃物を排除してくれます。
                                        <br>［デメリット］
                                        <br>・太いチューブを介して外付けの大きな機械をつながれた状態になるため、自由な体勢をとることができません。
                                        <br>・チューブの不快感を感じる場合もあります。
                                        <br>・血液がチューブ内で固まってしまい、脳梗塞や肺梗塞を引き起こす危険性があります。
                                        <br>・チューブが血管を傷つけて出血してしまう危険性があります。
                                        <br>・チューブを介して感染を起こす危険性があります。
                                    </span>
                                </div>
                                <div class="item_box8">
                                    <input type="checkbox" name="med8" value="輸血"><label class=" item8">輸血</label>
                                    <span class="text8">【輸血】貧血に対して血液を投与する行為です。
                                        <br>［メリット］
                                        <br>・確実に体内に血液が送り込まれることで貧血の改善に効果的です。
                                        <br>［デメリット］
                                        <br>・以下のような強い副作用が生じる場合があります。
                                        <br> ・アナフィラキシーショック
                                        <br> ・感染症（HIV,HBV,HCVなど）
                                    </span>
                                </div>

                                <div class="medical_hope_item3">
                                    <div class="item_box9">
                                        <input type="checkbox" name="med9" value="中心静脈栄養"><label class=" item9">中心静脈栄養</label>
                                        <span class="text9">【中心静脈栄養】首や太ももの付け根にある太い血管から心臓の入り口までカテーテルを挿入して栄養価の高い点滴を投与する行為です。
                                            <br>※濃度の濃い点滴であるため通常の点滴を行なうような細い血管では行なう事ができません。
                                            <br>［メリット］
                                            <br>・比較的に高い栄養を摂ることができます。
                                            <br>※ただし食事を摂るほど十分なものではありません。
                                            <br>・治療薬も確実に投与することができ、薬の効果を得やすいです。
                                            <br>［デメリット］
                                            <br>・長期的にカテーテル留置する場合は感染を起こす危険性があります。特に心臓の入り口付近の重要な血管なため重篤な感染症に陥る危険性もあります。
                                            <br>・カテーテルを挿入する際に血管を突き破り肺に刺さってしまうことで気胸を起こす危険性もあります。
                                        </span>
                                    </div>
                                    <div class="item_box10">
                                        <input type="checkbox" name="med10" value="経鼻チューブ栄養"><label class=" item10">経鼻チューブ栄養</label>
                                        <span class="text10">【経鼻チューブ栄養】鼻から胃にかけてチューブを挿入して栄養剤を投与する行為です。
                                            <br>［メリット］
                                            <br>・食事ができない場合でも比較的高い栄養を摂ることができます。
                                            <br>・消化管を使用するため消化機能の低下を防ぐことができます。
                                            <br>［デメリット］
                                            <br>・鼻のチューブに違和感を感じる場合があります。
                                            <br>・チューブが鼻の穴の周囲を圧迫して褥瘡を作る場合があります。
                                        </span>
                                    </div>
                                </div>

                                <div class="item_box11">
                                    <input type="checkbox" name="med11" value="胃ろう"><label class=" item11">胃ろう</label>
                                    <span class="text11">【胃ろう】お腹から胃にかけて穴を空けて専用の接続器具を取り付け、栄養剤を直接胃に投与します。
                                        <br>［メリット］
                                        <br>・経鼻チューブ栄養と比較して不快感が少ないです。
                                        <br>［デメリット］
                                        <br>・定期的に器具の交換が必要となります。
                                        <br>・お腹に器具を取り付けるため不快感を感じる方もいらっしゃいます。
                                    </span>
                                </div>
                                <div class="item_box12">
                                    <input type="checkbox" name="med12" value="緩和医療"><label class=" item12">緩和医療</label>
                                    <span class="text12">【緩和医療】病気に対して治療するのではなく、病気の症状に伴う苦痛に対して鎮痛剤や鎮静剤を使って対処的に苦痛を和らげる行為です。
                                        <br>［メリット］
                                        <br>・苦痛を和らげることで穏やかに過ごすことができます。
                                        <br>［デメリット］
                                        <br>・あくまで「苦痛を和らげる」ことを目的にしており、病気の治療ではありません。治療をしなければ病気は進行します。
                                        <br>・強い作用の薬剤を使用するため意識がぼーっとして意思疎通が十分にとれなくなる状態になる場合があります。
                                    </span>
                                </div>
                            </div>
                            <div class="item_box13">
                                <input type="checkbox" name="med13" value="家族や大切な人が到着するまで胸骨圧迫"><label class=" item13">家族や大切な人が到着するまで胸骨圧迫</label>
                                <span class="text13">【家族や大切な人が到着するまで胸骨圧迫】心肺停止した際に家族や大切な方が死に目に会えるように、到着まで心臓マッサージを行ないます。
                                    <br>［メリット］
                                    <br>・
                                    <br>［デメリット］
                                    <br>・極めて強い力で胸を押すため肋骨を折ってしまう可能性や肺を傷つける可能性が高いです。
                                </span>
                            </div>
                        </div>

                        <div class="other_hope">
                            <h4>2．その他の希望</h4><input type="textaria" id="" name="other">
                        </div>
                </fieldset>
                <div class="">
                    <div class="">
                        <p>以上、私の要望を忠実に果たしてくださった方々に深く感謝申し上げるとともに、<br>その方々が私の要望に従って下さった行為一切の責任は私自身にあることを付記いたします。</p>
                    </div>
                    <div class="sign">
                        <!--【案】以下は電子直筆システム的なものを利用する-->
                        <label>記入日</label><input type="date" id="" name="date"><label>本人署名</label><input type="text" id="" name="name">
                        <!--<label>記入日</label><input type="date" id="" name="date"><label>見届人署名</label><input type="text" id="" name="name"><label>続柄</label><input type="text" id="" name=""><label>記入日</label><input type="date" id="" name="date"><label>担当医署名</label><input type="text" id="" name="name"><label>施設名</label><input type="text" id="" name="">-->
                    </div>
                    <div class=""><input type="submit" id="" name="" value="登録"></div>
                </div>
        </fieldset>
    </form>
    </fieldset>
    </form><a href="musubino_read.php">確認画面</a>
</body>

</html>