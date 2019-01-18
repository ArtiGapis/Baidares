<div class="header-wraper">
    <nav role='navigation'>
        <ul>
            <li id="heart-trigger"  class="heart heart-trigger">
                <p class="flip" onclick="heading_btn()">MENIU</p>                        </li>
            <li id="menu" style="display: none;"><?php wp_nav_menu($args); ?></li>
        </ul>
    </nav>
</div>
<script>
    function heading_btn() {
        var x = document.getElementById("menu");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>