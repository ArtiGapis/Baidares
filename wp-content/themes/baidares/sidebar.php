<div class="header-wraper">
    <nav role='navigation'>
        <ul>
            <li id="heart-trigger"  class="heart heart-trigger">
                <p class="flip" onclick="myFunction()">Click to show panel</p>                        </li>
            <li id="menu"><?php wp_nav_menu($args); ?></li>
        </ul>
    </nav>
</div>
<script>
    document.getElementById("menu").style.display = "none";

    function myFunction() {
        var x = document.getElementById("menu");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

</script>