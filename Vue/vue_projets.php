<?php 
    $title = "Projets";
    $css = "projets";
    ob_start();
?>
    <content>
        <div class="project-container">
            <h2>PROJETS</h2>
            <div class="blog-post">
                <div class="blog-post_img">
                    <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                </div>
                <div class="blog-post_info">
                    <div class="blog-post_date">
                        <span>Gabriel Lopez</span>
                        <span>Nov 12 2021</span>
                    </div>
                    <h1 class="blog-post_title">Lorem ipsum dolor sit amet.</h1>
                    <p class="blog-post_text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores a, tempore veniam quasi sint fugiat
                        facilis, facere, amet magnam optio velit. Laudantium et temporibus soluta, esse cupiditate aliquid
                        dicta accusantium.
                    </p>
                    <a href="#" class="blog-post_cta">En savoir plus</a>
                </div>
            </div>

            <div class="blog-post">
                <div class="blog-post_img">
                    <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29kaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="blog-post_info">
                    <div class="blog-post_date">
                    <span>Sagar Developer</span>
                    <span>Dec 25 2021</span>
                </div>
                <h1 class="blog-post_title">Lorem ipsum dolor sit amet.</h1>
                <p class="blog-post_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores a, tempore veniam quasi sint fugiat
                    facilis, facere, amet magnam optio velit. Laudantium et temporibus soluta, esse cupiditate aliquid
                    dicta accusantium.
                </p>
                <a href="#" class="blog-post_cta">En savoir plus</a>
            </div>
        </div>
    </content>
<?php
    $content = ob_get_clean();
    require 'Vue/vue_header.php';
    echo $content;
    require 'Vue/vue_footer.php';
?>