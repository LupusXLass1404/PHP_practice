<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $page="index";
        include("./common/nav.php");
    ?>

    <h1>首頁</h1>

    <main>
        <p>緩光臨</p>
    </main>

    <?php include("./common/footer.html");?>
</body>
</html>



<<if $wrenHeistHelp is false and $heistPhase is 3>>
	You have time before your next dance. You're not sure if Wren's managed to slip away from the <<person>>. You wander until you find <<him>>.
<<else>>
	Wren notices you watching <<nnpc_him "Wren">> and jerks <<nnpc_his "Wren">> head towards the
	<<if $heistPhase is 1>>
		wine cellar.
	<<elseif  $heistPhase is 2>>
		kitchen.
	<<elseif $heistPhase is 3>>
		stairs.
	<<else>>
		exit.
	<</if>>
	<<nnpc_He "Wren">> makes <<nnpc_his "Wren">> way there.
<</if>>

<<if $wrenHeistHelp is false and $heistPhase is 3>>
        You have time before your next dance. You're not sure if Wren's managed to slip away from the <<person>>. You wander until you find <<him>>.
            <<else>>
        Wren notices you watching <<nnpc_him "Wren">> and jerks <<nnpc_his "Wren">> head towards the
    <<if $heistPhase is 1>>
            wine cellar.
                        <<elseif  $heistPhase is 2>>
    kitchen.
        <<elseif $heistPhase is 3>>
        stairs.
        <<else>>
        exit.
<</if>>
            <<nnpc_He "Wren">> makes <<nnpc_his "Wren">> way there.
<</if>>