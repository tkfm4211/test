<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>keijiban</title>
        <link rel="stylesheet" type="text/css" href="keijiban.css">
    </head>
    
    <body>
        <img src="diblog_logo.jpg">
        <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
        </header>
        
        <main>
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <div class="form">    
                    <form method="post" action="insert.php">
                        <p>入力フォーム</p>
                        <div>
                            <label>ハンドルネーム</label><br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>
            
                        <div>
                            <label>タイトル</label><br>
                            <input type="text" class="text" size="35" name="title">
                        </div>
            
                        <div>
                            <label>コメント</label><br>
                            <textarea cols="65" rows="13" name="comments"></textarea>
                        </div>
                        
                        <div>
                            <input type="submit" class="submit" value="送信する">
                        </div>
                    </form>
                </div>
                
                <div class="abc"></div>
                
                <?php
                mb_internal_encoding("utf8");

                $pdo=new PDO("mysql:dbname=tt;host=localhost;","root","");
                $stmt=$pdo->query("select*from keijiban");

                while($row = $stmt->fetch()) {
                echo "<div class=kiji>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class=contents>";
                echo nl2br($row['comments']);
                echo "<div class=handlename>posted by:".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
                }
                ?>
            </div>
            
            <div class="right">
                <h2>人気の記事</h2>
                <p>PHPオススメ本</p>
                <p>PHP　MyAdominの使い方</p>
                <p>いま人気のエディタTops</p>
                <p>HTMLの基礎</p>
                <h2>オススメリンク</h2>
                <p>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</p>
                <p>XAMPPのダウンロード</p>
                <p>Eclipseのダウンロード</p>
                <p>Braketsのダウンロード</p>
                <h2>カテゴリ</h2>
                <p>HTML</p>
                <p>PHP</p>
                <p>MySQL</p>
                <p>JavaScript</p>
            </div>
            
            
        </main>
        
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
    
    </body>
</html>