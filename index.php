

<body style="background-image: url('https://cdn.pixabay.com/photo/2019/11/07/08/12/sea-4608198_1280.jpg');
background-size:100%;">

<?php 

$r=rand(000000, 999999);


function ch($r)
{
    return "<div style=background-color:#$r; width=300px;height:300px;>" . $r . "</div>";
}
echo ch($r);

?>

<div style="display:flex;">
<div style="width:300px; height:300px; margin-right:2em; background-color:#<?php echo rand(000000, 999999)?>">ONE</div>
<div style="width:300px; height:300px; margin-right:2em;background-color:#<?php echo rand(000000, 999999)?>">ONE</div>
<div style="width:300px; height:300px; margin-right:2em;background-color:#<?php echo rand(000000, 999999)?>">ONE</div>
<div style="width:300px; height:300px; margin-right:2em;background-color:#<?php echo rand(000000, 999999)?>">ONE</div>
<div>
<script>

test()
</script>
</body>

