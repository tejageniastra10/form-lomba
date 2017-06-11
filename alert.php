<!DOCTYPE html>
<html>
<head>
<title>Sweet Alert</title>
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
<script type="text/javascript" src="sweetalert-master/dist/sweetalert.min.js"></script>
</head>
<body>
<button class="a">Sweet Alert</button>
<script>
function sweet (){
$(".a").click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');

    swal({
        title: "Are you sure?",
        text: "By clicking 'OK' you will be redirected to the link.",
        type: "warning",
        showCancelButton: true
    },
    function(){
        window.location.href = link;
    });
});
}
</script>
</body>
</html>