<html>
<body>
<script id="home-tpl" type="text/x-handlebars-template">
    <div class='header'><h1>Home</h1></div>
    <div class='search-bar'><input class='search-key' type="text"/></div>
    <ul class='employee-list'></ul>
    <div id='php-test'>
        <?php
            $datum = date("Ymd", Time() +3600*24*3);
            $supl = file_get_contents('http://www.gyrec.cz/drupal/files/suplovani/zast_'.$datum.'.htm');
            echo $supl;
        ?>
    </div>
</script>
<script id="employee-li-tpl" type="text/x-handlebars-template">
    {{#.}}
    <li><a href="#employees/{{this.id}}">{{this.firstName}} {{this.lastName}}<br/>{{this.title}}</a></li>
    {{/.}}
</script>
<script id="employee-tpl" type="text/x-handlebars-template">
    <div class='header'><a href='#' class="button header-button header-button-left">Back</a><h1>Details</h1></div>
    <div class='details'>
        <img class='employee-image' src='img/{{firstName}}_{{lastName}}.jpg' />
        <h1>{{firstName}} {{lastName}}</h1>
        <h2>{{title}}</h2>
        <span class="location"></span>
        <ul>
            <li><a href="tel:{{officePhone}}">Call Office<br/>{{officePhone}}</a></li>
            <li><a href="tel:{{cellPhone}}">Call Cell<br/>{{cellPhone}}</a></li>
            <li><a href="sms:{{cellPhone}}">SMS<br/>{{cellPhone}}</a></li>
        </ul>
    </div>
</script>
<script src="phonegap.js"></script>
<script src="lib/handlebars.js"></script>
<script src="lib/jquery-1.8.2.min.js"></script>
<script src="js/storage/memory-store.js"></script>

<script src="js/HomeView.js"></script>
<script src="js/EmployeeView.js"></script>
<script src="js/main.js"></script>
</body>
</html>